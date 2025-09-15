<?php

namespace App\Http\Controllers;

use Stripe\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Entrada;
use Stripe\Stripe;
use Stripe\Checkout\Session as CheckoutSession;
use Stripe\Webhook;
use App\Mail\PagoConfirmado;
use Illuminate\Support\Facades\Mail;

class StripeController extends Controller
{
    public function api_checkout(Request $request)
    {
        // Normaliza checkboxes antes de validar
        $payload = $request->all();
        $payload['pastor']           = $request->has('pastor');
        $payload['jovenes_lider']    = $request->has('jovenes_lider');
        $payload['camiseta_entrada'] = $request->has('camiseta_entrada');

        // 1) Validación
        $v = Validator::make($payload, [
            'nombre'            => 'required|string|max:120',
            'apellido_1'        => 'required|string|max:120',
            'apellido_2'        => 'nullable|string|max:120',
            'fecha_nacimiento'  => 'required|date|before:today',
            // 'provincia'         => 'nullable|string|max:120',
            'ciudad'            => 'required|string|max:120',
            'iglesia'           => 'required|string|max:180',
            'pastor'            => 'sometimes|boolean',
            'jovenes_lider'     => 'sometimes|boolean',
            'check_proteccion'  => 'accepted',
            'camiseta_entrada'  => 'sometimes|boolean',
            // color/size solo si hay camiseta
            'color'             => 'required_if:camiseta_entrada,true|in:camiseta-azul,camiseta-rosa',
            'size'              => 'required_if:camiseta_entrada,true|in:s,m,l,xl,2xl,3xl',
            'email'             => 'required|email:rfc,dns|max:190',
            'tipo_entrada'      => 'nullable|string|max:120',
        ], [
            'size.required_if' => 'Elige un tamaño',
            'apellido_1.required' => 'El campo apellido es obligatorio',
        ]);

        if ($v->fails()) {
            return response()->json([
                'message' => 'Datos inválidos',
                'errors'  => $v->errors(),
            ], 422);
        }

        $data = $v->validated();

        // 2) Decide el Price ID según camiseta
        $hasShirt = (bool)($data['camiseta_entrada'] ?? false);
        $priceId = $hasShirt
            ? env('ENTRADA_CAMISETA_PRECIO')   // Entrada + Camiseta
            : env('ENTRADA_PRECIO');  // Entrada normal

        // setear conteo de entradas
        $count_entradas = Entrada::get();
        if (count($count_entradas) > 2400) {
            return response()->json([
                'data' => [
                    'message' => 'No hay entradas disponibles',
                    'errors' => ['email' => ['No hay entradas disponibles.']]
                ],
                'error' => 422
            ], 422);
        }

        // 3) Crear pre-reserva
        $entrada = new Entrada();
        $entrada->uuid              = (string) Str::uuid();
        $entrada->identificacion    = strtoupper(Str::random(7));
        $entrada->nombre            = $data['nombre'];
        $entrada->apellido_1        = $data['apellido_1'];
        $entrada->apellido_2        = $data['apellido_2'] ?? null;
        $entrada->fecha_nacimiento  = $data['fecha_nacimiento'];
        // $entrada->provincia         = $data['provincia'];
        $entrada->ciudad            = $data['ciudad'];
        $entrada->iglesia           = $data['iglesia'];
        $entrada->pastor            = (bool)($data['pastor'] ?? false);
        $entrada->jovenes_lider     = (bool)($data['jovenes_lider'] ?? false);
        $entrada->check_proteccion  = (bool)$data['check_proteccion'];
        $entrada->tipo_entrada      = $data['tipo_entrada'] ?? 'entrada normal';
        $entrada->email             = $data['email'];
        $entrada->camiseta_entrada  = $hasShirt;
        $entrada->color             = $data['color'] ?? null;
        $entrada->size              = $data['size'] ?? null;
        // amount_total lo rellenamos desde el webhook con session.amount_total
        $entrada->amount_total      = 0;
        $entrada->currency          = env('STRIPE_CURRENCY', 'eur');
        $entrada->estado            = 'pending';
        $entrada->save();

        // 4) Crear Checkout Session con el PRICE id
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = CheckoutSession::create([
            'mode'           => 'payment',
            'customer_email' => $entrada->email,
            'line_items'     => [[
                'price'    => $priceId,
                'quantity' => 1,
            ]],
            'metadata'       => ['entrada_uuid' => $entrada->uuid, 'email' => $data['email']],
            'success_url'    => route('checkout_success', ['id' => $entrada->uuid]),
            'cancel_url'     => route('checkout_cancel')  . '?r=' . $entrada->uuid,
            'locale'         => 'es',
            'allow_promotion_codes' => false,
        ]);

        $entrada->stripe_session_id = $session->id;
        $entrada->save();

        return response()->json([
            'url'  => $session->url,
            'uuid' => $entrada->uuid,
        ]);
    }

    public function api_webhook(Request $request)
    {
        $signature = $request->header('Stripe-Signature');
        $secret = env('STRIPE_WEBHOOK_SECRET');

        try {
            $event = Webhook::constructEvent($request->getContent(), $signature, $secret);
        } catch (\Throwable $e) {
            return response('Invalid', 400);
        }

        switch ($event->type) {
            case 'checkout.session.completed':
            case 'checkout.session.async_payment_succeeded': {
                    /** @var \Stripe\Checkout\Session $session */
                    $session = $event->data->object;
                    $uuid = $session->metadata->entrada_uuid ?? null;
                    $email_envio = $session->metadata->envio ?? null;

                    if ($uuid) {
                        $entrada = Entrada::where('uuid', $uuid)->first();
                        if ($entrada && $entrada->estado !== 'paid') {
                            $entrada->estado = 'paid';
                            $entrada->stripe_payment_intent = $session->payment_intent ?? null;
                            if (isset($session->amount_total)) {
                                $entrada->amount_total = (int)$session->amount_total; // céntimos
                            }
                            if (empty($entrada->identificacion)) {
                                $entrada->identificacion = strtoupper(Str::random(7));
                            }
                            $entrada->save();

                            // Envía el email
                            Mail::to($entrada->email)->send(new PagoConfirmado($entrada));
                        }
                    }
                    break;
                }

            case 'checkout.session.expired':
            case 'payment_intent.payment_failed': {
                    // Marca como fallido solo si seguía pendiente
                    $obj = $event->data->object;
                    $uuid = $obj->metadata->entrada_uuid ?? null;
                    if ($uuid) {
                        $entrada = Entrada::where('uuid', $uuid)->first();
                        if ($entrada && $entrada->estado === 'pending') {
                            $entrada->estado = 'failed';
                            $entrada->save();
                        }
                    }
                    break;
                }
        }

        return response('ok', 200);
    }
}
