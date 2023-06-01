@extends('layouts\_master')
@section('title','Wishlist')
@section('content')
        <!-- site__body -->
        <div class="site__body">
            <div class="block-header block-header--has-breadcrumb block-header--has-title">
                <div class="container">
                    <div class="block-header__body">
                        <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                            <ol class="breadcrumb__list">
                                <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                                <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a
                                        href="/" class="breadcrumb__item-link">Home</a></li>
                             
                                <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                                    aria-current="page"><span class="breadcrumb__item-link">Current Page</span></li>
                                <li class="breadcrumb__title-safe-area" role="presentation"></li>
                            </ol>
                        </nav>
                        {{-- <h1 class="block-header__title">Wishlist</h1> --}}
                    </div>
                </div>
            </div>
            <!-- Display error message -->
            @if (session()->has('storeError'))
                <div class="alert alert-danger">
                    {{ session('storeError') }}
                </div>
            @endif
            <div class="block">
                <div class="container container--max--xl">
                    @livewire('wichlist')
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
        <!-- site__body / end -->
@endsection
