<div class="">
    {{-- all products --}}
    <div class="m-2 d-flex justify-content-between align-items-center py-2">
        <input class="form-control bg-light w-25 rounded border" wire:model="search" placeholder="Search" >  
        @auth
          <a href="{{ route('piece.addPiece')}}" class="col-3 w-25 bg-danger rounded text-light btn">+ Add New Piece</a>
        @else
          <a href="#modal-alert" data-bs-toggle="modal" class="col-3 w-25 bg-danger rounded text-light btn">+ Add New Piece</a>
        @endauth  
        
    </div>
    <div class="card-divider"></div>
    
    <div class="container pt-3 table-responsive ">
        @if (count($pieces) == 0)
            <div id="message" class="text-center text-secondary fs-3">
                <h3><b>Ther is no item !</b></h3>
            </div>                            
        @else
        <div class="table-responsive-sm">
            <table class="text-center">
                @php
                $count = 1;
                @endphp
                <thead>
                    <tr class="text-nowrap">
                        <th scope="col px-2">#{{count($pieces)}}</th>
                        <th scope="col px-2">Name</th>
                        <th scope="col px-2">Images</th>
                        <th scope="col px-2">brand</th>
                        <th scope="col px-2">model</th>
                        <th scope="col px-2">category</th>
                        <th scope="col px-2">motorization</th>
                        <th scope="col px-2">etat</th>
                        <th scope="col px-2">price</th>
                        <th scope="col px-2">new price</th>  
                        <th scope="col px-2">phone</th>
                        <th scope="col px-2">status</th>
                        <th scope="col px-2">City</th>
                        <th scope="col px-2">serial number</th>
                        <th scope="col px-2">diameter</th>
                        <th scope="col px-2">reference</th>
                        <th scope="col px-2">width</th>
                        <th scope="col px-2">height</th>
                        <th scope="col px-2">type</th>
                        <th scope="col px-2">load index</th>
                        <th scope="col px-2">speed index</th>
                        <th scope="col px-2">description</th>
                        <th scope="col px-2">active</th>
                        <th scope="col px-2">starts at</th>
                        <th scope="col px-2">ends at</th>
                        <th scope="col px-2">Time</th>
                        <th scope="col px-2">View</th>
                        <th scope="col px-2">Edit</th>
                        <th scope="col px-2">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pieces as $piece)
                        <tr class="text-nowrap">
                            <td>{{$count}}</td>
                            <td>{{$piece->name}}</td>
                            <td>
                                @if ($piece->images)
                                    <img class="rounded border" src="{{asset('/storage/'.$piece->images[0])}}" width="60">
                                @else
                                    <span>...</span>        
                                @endif
                            </td>   
                            <td>{{$piece->brand->name}}</td>
                            <td>{{$piece->model->name}}</td>
                            <td>{{$piece->category->name}}</td>
                            <td>{{$piece->motorization->name}}</td>
                            <td>{{$piece->etat->name}}</td>
                            <td>{{$piece->price}} MAD</td>
                            <td>{{$piece->new_price}} MAD</td>
                            <td>{{$piece->phone}}</td>
                            @if ($piece->status == 'success')
                            <td class="text-success rounded">{{$piece->status}}</td>
                            @else
                            <td class="text-danger rounded">Not Authorized	</td>
                            @endif
                            <td>{{$piece->city->name}}</td>
                            <td>{{$piece->serial_number}}</td>
                            <td>{{$piece->diameter}} mm</td>
                            <td>{{$piece->reference}}</td>
                            <td>{{$piece->width}} mm</td>
                            <td>{{$piece->height}} mm</td>
                            <td>{{$piece->type}}</td>
                            <td>{{$piece->load_index}} Kg</td>
                            <td>{{$piece->speed_index}} Km/h</td>
                            <td><span class="d-inline-block text-truncate" style="max-width: 100px">{{$piece->description}}</span></td>
                            @if ($piece->active == 1)
                            <td class="text-success rounded">Active</td>
                            @else
                            <td class="text-danger rounded">Not active</td>
                            @endif
                            <td>{{$piece->starts_at}}</td>
                            <td>{{$piece->ends_at}}</td>
                            <td><i class="bi bi-clock-history"></i> {{$piece->created_at->diffForHumans(null, false, false)}}</td>
                            <td><a href="{{ route('piece.show-piece', $piece->id)}}" class="text-decoration-none text-success fw-bold">view</a></td>
                            <td><a href="{{ route('piece.editPiece', $piece->id)}}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                            <td><button wire:click="destroy({{ $piece->id }})" onclick="return confirm('Are you sure?')" class="bg-transparent border-0 border-none text-decoration-none text-danger fw-bold">delete</button></td>
                        </tr>

                        @php
                            $count ++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>                
    <div class="container my-3">
        {{$pieces->links()}}
    </div>
</div>

<!-- alert login form -->
<div  class="modal fade ms-5 mt-5" id="modal-alert">
    <div class="modal-dialog mt-5">
        <div class="modal-content text-center w-75">
            <form action="{{ route('login') }}">
            
                <div class="modal-body">
        
                    <div class="mb-2">
                        <i class="bi bi-exclamation-circle text-warning" style="font-size: 3.5em;"></i>
                    </div>
                    <div class="mb-3">
                        <p class="mb-3"><b>Login First</b></p>
                        <button type="submit" class="btn btn-dark bg-dark">Login</button>
                    </div>
            
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end form --}}
