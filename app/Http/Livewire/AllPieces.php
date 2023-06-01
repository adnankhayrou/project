<?php

namespace App\Http\Livewire;

use App\Models\Pieces;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class AllPieces extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.all-pieces',[
            // 'pieces' => Pieces::where('name', 'like', '%'.$this->search.'%')->latest()->paginate(5),
            'pieces' => Pieces::where('name', 'like', '%'.$this->search.'%')->latest()->paginate(5),
        ]);
    }

    public function destroy($id){

        try {
   
           $piece = Pieces::find($id);
           $piece->delete();
           session()->flash('message', 'Piece Deleted Successfully.');
   
        }catch(Exception $e){
            return session()->flash('alert', 'Something went wrong. Please try again.');
         }
       }
}
