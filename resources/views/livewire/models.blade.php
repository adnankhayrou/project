

            <div class="row items-center" style="text-align:center">
      
                <form class="block-finder__form-control " wire:submit.prevent="sendModel" data-parsley-validate >
                    @csrf
                 
                            <select wire:model="brandId" aria-label="Default select example">
                                <option value="">Brand</option>
                                @foreach ($brand as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                              </select>
                        </div>
                    <input type="text" placeholder="New model" class="col shadow form-control mb-2 mt-5 rounded" wire:model="model" data-parsley-minlength="3" data-parsley-required/>
                    <input type="number" wire:model="year" min="1900" max="2099" class="col shadow ms-2 form-control mb-2 mt-5 rounded " step="1" placeholder="year"/>
                    <input type="file" wire:model="modelImage" class="col ms-2 shadow form-control mb-2 mt-5 rounded" id="images">
                    <button type="submit" class="col-2 ms-2 rounded shadow text-light me-2 mt-5 mb-2 " id="category-add-btn" style="background-color:#E96623;">Add</button>
                    </div>
                    
                </form>
                </div>
            <div class="container table-responsive">
            
                <table class="table table-responsive shadow bg-white rounded text-center">
                    <thead>
                        <tr>
                        <th scope="col">#{{count($models)}}</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Image</th>
                        <th scope="col">Year</th>
                        <th scope="col">Time</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                    @foreach ($models as $model)
                        <tr>
                        <td>{{$count}}</td>
                        <td>{{$model->brand->name}}</td>
                        <td>{{$model->name}}</td>
                        <td ><img class="rounded d-inline" src="{{asset('/storage/'.$model->image)}}" width="80"></td>
                        <td>{{$model->year}}</td>
                        <td><i class="bi bi-clock-history"></i> {{$model->created_at->diffForHumans(null, false, false)}}</td>
                        <td><button wire:click="editModel({{ $model->id }}, {{ $model->brand->id }})" href="#edit-model-modal" data-bs-toggle="modal" class="text-decoration-none text-primary fw-bold">edit</button></td>
                        <td><button wire:click="destroyModel({{ $model->id }})" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</button></td>
                        </tr>
         
                        @php
                        $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                    </table> 
                    
                </div>
                <div class="container">
                    {{-- {{$subCategory->links('pagination::tailwind')}} --}}
                </div>
            {{-- @endif --}}
            {{-- end of subcategorys --}}


            <!-- edit Modal -->
<div class="modal fade" id="edit-model-modal" tabindex="-1" role="dialog" aria-labelledby="edit-brand-modal-label" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Brand</h5>
                <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
            </div>
            <div class="modal-body pb-0">
                <form wire:submit.prevent="updateModel()">
                    @csrf
                    @if(session()->has('updateMessage'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all"></i>
                                {{ session('updateMessage')}}
                                <a href="#" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                            </div>
                        @endif
                        

                    <div class="form-group">
                        
                            {{-- {{dd($brandIdSelect);}} --}}
                        <select class="form-select " wire:model="brandId" aria-label="Default select example">
                            <option value="">Brands</option>
                            @foreach ($brand as $item)
                            <option value="{{$item->id}}"  {{$brandSelected == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                            @endforeach
                            </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="hidden" wire:model="modelId">
                        <label for="exampleFormControlInput1">Model</label>
                        <input type="text" class="form-control" wire:model="updateModel" id="exampleFormControlInput1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Year</label>
                        <input type="number" class="form-control" wire:model="updateYear" min="1900" max="2099" step="1">
                    </div>
                    <img class="rounded" src="{{asset('/storage/'.$updateModelImage)}}" width="80">
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Image</label>
                        <input type="file" class="form-control" wire:model="updateModelImage" id="exampleFormControlInput2" placeholder="Enter Email">
                    </div>

                    <div class="modal-footer pe-0 pb-0">
                        <a href="#" class="btn btn-dark" data-bs-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-dark bg-dark">Save changes</button>
                    </div>
                </form>
            </div>
            
       </div>
    </div>
</div>


