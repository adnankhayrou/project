<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Orders;
use App\Models\Pieces;
use Exception;
use Livewire\Component;

class Wichlist extends Component
{
    public $pieceId;
    public $status = 'initial';
    public $phone;
    public $first_name;
    public $last_name;
    public $email;
    public $address;
    public $quantity = 1;
    public $taxe;
    public $total;
    public $pieceInOrders;
    public $orderQuantities = [];



    public function render()
    {
        $orders = Orders::all();
        $pieces = Pieces::all();
        return view('livewire.wichlist', ['pieces' => $pieces, 'orders'=>$orders]);
    }
    

    public function unlike($pieceId)
    {
        // $this->piece->likes()->where('user_id', auth()->id())->delete();
        // dd($pieceId);
        Like::where('user_id', 1)->where('piece_id',$pieceId)->delete();
        // $pieceId->likes[0]->where('user_id', 1)->delete();
                
    }
    
    
    public function store($pieceId)
    {
        $order = Orders::where('piece_id', $pieceId)->where('user_id', 1)->first();
        if ($order) {
            return session()->flash('storeError', 'Already added');
        }

        try {
            $this->orderQuantities[$pieceId] = 1;
            $piece       = Pieces::find($pieceId);
            $this->total = $piece->price;

            Orders::create([
                'piece_id'  => $pieceId,
                'status'    => $this->status,
                'phone'     => $this->phone,
                'first_name'=> 'tarek',
                'last_name' => 'inahcauo',
                'email'     => 'tarek@gmail.com',
                'address'   => $this->address,
                'price'     => $piece->price,
                'quantity'  => 1,
                'taxe'      => $this->taxe,
                'total'     => $this->total,
                'user_id'   => 1,
            ]);

            $this->pieceInOrders = $pieceId;
        } catch (Exception $e) {
            return session()->flash('storeError', 'Something went wrong. Please try again.');
        }
    }


    public function updateQuantity($pieceId, $value)
    {
        $this->orderQuantities[$pieceId] = intval($value);

        $order = Orders::where('piece_id', $pieceId)->where('user_id', 1)->first();
        if ($order) {
            if ($this->orderQuantities[$pieceId] <= 0) {
                $order->delete();
                unset($this->orderQuantities[$pieceId]);
            } else {
                $order->update(['quantity' => $this->orderQuantities[$pieceId]]);
            }
        }
    }

    public function mount()
    {
        $existingOrders = Orders::where('user_id', 1)->get();

        foreach ($existingOrders as $order) {
            $this->orderQuantities[$order->piece_id] = $order->quantity;
        }
    }


}
