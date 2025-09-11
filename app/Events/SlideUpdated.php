<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class SlideUpdated implements ShouldBroadcastNow
{
	use Dispatchable, InteractsWithSockets, SerializesModels;

	public $datos;

	/**
	 * Crea una nueva instancia del evento.
	 */
	public function __construct($datos)
	{
		$this->datos = $datos;
	}

	/**
	 * El canal en el que se debe emitir el evento.
	 */
	public function broadcastOn(): Channel
	{
		return new Channel('publico'); // también puede ser PrivateChannel o PresenceChannel
	}

	/**
	 * El nombre del evento que se usará en el frontend.
	 */
	public function broadcastAs(): string
	{
		return 'TestEvent';
	}
}
