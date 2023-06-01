<div>
    {{-- The Master doesn't talk, he acts. --}}
    {{-- citys --}}
            {{-- @if (Auth()->user()->can('edit All product')) --}}
        <div class="row items-center " style="text-align: center">
            <h1 id="citys" class="col-4 col-xl-8 fw-bold ms-3 mt-5">Cities</h1>  
                
            <form class="block-finder__form-control block-finder__form-control--select" wire:submit.prevent="sendCity" data-parsley-validate>
                @csrf
                <div class=" d-flex">
                <input type="text" wire:model="city" placeholder="New city"  data-parsley-minlength="3" data-parsley-required/>
                <button type="submit" class="block-finder__form-control block-finder__form-control--button ">Add</button>
                </div>
            </form>
        </div>
        <div class="container table-responsive">
        
            <table class="table table-responsive shadow bg-white rounded text-center">
                    @php
                    $count = 1;
                    @endphp
                <thead>
                    <tr>
                    <th scope="col">#{{count($allCities)}}</th>
                    <th scope="col">Name</th>
                    <th scope="col">Time</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cities as $city)
                    <tr>
                    <td>{{$count}}</td>
                    <td><p id="city-txt-{{$city->id}}" class="text-center text-wrap">{{ $city->name }}</p>
                        <form id="cityForm-{{$city->id}}" class="d-none"  wire:submit.prevent="update({{$city->id}})">
                            <p>                                 
                                <input id="city-input-{{$city->id}}" type="text" wire:model.defer="updateCity" class="p-1 coment-content-input rounded border" value="">
                            <button onclick="showCity('')" class="edit-btn-dark" type="submit"><b class="text-success">Save</b></button>
                            </p>
                        </form>
                    </td>
                    <td><i class="bi bi-clock-history"></i> {{$city->created_at->diffForHumans(null, false, false)}}</td>
                    <td><button onclick="showCity('{{ $city->id }}')" ><b class="text-primary">edit</b></button></td>
                    <td><button wire:click="destroy({{ $city->id }})" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</button></td>
                    </tr>
                    @php
                    $count ++;
                    @endphp
                    @endforeach
                </tbody>
                </table> 
            </div>
            <div class="container">
                {{$cities->links()}}
            </div>
    <script>
        function showCity(cityID){

        document.querySelector("#city-txt-"+cityID).setAttribute('class', 'd-none');
        document.querySelector("#city-input-"+cityID).value = document.querySelector("#city-txt-"+cityID).innerHTML
        document.querySelector("#cityForm-"+cityID).setAttribute('class', 'd-block');
        // console.log(document.querySelector("#cmt-input-"+cmtID).value)
        }
    </script>
</div>
