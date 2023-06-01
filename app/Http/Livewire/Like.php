<?php

namespace App\Http\Livewire;

use App\Models\Pieces;
use Livewire\Component;

class Like extends Component
{
    public $piece;
    
    public function mount(Pieces $piece)
    {
        $this->piece = $piece;
    }

    public function like()
    {
        // dd('like');
        $this->piece->likes()->create([
            // 'user_id' => auth()->id(),
            'user_id' => 1,
        ]);
        $this->piece->refresh();
    }

    public function unlike()
    {
        // $this->piece->likes()->where('user_id', auth()->id())->delete();
        $this->piece->likes()->where('user_id', 1)->delete();
        $this->piece->refresh();
                
    }
    public function render()
    {
        return view('livewire.like');
    }

}
