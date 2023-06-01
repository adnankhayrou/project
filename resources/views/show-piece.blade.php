<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
@livewireStyles
   
<div class="container mt-5">
    <div class="card w-75 m-auto">
        <div class="card-header">
            {{$piece->name}}
        </div>
        <div class="card-body">
            {{-- <img class="rounded" src="{{asset('/storage/'.$piece->images[0])}}"> --}}
            <div class="d-flex">
                @foreach($piece->images as $image)
                <img class="rounded" src="{{asset('/storage/'.$image)}}" width="80">
                @endforeach
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">{{ $piece->price }}</p>
                @livewire('like', ['piece' => $piece])
            </div>
            
            @livewire('rate', ['piece' => $piece])

        </div>
    </div>
</div>

 @livewireScripts 
