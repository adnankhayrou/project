<?php

namespace App\Http\Livewire;

use App\Models\Pieces;
use Livewire\Component;

class RelatedPieces extends Component
{
    public $brand_id;

    public function render()
    {
        return view('livewire.related-pieces',[
            'pieces' => Pieces::where('brand_id', $this->brand_id)->get(),
        ]);
    }
}
