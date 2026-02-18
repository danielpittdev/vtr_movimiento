<?php

namespace App\Mail;

use App\Models\Entrada;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PagoConfirmado extends Mailable
{
    use Queueable, SerializesModels;

    public $entrada;

    public function __construct(Entrada $entrada)
    {
        $this->entrada = $entrada;
    }

    public function build()
    {
        return $this->subject('Entrada VTR')
            ->markdown('emails.pago.confirmado', [
                'entrada' => $this->entrada,
            ]);
    }
}
