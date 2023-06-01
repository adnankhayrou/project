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
                                <h4 class="account-nav__title">{{__('pages/client/edit_address.navigation')}}</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item"><a href="account-dashboard.html">{{__('pages/client/edit_address.dashboard')}}</a></li>
                                    {{-- <li class="account-nav__item"><a href="account-garage.html">{{__('pages/client/edit_address.garage')}}</a></li> --}}
                                    <li class="account-nav__item"><a href="{{ route('profile.edit')}}">{{__('pages/client/edit_address.edit_profile')}}</a></li>
                                    <li class="account-nav__item"><a href="account-orders.html">{{__('pages/client/edit_address.order_history')}}</a></li>
                                    <li class="account-nav__item"><a href="account-order-details.html">{{__('pages/client/edit_address.order_details')}}</a></li>
                                    <li class="account-nav__item"><a href="account-addresses.html">{{__('pages/client/edit_address.addresses')}}</a></li>
                                    <li class="account-nav__item account-nav__item--active"><a href="account-edit-address.html">{{__('pages/client/edit_address.edit_address')}}</a></li>
                                    <li class="account-nav__item"><a href="account-password.html">{{__('pages/client/edit_address.password')}}</a></li>
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item"><a href="account-login.html">{{__('pages/client/edit_address.logout')}}</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{__('pages/client/edit_address.edit_address')}}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <div class="form-row">
                                                <div class="form-group col-md-6"><label for="address-first-name">{{__('pages/client/edit_address.first_name')}}</label> <input
                                                        type="text" class="form-control"
                                                        id="address-first-name" placeholder="{{__('pages/client/edit_address.enter_first_name')}}"></div>
                                                <div class="form-group col-md-6"><label for="address-last-name">{{__('pages/client/edit_address.last_name')}}</label> <input type="text" class="form-control"
                                                        id="address-last-name" placeholder="{{__('pages/client/edit_address.enter_last_name')}}"></div>
                                            </div>
                                            <div class="form-group"><label for="address-company-name">{{__('pages/client/edit_address.company')}} <span
                                                        class="text-muted">({{__('pages/client/edit_address.optional')}})</span></label> <input
                                                    type="text" class="form-control" id="address-company-name"
                                                    placeholder="{{__('pages/client/edit_address.enter_company_name')}}"></div>
                                            <div class="form-group"><label for="address-country">{{__('pages/client/edit_address.country')}}</label>
                                                <select id="address-country" class="form-control">
                                                    <option value="">{{__('pages/client/edit_address.select_country')}}</option>
                                                    <option value="AU">{{__('pages/client/edit_address.australia')}}</option>
                                                    <option value="DE">{{__('pages/client/edit_address.germany')}}</option>
                                                    <option value="FR">{{__('pages/client/edit_address.france')}}</option>
                                                    <option value="IT">{{__('pages/client/edit_address.italy')}}</option>
                                                    <option value="RU">{{__('pages/client/edit_address.russia')}}</option>
                                                    <option value="UA">{{__('pages/client/edit_address.ukraine')}}</option>
                                                    <option value="US">{{__('pages/client/edit_address.united_states')}}</option>
                                                </select>
                                            </div>
                                            <div class="form-group"><label for="address-address1">{{__('pages/client/edit_address.street_address')}}</label> <input type="text" class="form-control"
                                                    id="address-address1"
                                                    placeholder="{{__('pages/client/edit_address.enter_street_address')}}"> <label
                                                    for="address-address2" class="sr-only">{{__('pages/client/edit_address.street_address')}}</label>
                                                <input type="text" class="form-control mt-2"
                                                    id="address-address2" placeholder="{{__('pages/client/edit_address.enter_apartment_suite_unit')}}">
                                            </div>
                                            <div class="form-group"><label for="address-city">{{__('pages/client/edit_address.city')}}</label> <input
                                                    type="text" class="form-control" id="address-city"
                                                    placeholder="{{__('pages/client/edit_address.enter_city')}}"></div>
                                            <div class="form-group"><label for="address-state">{{__('pages/client/edit_address.state')}}</label> <input
                                                    type="text" class="form-control" id="address-state"
                                                    placeholder="{{__('pages/client/edit_address.enter_state')}}"></div>
                                            <div class="form-group"><label for="address-postcode">{{__('pages/client/edit_address.postcode')}}</label>
                                                <input type="text" class="form-control" id="address-postcode"
                                                    placeholder="{{__('pages/client/edit_address.enter_postcode')}}"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0"><label for="address-email">{{__('pages/client/edit_address.email_address')}}</label> <input
                                                    type="email" class="form-control" id="address-email"
                                                    placeholder="{{__('pages/client/edit_address.enter_email_address')}}"></div>
                                            <div class="form-group col-md-6 mb-0"><label
                                                    for="address-phone">{{__('pages/client/edit_address.phone_number')}}</label> <input
                                                    type="text" class="form-control" id="address-phone"
                                                    placeholder="{{__('pages/client/edit_address.enter_phone_number')}}"></div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <div class="form-check"><span
                                                    class="input-check form-check-input"><span
                                                        class="input-check__body"><input
                                                            class="input-check__input" type="checkbox"
                                                            id="default-address"> <span
                                                            class="input-check__box"></span> <span
                                                            class="input-check__icon"><svg width="9px"
                                                                height="7px">
                                                                <path
                                                                    d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                                            </svg> </span></span></span><label
                                                    class="form-check-label" for="default-address">{{__('pages/client/edit_address.set_default_address')}}</label></div>
                                        </div>
                                        <div class="form-group mb-0 pt-3 mt-3"><button
                                                class="btn btn-primary">{{__('pages/client/edit_address.save')}}</button></div>
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
