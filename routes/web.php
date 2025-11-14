<?php

use App\Http\Controllers\Api\ApiBase;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

// Web
Route::get('/', [WebController::class, 'inicio'])->name('inicio');
Route::get('/invitados', [WebController::class, 'invitados'])->name('invitados');
Route::get('/checkout', [WebController::class, 'checkout'])->name('web_checkout');
Route::get('/entrada', [WebController::class, 'entrada'])->name('web_entrada');

// Páginas de Stripe
Route::get('/confirmado/{id}', [WebController::class, 'confirmado'])->name('checkout_success');
Route::get('/cancelado', [WebController::class, 'cancelado'])->name('cancelado');

// Com de entrada
Route::post('/entrqury', [ApiBase::class, 'entrada_query'])->name('post_entrada_cr');
