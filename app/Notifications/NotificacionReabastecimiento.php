<?php

namespace App\Notifications;

use App\Models\OrdenCompra;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificacionReabastecimiento extends Notification
{
    use Queueable;
    public $ordencompra;
    /**
     * Create a new notification instance.
     */
    public function __construct(OrdenCompra $ordencompra)
    {
        $this->ordencompra = $ordencompra;
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
                    ->line('Se ha generado una nueva orden de compra.')
                    ->line('Producto a reabastecer '. $this->ordencompra->materiaPrima->nombre)
                    ->action('Ver Notificaciones',$url);
    }

    public function toDatabase($notifiable)
    {
        return [
            'oc_id' => 'OC-' . $this->ordencompra->id,
            'asunto' => 'Nueva Orden de Compra',
            'producto' => 'Producto: ' . $this->ordencompra->materiaPrima->nombre,
            'proveedor' => 'Proveedor: ' . $this->ordencompra->proveedor->nombre,
            'cantidad' => 'Cantidad a comprar: ' . $this->ordencompra->cantidad,
            'hace' => 'Fecha: ' . $this->ordencompra->created_at->format('d-m-Y h:i:s'),
        ];
    }
}
