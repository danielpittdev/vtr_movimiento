<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\WebController;

# Rutas de PANEL
Route::prefix('stripe')->group(function () {
    // Crear sesión de checkout
    Route::post('checkout', [StripeController::class, 'api_checkout'])->name('api_checkout');

    // Webhook de Stripe (requiere firma secreta en .env STRIPE_WEBHOOK_SECRET)
    Route::post('webhook', [StripeController::class, 'api_webhook'])->name('api_webhook');

    // Opcionales (redirigir después de pagar o cancelar)
    Route::get('success', [WebController::class, 'checkout_success'])->name('checkout_success');
    Route::get('cancel', [WebController::class, 'checkout_cancel'])->name('checkout_cancel');
});