<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
             {{-- @if (Auth()->user()->) --}}
             <div class="row items-center me-0">
                 
                 <h1 id="categorys" class="col-4 col-xl-8 fw-bold ms-3 mt-5">motorizations</h1>
                    @if(session()->has('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-check-all"></i>
                            {{ session('message')}}
                            <a href="#" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                        </div>
                    @endif

                    <form class="block-finder__form-control block-finder__form-control--select" wire:submit.prevent="storeMotor" data-parsley-validate>
                        @csrf
                       
                            {{-- <div class="col">
                                <select class="form-select shadow mb-2 mt-5 rounded border" wire:model="modelId" aria-label="Default select example">
                                    <option value="">Models</option>
                                    @foreach ($models as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                  </select>
                            </div> --}}
                        <input type="text" wire:model="name" placeholder="New motorization" class="col ms-2 shadow form-control mb-2 mt-5 rounded @error('name') is-invalid @enderror" data-parsley-minlength="3" data-parsley-required/>
                        <button type="submit" class="block-finder__form-control block-finder__form-control--button ">Add</button>
                       
                    </form>
                 </div>
             <div class="container table-responsive">
             
                 <table class="table table-responsive bg-white shadow rounded text-center">
                        @php
                        $count = 1;
                        @endphp
                     <thead>
                         <tr>
                         <th scope="col">#{{count($motorizations)}}</th>
                         <th scope="col">Motorization</th>
                         <th scope="col">Time</th>
                         <th scope="col">Edit</th>
                         <th scope="col">Delete</th>
                         </tr>
                     </thead>
                     <tbody>
                     @foreach ($motorizations as $motorization)
                         <tr>
                         <td>{{$count}}</td>
                         <td>{{$motorization->id}}</td>
                         <td>{{$motorization->name}}</td>
                         <td><i class="bi bi-clock-history"></i> {{$motorization->created_at->diffForHumans(null, false, false)}}</td>
                         <td><button wire:click="edit({{ $motorization->id }})" href="#edit-motorization-modal" data-bs-toggle="modal" class="text-decoration-none text-primary fw-bold">edit</button></td>
                        <td><button wire:click="destroy({{ $motorization->id }})" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</button></td>
                        </tr>
                        @php
                        $count ++;
                        @endphp
                         @endforeach
                     </tbody>
                     </table>
                     
                 </div>
                 <div class="container">
                     {{-- {{$motorization->links('pagination::tailwind')}} --}}
                 </div> 
             {{-- @endif --}}
             {{-- end of motorization --}}

<!-- edit Modal -->
<div class="modal fade" id="edit-motorization-modal" tabindex="-1" role="dialog" aria-labelledby="edit-brand-modal-label" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Motorization</h5>
                <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
            </div>
            <div class="modal-body pb-0">
                <form wire:submit.prevent="update()">
                    @csrf
                    @if(session()->has('updateMessage'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all"></i>
                                {{ session('updateMessage')}}
                                <a href="#" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                            </div>
                        @endif
                        

                    {{-- <div class="form-group">
                        
                        <select class="form-select " wire:model="modelId" aria-label="Default select example">
                            <option value="">Models</option>
                            @foreach ($models as $model)
                            <option value="{{$model->id}}"  {{$motorSelected == $model->id ? 'selected' : ''}}>{{$model->name}}</option>
                            @endforeach
                            </select>
                    </div> --}}
                    
                    <div class="form-group">
                        <input type="hidden" wire:model="motorId">
                        <label for="exampleFormControlInput1">motorization</label>
                        <input type="text" class="form-control" wire:model="updateMotor" id="exampleFormControlInput1" placeholder="Enter Name">
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

</div>
 