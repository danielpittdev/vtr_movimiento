<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Entrada;
use Illuminate\Support\Facades\Validator;

class ApiBase extends Controller
{
	public function entrada_query(Request $request): JsonResponse
	{
		$validacion = $request->validate([
			'email' => 'required|email'
		]);

		try {
			$entradas = Entrada::where('email', $request->email)->get();
		} catch (\Throwable $th) {
			return response()->json([
				'mensaje' => 'No hay entradas para los datos recuestados.',
			], 501);
		}

		return response()->json([
			'entradas' => $entradas,
			'url' => 'https://vtr-email-tracker-main-4zqfng.laravel.cloud/entrada/' . $entradas[0]->uuid
		], 200);
	}
}
