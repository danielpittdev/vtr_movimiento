<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entrada extends Model
{
    protected $table = 'entradas';

    protected $fillable = [
        'uuid',
        'identificacion',
        'nombre',
        'apellido1',
        'apellido2',
        'fecha_nacimiento',
        'provincia',
        'ciudad',
        'iglesia',
        'pastor',
        'jovenes_lider',
        'check_proteccion',
        'tipo_entrada',
        'email',
        'camiseta_entrada',
        'color',
        'size',
        'amount_total',
        'currency',
        'estado',
        'stripe_session_id',
        'stripe_payment_intent',
        'validar',
        'validar_fecha',
    ];

    protected $casts = [
        'pastor'          => 'boolean',
        'jovenes_lider'   => 'boolean',
        'check_proteccion'=> 'boolean',
        'camiseta_entrada'=> 'boolean',
        'validar'         => 'boolean',
        'fecha_nacimiento'=> 'date',
        'validar_fecha'   => 'datetime',
        'amount_total'    => 'integer',
    ];

    /**
     * Genera automáticamente UUID e identificacion si no existen.
     */
    protected static function booted()
    {
        static::creating(function ($entrada) {
            if (empty($entrada->uuid)) {
                $entrada->uuid = (string) Str::uuid();
            }
            if (empty($entrada->identificacion)) {
                $entrada->identificacion = strtoupper(Str::random(7));
            }
        });
    }
}