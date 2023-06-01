<?php

namespace App\Http\Livewire;

use App\Models\Models;
use Livewire\Component;
use App\Models\Motorizations as Motorization;
use Exception;

class Motorizations extends Component
{
    public $name;
    public $updateMotor, $motorId;

    public function storeMotor()
    {
     try {
        if($this->name == null)
        {
            return  session()->flash('message', 'Name input is requered!');
        }

        Motorization::create([
            'name' => $this->name,
        ]);

        session()->flash('message', 'motor Created Successfully.');
        $this->reset('name');

     }catch(Exception $e){
        return session()->flash('message', 'Something went wrong. Please try again.');
      }

    }

    public function render()
    {
        return view('livewire.motorizations',[
        'motorizations' => Motorization::all(),
        ]);
    }

    public function edit($id)
    {
        
        $motor = Motorization::find($id);
        $this->updateMotor = $motor->name;
        $this->motorId = $motor->id;
    }

    public function update(){
        try {
            if($this->updateMotor == null){
                return  session()->flash('updateMessage', 'Motorization name input is requered!');
                }
    
            $motorization = Motorization::find($this->motorId);
            $motorization->update(
                [
                'name' => $this->updateMotor,
            ]);
            $this->reset('updateMotor');
            }catch(Exception $e){
                return session()->flash('message', 'Something went wrong. Please try again.');
             }      
    }


    public function destroy($id){

     try {

        $motorization = Motorization::find($id);
        $motorization->delete();
        session()->flash('message', 'Motorization Deleted Successfully.');

     }catch(Exception $e){
         return session()->flash('alert', 'Something went wrong. Please try again.');
      }
    }
}
