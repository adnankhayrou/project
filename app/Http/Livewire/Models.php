<?php

namespace App\Http\Livewire;

use App\Models\Brands;
use App\Models\Models as ModelsModels;
use Livewire\Component;
use Livewire\WithFileUploads;
use Exception;

class Models extends Component
{

    public $model, $modelImage, $year, $brandId;
    public $updateModel, $updateModelImage, $updateYear, $modelId, $brandSelected;
    use WithFileUploads;
    
    public function sendModel()
    {
        // dd($this->brand, $this->image);
     try {

        if($this->model == null || $this->modelImage == null || $this->year == null){
            return  session()->flash('addModel', 'One of inputs is requered!');
        }
        
        ModelsModels::create(
            [
                'name' => $this->model,
                'image' => $this->modelImage->store('files', 'public'),
                'year' => $this->year,
                'brand_id' => $this->brandId,
            ]);
        session()->flash('storeMessage', 'Brand Created Successfully.');
        $this->reset('model', 'modelImage', 'brandId');

     }catch(Exception $e){
        return session()->flash('storeError', 'Something went wrong. Please try again.');
      }

    }

    public function render()
    {
        return view('livewire.models',[
        'brand' => Brands::all(),
        'models' => ModelsModels::all(),
        // 'brandIdSelect' => Brands::find($this->brandSelected),
        ]);
    }



    public function editModel($id, $brandSelect)
    {
        
        $model = ModelsModels::find($id);
        $this->updateModel = $model->name;
        $this->updateModelImage = $model->image;
        $this->updateYear = $model->year;
        $this->modelId = $model->id;
        
        $this->brandSelected = $brandSelect;

    }


    public function updateModel(){
     try {
        if($this->updateModel == null){
            return  session()->flash('updateModel', 'Model name input is requered!');
            }

        $model = ModelsModels::find($this->modelId);

        if (is_string($this->updateModelImage)) {
            // If the $updateImage is a string, update only the name field
            $model->update([
                'name' => $this->updateModel,
                'year' => $this->updateYear,
                'brand_id' => $this->brandId,
        ]);
        } else {
            // If the $updateImage is an instance of UploadedFile, update the name and image fields
            if ($this->updateModelImage->isValid()) {
                $model->update([
                    'name' => $this->updateModel,
                    'image' => $this->updateModelImage->store('files', 'public'),
                    'year' => $this->updateYear,
                    'brand_id' => $this->brandId,
                ]);
            } 
        }
        session()->flash('updateMessage', 'Model Updated Successfully.');


        // $this->dispatchBrowserEvent('close-modal');

        }catch(Exception $e){
            return session()->flash('updateError', 'Something went wrong. Please try again.');
         }      
    }


    public function destroyModel($id){

     try {

        $brand = ModelsModels::find($id);
        $brand->delete();
        session()->flash('deleteMessage', 'Brand Deleted Successfully.');

     }catch(Exception $e){
         return session()->flash('deleteError', 'Something went wrong. Please try again.');
      }
    }
}

