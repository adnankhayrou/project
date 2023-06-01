<?php

namespace App\Http\Livewire;

use App\Models\Brands;
use App\Models\Category;
use App\Models\Cities;
use App\Models\Etat;
use App\Models\Pieces;
use Livewire\Component;
use Livewire\WithFileUploads;
use Exception;

class EditPiece extends Component
{
    public $pieceId, $name, $price, $phone, $status, $city_id, $serial_number, $reference, $width, $height, $type, $load_index;
    public $speed_index,$diameter, $brand_id, $model_id, $motorization_id, $etat_id, $active, $new_price, $starts_at, $ends_at, $user_id;
    public $images, $description, $category_id;
    public $imgs = [];
    public $models;
    public $piece;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.edit-piece',[
            'brands' => Brands::all(),
            'etats' => Etat::all(),
            'cities' => Cities::all(),
            'categories' => Category::all(),
        ]);
    }

    protected $rules = [
        'name' => 'required',
        // 'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
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

    public function edit($id){
        // dd($id);
        $piece = Pieces::find($id);
        $this->pieceId = $piece->id;
        $this->name = $piece->name; 
        $this->price = $piece->price; 
        $this->phone = $piece->phone; 
        $this->status = $piece->status; 
        $this->city_id = $piece->city_id; 
        $this->serial_number = $piece->serial_number; 
        $this->reference = $piece->reference; 
        $this->width = $piece->width; 
        $this->height = $piece->height; 
        $this->type = $piece->type; 
        $this->load_index = $piece->load_index;
        $this->speed_index = $piece->speed_index;
        $this->diameter = $piece->diameter; 
        $this->brand_id = $piece->brand_id; 
        $this->model_id = $piece->model_id; 
        $this->motorization_id = $piece->motorization_id; 
        $this->etat_id = $piece->etat_id; 
        $this->active = $piece->active; 
        $this->new_price = $piece->new_price; 
        $this->starts_at = $piece->starts_at; 
        $this->ends_at = $piece->ends_at; 
        $this->user_id = $piece->user_id;
        $this->images = $piece->images;
        $this->description = $piece->description;
        $this->category_id = $piece->category_id;
    }

    public function updatePiece(){
        // dd($this->images);
        $this->validate();
     try {
        // dd($this->images);
        foreach ($this->images as $key => $image) {
            $url = $image->store('files', 'public'); // Store the image in the "public/products" directory
            $imgs[$key] = $url;
        }
        // dd($imgs);
        $data = Pieces::find($this->pieceId);
        $data->update([
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
            'images' => $imgs,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ]);
        return redirect('en/dashboard');
        
        session()->flash('storeMessage', 'piece Updated Successfully.');
        }catch(Exception $e){
            return session()->flash('storeError', 'Something went wrong. Please try again.');
        }
    }

}
