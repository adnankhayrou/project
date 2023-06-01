<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<!-- SweetAlert CSS -->
{{-- <link href="{{ asset('vendor/sweetalert/sweetalert.css') }}" rel="stylesheet"> --}}

<!-- SweetAlert JavaScript -->
{{-- <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script> --}}

@livewireStyles
   
   <div class="container-fluid" id="dashboard">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-sm-2 px-0  shadow " style="min-height: 52rem; background-color:#E96623;">
              <div id="toTop">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 mt-5  text-white min-vh-100  position-fixed ">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item mb-4">
                            <a href="/" class="nav-link align-middle px-0 text-light">
                                <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="" class="nav-link px-0 align-middle text-light">
                            <i class="bi bi-grid-3x3-gap"></i> <span class="ms-1 d-none d-sm-inline">All items</span> </a>
                        </li>
                        <hr>
                        <hr>
                        <li class="mb-4">
                            <a href="#statistics" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-bar-chart"></i> <span class="ms-1 d-none d-sm-inline">Statistics</span></a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#your-products" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-box"></i> <span class="ms-1 d-none d-sm-inline">Your products</span></a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#all-products" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-box"></i> <span class="ms-1 d-none d-sm-inline">All Products</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#categorys" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-bookmark"></i> <span class="ms-1 d-none d-sm-inline">Categories</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#subcategory" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-bookmarks"></i> <span class="ms-1 d-none d-sm-inline">SubCategories</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#all-comments" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-chat-left-text"></i> <span class="ms-1 d-none d-sm-inline">All Comments</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#all-sellers" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-people"></i> <span class="ms-1 d-none d-sm-inline">All Sellers</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#citys" class="nav-link px-0 align-middle text-light">
                                <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Cities</span> </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    <div class="col-10 col-md-9 col-lg-10 py-2" >

        <div class="row items-center me-0 mb-4">
            <h1 id="your-products" class="col fw-bold fs-2 ms-3 mt-5">DASHBOARD</h1>  
            <a href="{{ route('piece.addPiece')}}" class="col-3 me-3 mt-5 btn text-light shadow" style=" background-color:#E96623;"><b>+ </b> Add New Piece</a>
        </div>

        <div class="row text-center ms-5 mb-4">
            <a href="{{ route('searchBar')}}" class="col-3 me-3 mt-5 btn text-light shadow" style=" background-color:#E96623;">Searsh</a>
        </div>


            <div class="container">
            {{-- statistics --}}
                @livewire('statistics')
            {{-- end of statistics --}}
            </div>
               
            {{-- all products table --}}
                @livewire('all-pieces')  
            {{-- end of products --}}
    
            {{-- brands --}}
                @livewire('brands')  
            {{-- end of brands --}}

            {{-- models --}}
                @livewire('models')
            {{-- end of models --}}

            {{-- motorizations --}}
                @livewire('motorizations')
            {{-- end motorizations --}}

            {{-- etats --}}
                @livewire('etats')
            {{-- end of etats --}}
            
            {{-- categories --}}
                @livewire('add-categories')
            {{-- end categories --}}
            
            {{-- citiess --}}
                @livewire('cities')
            {{-- end cities --}}


            {{-- all users --}}
            {{-- @livewire('all-users') --}}
            {{-- end users --}}

 @livewireScripts 
{{-- <link rel="stylesheet" href="{{asset('css\app.css')}}">
<script src="{{ asset('js/script.js') }}"></script> --}}
