@extends('layouts._master')
@section('title','Automoto')
@section('content')
    <!-- site -->
    <main id="app">
   
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">{{ __('pages/client/profile.dashboard') }}</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item"><a href="account-dashboard.html">{{ __('pages/client/profile.dashboard') }}</a></li>
                                    {{-- <li class="account-nav__item"><a href="account-garage.html">{{ __('pages/client/profile.garage') }}</a></li> --}}
                                    <li class="account-nav__item"><a href="{{ route('profile.edit')}}">{{ __('pages/client/profile.edit_profile') }}</a></li>
                                    <li class="account-nav__item account-nav__item--active"><a href="account-orders.html">{{ __('pages/client/profile.order_history') }}</a></li>
                                    <li class="account-nav__item"><a href="account-order-details.html">{{ __('pages/client/profile.order_details') }}</a></li>
                                    <li class="account-nav__item"><a href="account-addresses.html">{{ __('pages/client/profile.addresses') }}</a></li>
                                    <li class="account-nav__item"><a href="account-edit-address.html">{{ __('pages/client/profile.edit_address') }}</a></li>
                                    <li class="account-nav__item"><a href="account-password.html">{{ __('pages/client/profile.password') }}</a></li>
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item"><a href="account-login.html">{{ __('pages/client/profile.logout') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{ __('pages/client/profile.title_edit_profile') }}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-7 col-xl-6">
                                            <div class="form-group"><label for="profile-first-name">{{ __('pages/client/profile.first_name') }}</label> <input type="text" class="form-control" id="profile-first-name" placeholder="{{ __('pages/client/profile.first_name') }}"></div>
                                            <div class="form-group"><label for="profile-last-name">{{ __('pages/client/profile.last_name') }}</label> <input type="text" class="form-control" id="profile-last-name" placeholder="{{ __('pages/client/profile.last_name') }}"></div>
                                            <div class="form-group"><label for="profile-email">{{ __('pages/client/profile.email') }}</label> <input type="email" class="form-control" id="profile-email" placeholder="{{ __('pages/client/profile.email') }}"></div>
                                            <div class="form-group"><label for="profile-phone">{{ __('pages/client/profile.phone') }}</label> <input type="text" class="form-control" id="profile-phone" placeholder="{{ __('pages/client/profile.phone') }}"></div>
                                            <div class="form-group mb-0"><button class="btn btn-primary mt-3">{{ __('pages/client/profile.save_button') }}</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
		@stop
