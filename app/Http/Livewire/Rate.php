<?php

namespace App\Http\Livewire;

use App\Models\Pieces;
use App\Models\Rates;
use Livewire\Component;

class Rate extends Component
{
    public $piece;
    public $star;

    public function mount(Pieces $piece)
    {
        $this->piece = $piece;
        $rates = Rates::where('piece_id', $piece->id)->where('user_id', 1)->latest()->first();
        if ($rates)
            $this->star = $rates->rate;
    }

    public function rating($star)
    {
        $rates = Rates::where('piece_id', $this->piece->id)->where('user_id', 1)->get();
        if ($rates->count() > 0) {
            $this->piece->rates()->update([
                'rate' => $star,
            ]);
        } else {
            $this->piece->rates()->create([
                'user_id' => 1,
                'rate' => $star,
            ]);
        }

        $this->piece->refresh();
    }

    public function render()
    {
        return view('livewire.rate');
    }
}
