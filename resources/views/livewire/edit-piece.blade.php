{{-- @extends('layouts/_master')
@section('content') --}}
<div>
    <div>
        {{-- Care about people's approval and you will be their prisoner. --}}
        <!-- add meal form -->
        
       <div class="container pt-3 w-75 bg-light rounded">
            <form wire:submit.prevent="updatePiece" id="form" class=" pb-2" enctype="multipart/form-data">
                @csrf
    
                <div class=" row modal-body">
                    {{-- @dd($piece->name." \ncity ".$piece->city->name." \nbrand ".$piece->brand->name." \nmodel ".$piece->model->name." \nmotorazation ".$piece->motorization->name." \netat ".$piece->etat->name." \nphone: ".$piece->phone." \nprice: ".$piece->price." \nregistraion n: ".$piece->registration_number." \nreference : ".$piece->reference." \nwidth : ".$piece->width." \nheight: ".$piece->height." \ndiametre: ".$piece->diameter); --}}
                    <div class="col-12 mb-3">
                        <label class="form-label">Name</label>
                        <input placeholder="Item name..." type="text" 
                        wire:model="name"
                            class="form-control rounded border" value=""/>
                        <small class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label for="image" class="col-form-label" id="image">Image</label>
                        <input type="file" class="form-control border rounded" id="images" wire:model="images" value="" multiple>
                        <small class="text-danger">
                            @error('images')
                            {{ $message }}
                            @enderror
                        </small>
                    </div>
        
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3 mt-1">
                        <label class="form-label">Cities</label><br>
                        <select class="form-control selectpicker rounded border" wire:model="city_id" data-live-search="true">
                            <option value="">Select your city</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}" >{{ $city->name }}</option>
                            @endforeach
                        </select>
                        
                        <small class="text-danger">
                            @error('city_id')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
        
                     <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Brands</label>
                        <select id="brandList" wire:model="brand_id" class="form-control" required>
                            <option value="">Select your brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                        </select>
                        @error('brand_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Models</label>
                        <select id="modelList" class="form-control"
                            name="model_id" required wire:model="model_id" @if (empty($brand_id)) disabled @endif>
                            <option selected>Select your model</option>
                                @php
                                    if (!empty($brand_id))
                                    $models = App\Models\Models::where('brand_id',$brand_id)->get();
                                @endphp
                                @if ($models)
                                    @foreach ($models as $model)
                                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                                    @endforeach
                                @endif
                        </select>
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Motorizations</label>
                        <select id="motorizationList" class="form-control" wire:model="motorization_id">
                            <option selected>Select your motorization</option>
                                @php
                                    $motorizations = App\Models\Motorizations::all();
                                @endphp
                                @foreach ($motorizations as $motorization)
                                    <option value="{{ $motorization->id }}" >{{ $motorization->name }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Categories</label>
                        <select id="CategoryList" class="form-control" wire:model="category_id" required>
                            <option selected>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Etats</label>
                        <select id="EtatList" class="form-control"
                        wire:model="etat_id" required>
                            <option selected>Select etat</option>
                            @foreach ($etats as $etat)
                                <option value="{{ $etat->id }}" >{{ $etat->name }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Phone number</label>
                        <input placeholder="+212..." type="tel" wire:model="phone" class="form-control rounded border" value=""/>
                        <small class="text-danger">
                            @error('phone')
                            {{ $message }}
                        @enderror</small>
                    </div>
        
                    <div class="col-xl-6 col-md-12 col-sm-12-6 mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" wire:model="price" any class="form-control rounded border" min="0"  value=""/>
                        <small class="text-danger">
                            @error('price')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                            <label class="form-label">Serial Number</label>
                            <input placeholder="" type="text" wire:model="serial_number"
                                class="form-control rounded border"/>
                            <small class="text-danger">
                                @error('serial_number')
                                    {{ $message }}
                                @enderror
                            </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Reference</label>
                        <input placeholder="" type="text" wire:model="reference"
                            class="form-control rounded border"/>
                        <small class="text-danger">
                            @error('reference')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Width</label>
                        <input placeholder="" type="number" any wire:model="width"
                            class="form-control rounded border" min="0"/>
                        <small class="text-danger">
                            @error('width')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Diameter</label>
                        <input placeholder="" type="number" step="any" wire:model="diameter"
                            class="form-control rounded border" min="0"/>
                        <small class="text-danger">
                            @error('diameter')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Height</label>
                        <input placeholder="" type="number" any wire:model="height"
                            class="form-control rounded border" min="0"/>
                        <small class="text-danger">
                            @error('height')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Piece type</label>
                        <input placeholder="" type="text" wire:model="type"
                            class="form-control rounded border"/>
                        <small class="text-danger">
                            @error('type')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Load index</label>
                        <input placeholder="" type="number" step="any" wire:model="load_index"
                            class="form-control rounded border" min="0"/>
                        <small class="text-danger">
                            @error('load_index')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Speed index</label>
                        <input placeholder="" type="number" step="any" wire:model="speed_index"
                            class="form-control rounded border" min="0"/>
                        <small class="text-danger">
                            @error('speed_index')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">New price</label>
                        <input placeholder="" type="number" step="any" wire:model="new_price"
                            class="form-control rounded border" min="0"/>
                        <small class="text-danger">
                            @error('new_price')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Starts at</label>
                        <input placeholder="" type="date" step="any" wire:model="starts_at"
                            class="form-control rounded border"/>
                        <small class="text-danger">
                            @error('starts_at')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Ends at</label>
                        <input placeholder="" type="date" step="any" wire:model="ends_at"
                            class="form-control rounded border"/>
                        <small class="text-danger">
                            @error('ends_at')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
                
                    <div class="col-xl-6 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Piece status</label>
                        <select id="" class="form-control" wire:model="status" required>
                            <option selected>select ststus</option>
                            <option value="success" >Success</option>
                            <option value="not_authorized" selected>Not authorized</option>
                        </select>
                    </div>
                    
                    <div class="form my-2">
                        <textarea wire:model="description" class="form-control p-2" placeholder="Leave a description here"></textarea>
                    </div>
    
                    <div class="col-12 mb-3 items-center">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input class="form-check-input me-2" type="checkbox" wire:model="active" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Is this piece active ?
                            </label>
                        </div>
                        <small class="text-danger">
                            @error('active')
                                {{ $message }}
                            @enderror
                        </small>     
                    </div>
                </div>
    
                @if(session()->has('storeMessage'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all"></i>
                        {{ session('storeMessage')}}
                        <a href="" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                    </div>
                @endif
    
                
                <div class="modal-footer mt-3">
                    <a href="en/dashboard" class="btn btn-white border">Cancel</a>
                    <button type="submit" class="btn btn-dark ms-2 text-light bg-dark">Save change</button>
                </div>
            </form>
            
            
    </div>
    </div>
    <!-- In your Livewire component's blade view -->
    <button id="fill-form" wire:click="edit({{$piece->id}})" hidden></button>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                document.getElementById("fill-form").click();
            }, 100);
        });
        document.getElementById("fill-form").addEventListener("click", ()=>{
            // alert("hiiiii");
        })
    </script>
</div>
{{-- @endsection --}}