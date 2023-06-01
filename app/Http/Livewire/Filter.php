<?php

namespace App\Http\Livewire;

use App\Models\Brands;
use App\Models\Cities;
use App\Models\Etat;
use App\Models\Models;
use App\Models\Motorizations;
use Livewire\Component;

class Filter extends Component
{
    public $models;
    public $brand_id, $model_id, $motorization_id, $etat_id, $year;
    // public $min_prix, $max_prix;
     
    public function render()
    {
        return view('livewire.filter',[
            'brands' => Brands::all(),
            'etats' => Etat::all(),
            'cities' => Cities::all(),
            // 'motorizations' => Motorizations::all(),
        ]);
    }
}
