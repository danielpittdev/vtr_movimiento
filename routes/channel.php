<?php

use Illuminate\Support\Facades\Broadcast;

// expone /broadcasting/auth con los middlewares que uses
Broadcast::routes([
	'middleware' => ['web', 'auth'], // o ['auth:sanctum'] si usas SPA/API
]);

// autoriza tu canal privado
Broadcast::channel('private-slides.room-1', function ($user) {
	// lógica real; para probar:
	return (bool) $user;
});
