<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
             {{-- @if (Auth()->user()->) --}}
             <div class="row items-center me-0">
                 
                 <h1 id="categorys" class="col-4 col-xl-8 fw-bold ms-3 mt-5">Etats</h1>
                    @if(session()->has('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-check-all"></i>
                            {{ session('message')}}
                            <a href="#" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                        </div>
                    @endif

                    <form class="col" wire:submit.prevent="storeEtat" data-parsley-validate>
                        @csrf
                        <div class=" d-flex">
                        <input type="text" wire:model="name" placeholder="New etat" class="col ms-2 shadow form-control mb-2 mt-5 rounded @error('name') is-invalid @enderror" data-parsley-minlength="3" data-parsley-required/>
                        <button type="submit" class="block-finder__form-control block-finder__form-control--button "Add</button>
                        </div>
                    </form>
                 </div>
             <div class="container table-responsive">
             
                 <table class="table table-responsive bg-white shadow rounded text-center">
                        @php
                        $count = 1;
                        @endphp
                     <thead>
                         <tr>
                         <th>#{{count($etats)}}</th>
                         <th scope="col">Name</th>
                         <th scope="col">Time</th>
                         <th scope="col">Edit</th>
                         <th scope="col">Delete</th>
                         </tr>
                     </thead>
                     <tbody>
                     @foreach ($etats as $etat)
                         <tr>
                         <td>{{$count}}</td>
                         <td>{{$etat->id}}</td>
                         <td>
                            <p id="cmt-txt-{{$etat->id}}" class="text-center text-wrap">{{ $etat->name }}</p>
                            <form id="form-{{$etat->id}}" class="d-none"  wire:submit.prevent="update({{$etat->id}})">
                                <p>                                 
                                    <input id="cmt-input-{{$etat->id}}" type="text" wire:model.defer="updateEtat" class="p-1 coment-content-input rounded border" value="">
                                    <button onclick="showEtat('')" class="block-finder__form-control block-finder__form-control--button " type="submit"><b class="text-success">Save</b></button>
                                </p>
                            </form>    
                        </td>
                         <td><i class="bi bi-clock-history"></i> {{$etat->created_at->diffForHumans(null, false, false)}}</td>
                         <td><button onclick="showEtat('{{ $etat->id }}')" ><b class="text-primary">edit</b></button></td>
                        <td><button wire:click="destroy({{ $etat->id }})" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</button></td>
                        </tr>
                        @php
                        $count ++;
                        @endphp
                         @endforeach
                     </tbody>
                     </table>
                     
                 </div>
                 <div class="container">
                     {{-- {{$etats->links('pagination::tailwind')}} --}}
                 </div> 
             {{-- @endif --}}
             {{-- end of etats --}}
 
             <script>
                function showEtat(cmtID){
            
                document.querySelector("#cmt-txt-"+cmtID).setAttribute('class', 'd-none');
                document.querySelector("#cmt-input-"+cmtID).value = document.querySelector("#cmt-txt-"+cmtID).innerHTML
                document.querySelector("#form-"+cmtID).setAttribute('class', 'd-block');
                // console.log(document.querySelector("#cmt-input-"+cmtID).value)
                }
            </script>
 </div>
 