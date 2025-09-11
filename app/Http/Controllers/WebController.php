<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WebController extends Controller
{

	public function inicio() //OK
	{
		return view('inicio');
	}

    public function invitados() //OK
	{
		return view('invitados');
	}

	public function checkout() //OK
	{
		return view('checkout');
	}

    //


    public function confirmado($id) //OK
	{
        $entrada = Entrada::where('uuid',$id)->first();
        $qrSvg = QrCode::size(200)->margin(3)->generate($entrada->identificacion);

		return view('confirmado', compact('entrada','qrSvg'));
	}


    public function cancelado() //OK
	{
		return view('cancelado');
	}


	// 
	public function api_checkout(Request $request)
    {
        // Validación
        $validator = Validator::make(
            $request->all(),
            [
                'nombre'            => 'required|string|max:120',
                'apellido_1'        => 'required|string|max:120',
                'apellido_2'        => 'nullable|string|max:120',

                'fecha_nacimiento'  => 'required|date|before:today',
                'provincia'         => 'required|string|max:120',
                'ciudad'            => 'required|string|max:120',
                'iglesia'           => 'required|string|max:180',

                'pastor'            => 'sometimes|boolean',
                'jovenes_lider'     => 'sometimes|boolean',

                'check_proteccion'  => 'accepted',

                'camiseta_entrada'  => 'sometimes|boolean',
                'color'             => 'required_if:camiseta_entrada,1|in:black,heather-grey',
                'size'              => 'required_if:camiseta_entrada,1|in:xxs,xs,s,m,l,xl,2xl',

                'email'             => 'required|email:rfc,dns|max:190',
            ],
            [],
            [
                'apellido_1'        => 'apellido',
                'apellido_2'        => 'segundo apellido',
                'fecha_nacimiento'  => 'fecha de nacimiento',
                'check_proteccion'  => 'protección de datos',
                'camiseta_entrada'  => 'camiseta',
                'email'             => 'correo electrónico',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Datos inválidos',
                'errors'  => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        // Normaliza booleans (por si los necesitas ya tipados)
        $data['pastor']         = $request->boolean('pastor');
        $data['jovenes_lider']  = $request->boolean('jovenes_lider');
        $data['camiseta_entrada']= $request->boolean('camiseta_entrada');
        $data['check_proteccion']= $request->boolean('check_proteccion');

        return response()->json([
            'message' => 'OK',
            'data'    => $data,
        ]);
    }


}
