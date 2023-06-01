<div>
   {{-- brands --}}

            {{-- @if (Auth()->user()->) --}}
            <div class="row items-center " style="text-align: center">
               
                
                {{-- @if (session()->has('message'))
                            <div class="container alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif --}}

                        @if(session()->has('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all"></i>
                                {{ session('message')}}
                                <a href="#" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                            </div>
                        @endif

            
                <form class="block-finder__form-control block-finder__form-control--select" wire:submit.prevent="sendBrand" data-parsley-validate>
                    @csrf
                    <input type="file" wire:model="image" class="" id="images">
                    <input type="text" wire:model="brand" placeholder="New brand" class="" data-parsley-minlength="3" data-parsley-required/>
                   
                    <button type="submit" class="block-finder__form-control block-finder__form-control--button ">Ajouter</button>
                    
                </form>
                </div>
                <div class="dashboard__orders card">
                    <div class="card-header">
                    
                        <h5>Brands </h5>
                    </div>
                    <div class="card-divider"></div>
                    <div class="card-table">
                        <div class="table-responsive-sm">
                            <table>
                                <thead>
                        <tr>
                        <th scope="col">#{{count($brands)}}</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Image</th>
                        <th scope="col">Time</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                    @foreach ($brands as $brand)
                        <tr>
                        <td>{{$count}}</td>
                        <td>{{$brand->name}}</td>
                        <td ><img class="rounded d-inline" src="{{asset('/storage/'.$brand->image)}}" width="80"></td>
                        <td><i class="bi bi-clock-history"></i> {{$brand->created_at->diffForHumans(null, false, false)}}</td>
                        <td><button wire:click="edit({{ $brand->id }})" href="#edit-brand-modal" data-bs-toggle="modal" class="text-decoration-none text-primary fw-bold">edit</button></td>
                        <td><button wire:click="destroy({{ $brand->id }})" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</button></td>
                        </tr>
                        @php
                        $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
                <div class="container">
                    {{-- {{$brands->links('pagination::tailwind')}} --}}
                </div> 
            {{-- @endif --}}
            {{-- end of brandss --}}


<!-- edit Modal -->
    
<div class="modal fade" id="edit-brand-modal" tabindex="-1" role="dialog" aria-labelledby="edit-brand-modal-label" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Brand</h5>
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
                    
                    <div class="form-group">
                        <input type="hidden" wire:model="brandId">
                        <label for="exampleFormControlInput1">Brand</label>
                        <input type="text" class="form-control" wire:model="updateBrand" id="exampleFormControlInput1" placeholder="Enter Name">
                    </div>
                    <img class="rounded" src="{{asset('/storage/'.$updateImage)}}" width="80">
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Image</label>
                        <input type="file" class="form-control" wire:model="updateImage" id="exampleFormControlInput2" placeholder="Enter Email">
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
@push('scripts')
<script>
    document.addEventListener('myCustomEvent', function () {
        var modal = document.getElementById('edit-brand-modal');
        modal.style.display = 'none';
    });

    function closeModal() {
        Livewire.emit('myCustomEvent');
    }
</script>
@endpush
