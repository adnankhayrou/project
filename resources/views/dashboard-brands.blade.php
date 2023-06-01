@extends('layouts._master')
@section('title','Automoto')
@section('content')
<main id="app">

    <div class="block-space block-space--layout--after-header"></div>
    <div class="block">
        <div class="container container--max--xxl">
            <div class="row">
                <div class="col-12 col-lg-3 d-flex">
                    <div class="account-nav flex-grow-1">
                        <h4 class="account-nav__title">{{__('pages/client/dashboard.navigation')}}</h4>
                        <ul class="account-nav__list" id="menu">
                            
                            <li class="account-nav__item account-nav__item account-nav__item--active">
                                <a href="">
                                <i class="bi bi-grid-3x3-gap me-2"> </i> All items </a>
                            </li>
                         
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#statistics" >
                                    <i class="bi bi-bar-chart me-2"> </i> Statistics</a>
                            </li>
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#your-products">
                                    <i class="bi bi-box me-2"> </i> products</a>
                            </li>
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#all-products" >
                                    <i class="bi bi-box me-2"></i> All Products </a>
                            </li>
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#categorys" >
                                    <i class="bi bi-bookmark me-2"> </i> Categories</a>
                            </li>
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#subcategory" >
                                    <i class="bi bi-bookmarks me-2"></i> SubCategories </a>
                            </li>
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#all-comments">
                                    <i class="bi bi-chat-left-text me-2"> </i> All Comments</a>
                            </li>
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#all-sellers">
                                    <i class="bi bi-people me-2"> </i> All Sellers </a>
                            </li>
                         
                            <li class="account-nav__item account-nav__item">
                                <a href="#citys" >
                                    <i class="bi bi-house me-2"> </i> Cities </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-12 col-lg-9 ">
                    {{-- <div class="row items-center me-0 mb-4">
                        
                            <div class="col-10 mt-3 mb-1">
                            <h4 id="statistics" class="text-uppercase fw-bold">Statistics</h4>
                            </div>
                     
                        <button href="{{ route('piece.addPiece')}}" class="btn btn-primary mt-3" > Add New Piece</button>
                    </div> --}}
            
            
                        <div class="container">
                      
                        {{-- brands --}}
                            @livewire('brands')  
                        {{-- end of brands --}}
            
                     
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
</div>
@stop