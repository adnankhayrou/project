<?php

namespace App\Http\Livewire;

use App\Http\Requests\StorePiecesRequest;
use Livewire\Component;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Cities;
use App\Models\Etat;
use App\Models\Models;
use App\Models\Motorizations;
use App\Models\Pieces;
use Livewire\WithFileUploads;
use Exception;

class AddPiece extends Component
{
    public $name, $price,$description, $phone, $status, $city_id, $serial_number, $reference, $width, $height, $type, $load_index, $category_id;
    public $speed_index,$diameter, $brand_id, $model_id, $motorization_id, $etat_id, $active, $new_price, $starts_at, $ends_at, $user_id;
    public $images;
    public $imgs = [];
    public $models;
    use WithFileUploads; 

    public function render()
    {
        return view('livewire.add-piece',[
            'brands' => Brands::all(),
            'etats' => Etat::all(),
            'cities' => Cities::all(),
            'categories' => Category::all(),
            'motorizations' => Motorizations::all(),
        ]);
    }

    protected $rules = [
            'name' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required',
            // 'phone' => 'required|regex:/^[\+]?(212)[6-8]{1}[0-9]{8}$/',
            'phone' => 'required',
            'status' => 'required',
            'city_id' => 'required',
            'serial_number' => 'required',
            'reference' => 'required',
            'width' => 'required',
            'diameter' => 'required',
            'height' => 'required',
            'type' => 'required',
            'load_index' => 'required',
            'speed_index' => 'required',
            'brand_id' => 'required',
            'model_id' => 'required',
            'motorization_id' => 'required',
            'etat_id' => 'required',
            'active' => 'required',
            'new_price' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
            // 'user_id' => 'required',
    ];

    public function sendPiece(){
        // dd($this->description);
        $this->validate();
     try {
        // dd($this->images);
        foreach ($this->images as $key => $image) {
            $url = $image->store('files', 'public'); // Store the image in the "public/products" directory
            $imgs[$key] = $url;
        }
        // dd($imgs);
        $data = Pieces::create([
            'name' => $this->name,
            'price' => $this->price,
            'phone' => $this->phone,
            'status' => $this->status,
            'city_id' => $this->city_id,
            'serial_number' => $this->serial_number,
            'reference' => $this->reference,
            'diameter' => $this->diameter,
            'width' => $this->width,
            'height' => $this->height,
            'diameter' => $this->diameter,
            'type' => $this->type,
            'load_index' => $this->load_index,
            'speed_index' => $this->speed_index,
            'brand_id' => $this->brand_id,
            'model_id' => $this->model_id,
            'motorization_id' => $this->motorization_id,
            'etat_id' => $this->etat_id,
            'active' => $this->active,
            'new_price' => $this->new_price,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'user_id' => 1,
            'category_id' => $this->category_id,
            'images' => $imgs,
            'description' => $this->description,
        ]);
        $this->reset();   
        session()->flash('storeMessage', 'piece Created Successfully.');
    }catch(Exception $e){
        // return session()->flash('storeError', 'Something went wrong. Please try again.');
        return session()->flash('storeError', $errorMessage = $e->getMessage());
    }
    }
}
