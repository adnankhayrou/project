<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brands as ModelsBrands;
use Livewire\WithFileUploads;
use Exception;


class Brands extends Component
{
    public $brand, $image;
    public $updateBrand, $updateImage, $brandId;
    use WithFileUploads;
    
    public function sendBrand()
    {
        // dd($this->brand, $this->image);
     try {

        if($this->brand == null || $this->image == null){
            return  session()->flash('message', 'One of inputs is requered!');
        }
        
        ModelsBrands::create(
            [
                'name' => $this->brand,
                'image' => $this->image->store('files', 'public'),
            ]);
        session()->flash('message', 'Brand Created Successfully.');
        $this->reset('brand', 'image');

     }catch(Exception $e){
        return session()->flash('message', 'Something went wrong. Please try again.');
      }

    }

    public function render()
    {
        return view('livewire.brands',[
        'brands' => ModelsBrands::all(),
        ]);
    }


    public function edit($id)
    {

        $brand = ModelsBrands::find($id);
        $this->updateBrand = $brand->name;
        $this->updateImage = $brand->image;
        $this->brandId = $brand->id;
    }

    public function update(){
     try {
        if($this->updateBrand == null || $this->updateImage == null){
            return  session()->flash('updateMessage', 'Brand name input is requered!');
            }

        $brand = ModelsBrands::find($this->brandId);

        if (is_string($this->updateImage)) {
            // If the $updateImage is a string, update only the name field
            $brand->update(['name' => $this->updateBrand]);
        } else {
            // If the $updateImage is an instance of UploadedFile, update the name and image fields
            if ($this->updateImage->isValid()) {
                $brand->update([
                    'name' => $this->updateBrand,
                    'image' => $this->updateImage->store('files', 'public')
                ]);
            } 
        }
        

        }catch(Exception $e){
            return session()->flash('message', 'Something went wrong. Please try again.');
         }      
    }


    public function destroy($id){

     try {

        $brand = ModelsBrands::find($id);
        $brand->delete();
        session()->flash('message', 'Brand Deleted Successfully.');

     }catch(Exception $e){
         return session()->flash('alert', 'Something went wrong. Please try again.');
      }
    }
}
