<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Etat;
use Exception;

class Etats extends Component
{
    public $name;
    public $updateEtat, $etatId;

    public function storeEtat()
    {
     try {
        if($this->name == null)
        {
            return  session()->flash('message', 'One of inputs is requered!');
        }
        Etat::create(['name' => $this->name]);
        session()->flash('message', 'Etat Created Successfully.');
        $this->reset('name');

     }catch(Exception $e){
        return session()->flash('message', 'Something went wrong. Please try again.');
      }

    }

    public function render()
    {
        return view('livewire.etats',[
        'etats' => Etat::all(),
        ]);
    }

    public function update($id){
        try {
            if($this->updateEtat == null){
                return  session()->flash('updateMessage', 'etat name input is requered!');
                }
    
            $etat = Etat::find($id);
            $etat->update(
                [
                'name' => $this->updateEtat,
            ]);
            $this->reset('updateEtat');
            }catch(Exception $e){
                return session()->flash('message', 'Something went wrong. Please try again.');
             }      
    }


    public function destroy($id){

     try {

        $etat = Etat::find($id);
        $etat->delete();
        session()->flash('message', 'Etat Deleted Successfully.');

     }catch(Exception $e){
         return session()->flash('alert', 'Something went wrong. Please try again.');
      }
    }
}
