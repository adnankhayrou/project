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
                                <h4 class="account-nav__title">{{__('pages/client/address.navigation') }}</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item"><a href="account-dashboard.html">{{__('pages/client/address.dashboard') }}</a></li>
                                    {{-- <li class="account-nav__item"><a href="account-garage.html">{{__('pages/client/address.garage') }}</a></li> --}}
                                    <li class="account-nav__item"><a href="{{ route('profile.edit')}}">{{__('pages/client/address.edit_profile') }}</a></li>
                                    <li class="account-nav__item"><a href="account-orders.html">{{__('pages/client/address.order_history') }}</a></li>
                                    <li class="account-nav__item"><a href="account-order-details.html">{{__('pages/client/address.order_details') }}</a></li>
                                    <li class="account-nav__item account-nav__item--active"><a href="account-addresses.html">{{__('pages/client/address.addresses') }}</a></li>
                                    <li class="account-nav__item"><a href="account-edit-address.html">{{__('pages/client/address.edit_address') }}</a></li>
                                    <li class="account-nav__item"><a href="account-password.html">{{__('pages/client/address.password') }}</a></li>
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item"><a href="account-login.html">{{__('pages/client/address.logout') }}</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="addresses-list">
                                <a href="#" class="addresses-list__item addresses-list__item--new">
                                    <div class="addresses-list__plus"></div>
                                    <div class="btn btn-secondary btn-sm">{{ __('pages/client/address.add_new') }}</div>
                                </a>
                                <div class="addresses-list__divider"></div>
                                <div class="addresses-list__item card address-card">
                                    <div class="address-card__badge tag-badge tag-badge--theme">{{ __('pages/client/address.default') }}</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">{{ __('pages/client/address.helena_garcia') }}</div>
                                        <div class="address-card__row">{{ __('pages/client/address.random_federation') }}<br>{{ __('pages/client/address.moscow') }}<br>{{ __('pages/client/address.ul_varshavskaya') }}</div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">{{ __('pages/client/address.phone_number') }}</div>
                                            <div class="address-card__row-content">38 972 588-42-36</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">{{ __('pages/client/address.email_address') }}</div>
                                            <div class="address-card__row-content">helena@example.com</div>
                                        </div>
                                        <div class="address-card__footer"><a href="#">{{ __('pages/client/address.edit') }}</a>&nbsp;&nbsp; <a href="#">{{ __('pages/client/address.remove') }}</a></div>
                                    </div>
                                </div>
                                <div class="addresses-list__divider"></div>
                                <div class="addresses-list__item card address-card">
                                    <div class="address-card__body">
                                        <div class="address-card__name">{{ __('pages/client/address.jupiter_saturnov') }}</div>
                                        <div class="address-card__row">{{ __('pages/client/address.random_land') }}<br>{{ __('pages/client/address.marsgrad') }}<br>{{ __('pages/client/address.sun_orbit') }}</div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">{{ __('pages/client/address.phone_number') }}</div>
                                            <div class="address-card__row-content">ZX 971 972-57-26</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">{{ __('pages/client/address.email_address') }}</div>
                                            <div class="address-card__row-content">jupiter@example.com</div>
                                        </div>
                                        <div class="address-card__footer"><a href="#">{{ __('pages/client/address.edit') }}</a>&nbsp;&nbsp; <a href="#">{{ __('pages/client/address.remove') }}</a></div>
                                    </div>
                                </div>
                                <div class="addresses-list__divider"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
		@stop
