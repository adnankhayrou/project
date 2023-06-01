<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brands;
use App\Models\Cities;
use App\Models\Etat;
use App\Models\Models;
use App\Models\Motorizations;
use App\Models\Pieces;
use App\Models\User;

class Statistics extends Component
{
    public function render()
    {
        return view('livewire.statistics',[
            'pieces' => Pieces::all(),
            'brands' => Brands::all(),
            'models' => Models::all(),
            'motorizations' => Motorizations::all(),
            'etats' => Etat::all(),
            'cities' => Cities::all(),
            'users' => User::all(),
        ]);
    }
}
