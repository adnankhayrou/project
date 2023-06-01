<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Exception;
use Livewire\Component;

class AddCategories extends Component
{
    public $category, $name, $parent_id, $categoryId;
    public $update_parent_id, $updateName;

    public function sendCategory()
    {
        try {
            if($this->name == null){
                // dd("hoooo");
                return  session()->flash('addCategory', 'One of inputs is requered!');
            }
            Category::create([
                'name' => $this->name,
                'parent_id' => $this->parent_id,
            ]);
            session()->flash('storeMessage', 'category Created Successfully.');
            $this->reset('name', 'parent_id');
        }catch(Exception $e){
            return session()->flash('storeError', 'Something went wrong. Please try again.');
        }
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        $this->categoryId = $category->id;
        $this->updateName = $category->name;
        $this->update_parent_id = $category->parent_id;
    }

    public function updateCategory(){
        try {
            if($this->categoryId != $this->update_parent_id){
                $category = Category::find($this->categoryId);
                if (!$category->subcategories->contains('id', $this->update_parent_id)){
                    $category->update([
                        'name' => $this->updateName,
                        'parent_id' => $this->update_parent_id,
                    ]);
                    session()->flash('updateMessage', 'Category Updated Successfully.'); 
                }else{
                    session()->flash('updateError', 'A category cannot belongs to its sub-category !');
                }
            }else{
                session()->flash('updateError', 'A category cannot belongs to itself !');
            }
             
        }catch(Exception $e){
            return session()->flash('updateError', 'Something went wrong. Please try again.');
        }      
    }

    public function render()
    {
        return view('livewire.add-categories',['categories' => Category::all()->take(6)]);
    }

    public function destroyCategory($id){
        try {
           $category = Category::find($id);
           $category->delete();
           session()->flash('deleteMessage', 'Category Deleted Successfully.');
   
        }catch(Exception $e){
            return session()->flash('deleteError', 'Something went wrong. Please try again.');
        }
    }
}
