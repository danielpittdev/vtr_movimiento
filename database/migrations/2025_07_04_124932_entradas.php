<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();

            // Código/identificación de entrada (7 dígitos alfanumérico único)
            $table->string('identificacion')->unique();

            // Datos personales
            $table->string('nombre');
            $table->string('apellido_1');
            $table->string('apellido_2')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('iglesia')->nullable();

            // Roles opcionales
            $table->boolean('pastor')->default(false);
            $table->boolean('jovenes_lider')->default(false);

            // Protección de datos (obligatorio marcar en el form)
            $table->boolean('check_proteccion')->default(false);

            // Tipo de entrada
            $table->string('tipo_entrada')->default('entrada normal');

            // Email para envío
            $table->string('email');

            // Camiseta opcional
            $table->boolean('camiseta_entrada')->default(false);
            $table->string('color')->nullable();
            $table->string('size')->nullable();

            // Información de pago
            $table->integer('amount_total')->default(0); // en céntimos
            $table->string('currency', 10)->default('eur');
            $table->string('estado')->default('pending'); // pending|paid|failed|canceled

            // Stripe refs
            $table->string('stripe_session_id')->nullable()->index();
            $table->string('stripe_payment_intent')->nullable()->index();

            // Checker
            $table->boolean('validar')->default(false);
            $table->timestamp('validar_fecha')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};