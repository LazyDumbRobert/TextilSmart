<?php

namespace App\Livewire;

use Cart;
use App\Models\User;
use App\Models\Pedido;
use Livewire\Component;
use App\Models\Producto;
use Illuminate\Support\Str;
use App\Models\PedidoDetalle;
use Illuminate\Support\Carbon;
use App\Notifications\NotificacionPedido;

class FinalizarPedido extends Component
{
    public $direccion;

    protected $rules = [
        'direccion' => 'required|string|max:255|regex:/^(?=.*[a-zA-Z])[\w\s,.-]+$/'
    ];
    
    
    public function save()
    {
        $datos = $this->validate();

        try {
            $pedido = Pedido::create([
                'user_id' => auth()->user()->id,
                'fecha_pedido' => Carbon::now(),
                'estado_id' => 1,
                'monto_total' => Cart::getTotal(),
                'direccion_entrega' => $datos['direccion'],
                'costo_envio' => 35,
            ]);
            $items = \Cart::getContent();

            foreach ($items as $item) {
                $producto = Producto::find($item->id);
                PedidoDetalle::create([
                    'producto_id' => $producto->id,
                    'pedido_id' => $pedido->id,
                    'cantidad' => $item->quantity,
                ]);

                $producto->stock -= $item->quantity;
                $producto->save();
            }

            \Cart::clear();
            $token = Str::random(32);
            
            $usuario = User::find(5);
            $usuario->notify(new NotificacionPedido($pedido));
            
            return redirect()->route('pedido.exito')->with('token',$token);

        } catch (\Throwable $th) {
           $this->addError('error','Existe un error, intentelo de nuevo más tarde');
        }
    }
    public function render()
    {
        return view('livewire.finalizar-pedido');
    }
}
