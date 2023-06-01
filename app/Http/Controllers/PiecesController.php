<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Categories;
use App\Models\Pieces;
use App\Http\Requests\StorePiecesRequest;
use App\Http\Requests\UpdatePiecesRequest;
use App\Models\Brands;
use App\Models\Cities;
use App\Models\Etat;
use App\Models\Models;
use App\Models\Motorizations;
use Livewire\Livewire;
use App\Http\Livewire\EditPiece;
use App\Models\Category;
use Illuminate\Http\Request;

class PiecesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }


    public function addPiece()
    {
        return view('add');
    }

    public function editPiece($id)
    {
        $piece = Pieces::find($id);
        return view('edit',['piece' => $piece]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
       
        $allPieces = Pieces::all();
        $pieces = Pieces::query()->where('serial_number', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")->paginate(16);
        return view('shop-list',['pieces' => $pieces], ['allPieces' => $allPieces],);
    }

    public function filterCategory($id)
    {
       
        // $allPieces = Pieces::all();
        // $pieces = Pieces::query()->where('category_id', $id)->paginate(16);
        $parentCategory = Category::find($id);
        $pieces = Pieces::whereHas('category', function ($query) use ($parentCategory) {
            $query->where('id', $parentCategory->id)->orWhere('parent_id',$parentCategory->id);
        })->get();

        return view('shop-list',['pieces' => $pieces], ['allPieces' => $pieces],);
    
    }


    public function filter(Request $request)
    {
        $brand = $request->input('brand_id');
        $model = $request->input('model_id');
        $motorization = $request->input('motorization_id');
        $etat = $request->input('etat_id');
        $city = $request->input('city_id');

        
        $allPieces = Pieces::all();
        $pieces = Pieces::query()->Where('brand_id', 'LIKE', "%{$brand}%")
        ->Where('model_id', 'LIKE', "%{$model}%")
        ->Where('motorization_id', 'LIKE', "%{$motorization}%")
        ->Where('etat_id', 'LIKE', "%{$etat}%")
        ->Where('city_id', 'LIKE', "%{$city}%")->get();
        return view('shop-list',['pieces' => $pieces], ['allPieces' => $allPieces],);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePiecesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $piece = Pieces::find($id);
        // return view('show-piece', ['piece' => $piece]);
        return view('product-full', ['piece' => $piece]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pieces $pieces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePiecesRequest $request, Pieces $pieces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pieces $pieces)
    {
        //
    }
}
