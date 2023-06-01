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
                                <h4 class="account-nav__title">{{ __('pages/client/password.dashboard') }}</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item"><a href="account-dashboard.html">{{ __('pages/client/password.dashboard') }}</a></li>
                                    {{-- <li class="account-nav__item"><a href="account-garage.html">{{ __('pages/client/password.garage') }}</a></li> --}}
                                    <li class="account-nav__item"><a href="{{ route('profile.edit')}}">{{ __('pages/client/password.edit_profile') }}</a></li>
                                    <li class="account-nav__item account-nav__item--active"><a href="account-orders.html">{{ __('pages/client/password.order_history') }}</a></li>
                                    <li class="account-nav__item"><a href="account-order-details.html">{{ __('pages/client/password.order_details') }}</a></li>
                                    <li class="account-nav__item"><a href="account-addresses.html">{{ __('pages/client/password.addresses') }}</a></li>
                                    <li class="account-nav__item"><a href="account-edit-address.html">{{ __('pages/client/password.edit_address') }}</a></li>
                                    <li class="account-nav__item"><a href="account-password.html">{{ __('pages/client/password.password') }}</a></li>
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item"><a href="account-login.html">{{ __('pages/client/password.logout') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{ __('pages/client/password.title_change_password') }}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-7 col-xl-6">
                                            <div class="form-group">
                                                <label for="password-current">{{ __('pages/client/password.current_password') }}</label>
                                                <input type="password" class="form-control" id="password-current" placeholder="{{ __('pages/client/password.current_password') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-new">{{ __('pages/client/password.new_password') }}</label>
                                                <input type="password" class="form-control" id="password-new" placeholder="{{ __('pages/client/password.new_password') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-confirm">{{ __('pages/client/password.reenter_password') }}</label>
                                                <input type="password" class="form-control" id="password-confirm" placeholder="{{ __('pages/client/password.reenter_password') }}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <button class="btn btn-primary mt-3">{{ __('pages/client/password.change_button') }}</button>
                                            </div>
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
