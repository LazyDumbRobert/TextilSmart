<?php

namespace App\Notifications;

use App\Models\OrdenCompra;
use App\Models\Pedido;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificacionPedido extends Notification
{
    use Queueable;
    public $pedido;
    /**
     * Create a new notification instance.
     */
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = '/notificaciones';
        return (new MailMessage)
                    ->line('Se ha generado un nuevo pedido.')
                    ->action('Ver Notificaciones',$url);
    }

    public function toDatabase($notifiable)
    {
        return [
            'pedido_id' =>  $this->pedido->id,
            'asunto' => 'Nuevo Pedido Registrado',
            'Monto Total' => 'Monto: Q' . $this->pedido->monto_total,
            'Fecha Pedido' => 'Fecha: ' . $this->pedido->fecha_pedido->format('d-m-Y h:i:s'),
        ];
    }
}
