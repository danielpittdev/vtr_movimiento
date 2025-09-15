@php
   // Helpers por si faltan campos
   $importe = number_format(($entrada->amount_total ?? 0) / 100, 2, ',', '.');
   $fechaEvento = $entrada->fecha_evento_formateada ?? ($entrada->fecha_evento ?? '15 de noviembre · 11:00 h');
   $lugar = $entrada->lugar ?? 'Palacio de Congresos de Estepona (Málaga)';
   $idEntrada = $entrada->identificacion ?? strtoupper(Str::random(7));
   $urlEntrada = route('checkout_success', ['id' => $entrada->uuid]);
@endphp

@component('mail::message')
   # 🎟️ ¡Tu entrada está confirmada!

   Hola **{{ ucfirst($entrada->nombre) ?? '!' }}**,
   hemos recibido tu pago correctamente. A continuación tienes **todos los datos de tu entrada** y el botón para acceder a ella cuando quieras.

   @component('mail::panel')
      **ID de la entrada:** {{ $idEntrada }}
      **Importe:** €{{ $importe }}
   @endcomponent

   ## 🗓 Detalles del evento
   - **Fecha y hora:** {{ $fechaEvento }}
   - **Lugar:** {{ $lugar }}

   @isset($entrada->asiento)
      - **Asiento/Localidad:** {{ $entrada->asiento }}
   @endisset

   @isset($entrada->nota)
      - **Notas:** {{ $entrada->nota }}
   @endisset

   @component('mail::button', ['url' => $urlEntrada])
      Ver mi entrada
   @endcomponent

   {{-- Bloque QR opcional (muestra si existe) --}}
   @isset($entrada->qr_url)
      <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin: 24px 0;">
         <tr>
            <td align="center">
               <img src="{{ $entrada->qr_url }}" alt="QR de tu entrada" width="160" height="160" style="display:block;border:0;outline:none;text-decoration:none;width:160px;height:160px;">
               <div style="font-size:12px;color:#667085;margin-top:8px;">Presenta este código en el acceso</div>
            </td>
         </tr>
      </table>
   @endisset

   ### ℹ️ Recordatorios
   - Te enviaremos un recordatorio **3 días antes** y otro **1 hora antes** del evento.
   - Tu entrada es **personal e intransferible** y **solo puede usarse una vez**.

   Si necesitas ayuda, responde a este correo o escríbenos a contacto@vtrmovimiento.com

   @slot('subcopy')
      Si el botón no funciona, copia y pega esta URL en tu navegador:
      {{ $urlEntrada }}
   @endslot
@endcomponent
