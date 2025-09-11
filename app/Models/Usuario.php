<?php

namespace App\Models;

use App\Models\Anotacion;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable implements JWTSubject
{
	use HasFactory, Notifiable;
	protected $table = 'usuarios';

	protected static function boot()
	{
		parent::boot();

		// Al crear un nuevo usuario, asigna un UUID si no tiene uno ya
		static::creating(function ($model) {
			if (empty($model->uuid)) {
				$model->uuid = (string) Str::uuid();
			}
		});
	}

	protected function casts(): array
	{
		return [
			'email_verified_at' => 'datetime',
			'password' => 'hashed',
		];
	}

	// Campos rellenables
	protected $fillable = [
		'nombre',
		'apellido_1',
		'apellido_2',
		'email',
		'nombre_usuario',
		'avatar',
		'password',
	];

	// Esconder los campos
	protected $hidden = [
		'email',
		'password',
		'remember_token',
	];

	public function getJWTIdentifier()
	{
		return $this->getKey();
	}

	public function getJWTCustomClaims()
	{
		return [];
	}

	// public function anotaciones(): HasMany // Opcional: type-hinting para claridad
	// {
	// 	// Llamas al método hasMany() y le pasas la clase del modelo relacionado
	// 	return $this->hasMany(Anotacion::class, 'usuario_id');
	// }
}
