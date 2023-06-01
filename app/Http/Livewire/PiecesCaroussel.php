<?php

namespace App\Http\Livewire;

use App\Models\Pieces;
use Livewire\Component;

class PiecesCaroussel extends Component
{
    public function render()
    {
        return view('livewire.products-caroussel',[
            'pieces' => Pieces::all(),
        ]);
    }
}
