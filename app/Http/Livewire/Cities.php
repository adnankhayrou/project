<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cities as ModelsCities;
use Exception;
class Cities extends Component
{
    public $city;
    public $updateCity, $cityId;
    use WithPagination;
    
    public function sendCity()
    {
     try {

        if($this->city == null){
            return  session()->flash('message', 'City name is requered!');
        }
        
        ModelsCities::create(
            [
                'name' => $this->city,
            ]);
        session()->flash('message', 'city Created Successfully.');
        $this->reset('city');

     }catch(Exception $e){
        return session()->flash('message', 'Something went wrong. Please try again.');
      }

    }

    public function render()
    {
        return view('livewire.cities',[
        'cities' => ModelsCities::latest()->paginate(50),
        'allCities' => ModelsCities::all(),
        ]);
    }

    public function update($id){

        try {
            if($this->updateCity == null){
                return  session()->flash('updateMessage', 'City name input is requered!');
                }
    
            $city = ModelsCities::find($id);
            $city->update(
                [
                'name' => $this->updateCity,
            ]);
            $this->reset('updateCity');

    
            // $this->dispatchBrowserEvent('close-modal');
        
            }catch(Exception $e){
                return session()->flash('message', 'Something went wrong. Please try again.');
             }
    }


    public function destroy($id){

     try {

        $city = ModelsCities::find($id);
        $city->delete();
        session()->flash('message', 'city Deleted Successfully.');

     }catch(Exception $e){
         return session()->flash('alert', 'Something went wrong. Please try again.');
      }
    }
}
