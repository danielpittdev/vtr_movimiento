<?php
namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;
use PKPass\PKPass;

class WalletController extends Controller
{
    public function apple(string $uuid)
    {
        $entrada = Entrada::where('uuid', $uuid)->where('estado','paid')->firstOrFail();

        $pass = new PKPass();
        // Rutas a tus certs (guárdalos fuera del repo / versionado)
        $pass->setCertificate(storage_path('wallet/apple/pass_cert.p12'));
        $pass->setCertificatePassword(env('APPLE_PASS_CERT_PASSWORD'));
        $pass->setWWDRcertPath(storage_path('wallet/apple/WWDR.pem'));

        // Archivos gráficos obligatorios
        $pass->addFile(public_path('media/wallet/icon.png'));
        if (file_exists(public_path('media/wallet/icon@2x.png'))) $pass->addFile(public_path('media/wallet/icon@2x.png'));
        if (file_exists(public_path('media/wallet/logo.png')))    $pass->addFile(public_path('media/wallet/logo.png'));

        // Datos del pass (estilo eventTicket)
        $data = [
            "formatVersion" => 1,
            "passTypeIdentifier" => env('APPLE_PASS_TYPE_ID', 'pass.com.tudominio.vtr'),
            "teamIdentifier" => env('APPLE_TEAM_ID', 'ABCDE12345'),
            "serialNumber" => $entrada->identificacion, // único
            "organizationName" => "Venga Tu Reino",
            "description" => "Entrada al evento",
            "eventTicket" => [
                "primaryFields" => [[ "key"=>"evento", "label"=>"Evento", "value"=>"VTR 2025" ]],
                "secondaryFields" => [
                    [ "key"=>"nombre", "label"=>"Nombre", "value"=>$entrada->nombre.' '.$entrada->apellido1 ],
                    [ "key"=>"tipo",   "label"=>"Tipo",   "value"=>$entrada->tipo_entrada ],
                ],
                "auxiliaryFields" => [
                    [ "key"=>"codigo", "label"=>"Código", "value"=>$entrada->identificacion ],
                ],
            ],
            "barcode" => [
                "format" => "PKBarcodeFormatQR",
                "message" => $entrada->identificacion,
                "messageEncoding" => "iso-8859-1",
                "altText" => $entrada->identificacion
            ],
            "backgroundColor" => "rgb(16, 185, 129)",   // tailwind emerald-500 aprox
            "foregroundColor" => "rgb(255,255,255)",
            "labelColor"      => "rgb(255,255,255)",
        ];

        $pass->setJSON(json_encode($data));
        $pkpass = $pass->create(true);

        return response($pkpass, 200, [
            'Content-Type'        => 'application/vnd.apple.pkpass',
            'Content-Disposition' => 'attachment; filename="entrada-'.$entrada->identificacion.'.pkpass"',
        ]);
    }
}