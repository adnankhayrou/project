@extends('layouts._master')
@section('title','Automoto')
@section('content')
  
    <main id="app">
   
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">{{__('pages/client/garage.title')}}</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item"><a href="account-dashboard.html">{{__('pages/client/garage.dashboard')}}</a></li>
                                    {{-- <li class="account-nav__item account-nav__item--active"><a href="account-garage.html">{{__('pages/client/garage.garage')}}</a></li> --}}
                                    <li class="account-nav__item"><a href="{{ route('profile.edit')}}">{{__('pages/client/garage.edit_profile')}}</a></li>
                                    <li class="account-nav__item"><a href="account-orders.html">{{__('pages/client/garage.order_history')}}</a></li>
                                    <li class="account-nav__item"><a href="account-order-details.html">{{__('pages/client/garage.order_details')}}</a></li>
                                    <li class="account-nav__item"><a href="account-addresses.html">{{__('pages/client/garage.addresses')}}</a></li>
                                    <li class="account-nav__item"><a href="account-edit-address.html">{{__('pages/client/garage.edit_address')}}</a></li>
                                    <li class="account-nav__item"><a href="account-password.html">{{__('pages/client/garage.password')}}</a></li>
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item"><a href="account-login.html">{{__('pages/client/garage.logout')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{__('pages/client/garage.garage')}}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="vehicles-list vehicles-list--layout--account">
                                        <div class="vehicles-list__body">
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">{{ __('pages/client/garage.vehicle_name_1') }}</div>
                                                    <div class="vehicles-list__item-details">{{ __('pages/client/garage.vehicle_details_1') }}</div>
                                                    <div class="vehicles-list__item-links"><a href="#">{{ __('pages/client/garage.show_parts') }}</a></div>
                                                </div>
                                                <div class="vehicles-list__item-remove">
                                                    <svg width="16" height="16">
                                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">{{ __('pages/client/garage.vehicle_name_2') }}</div>
                                                    <div class="vehicles-list__item-details">{{ __('pages/client/garage.vehicle_details_2') }}</div>
                                                    <div class="vehicles-list__item-links"><a href="#">{{ __('pages/client/garage.show_parts') }}</a></div>
                                                </div>
                                                <div class="vehicles-list__item-remove">
                                                    <svg width="16" height="16">
                                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">{{ __('pages/client/garage.vehicle_name_3') }}</div>
                                                    <div class="vehicles-list__item-details">{{ __('pages/client/garage.vehicle_details_3') }}</div>
                                                    <div class="vehicles-list__item-links"><a href="#">{{ __('pages/client/garage.show_parts') }}</a></div>
                                                </div>
                                                <div class="vehicles-list__item-remove">
                                                    <svg width="16" height="16">
                                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">{{ __('pages/client/garage.vehicle_name_4') }}</div>
                                                    <div class="vehicles-list__item-details">{{ __('pages/client/garage.vehicle_details_4') }}</div>
                                                    <div class="vehicles-list__item-links"><a href="#">{{ __('pages/client/garage.show_parts') }}</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-divider"></div>
                                <div class="card-header">
                                    <h5>{{ __('pages/client/garage.add_vehicle') }}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="vehicle-form vehicle-form--layout--account">
                                        <div class="vehicle-form__item vehicle-form__item--select">
                                            <select class="form-control form-control-select2" aria-label="{{ __('pages/client/garage.select_year') }}">
                                                <option value="none">{{ __('pages/client/garage.select_year') }}</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                            </select>
                                        </div>
                                        <div class="vehicle-form__item vehicle-form__item--select">
                                            <select class="form-control form-control-select2" aria-label="{{ __('pages/client/garage.select_brand') }}"
                                                disabled="disabled">
                                                <option value="none">{{ __('pages/client/garage.select_brand') }}</option>
                                                <option>Audi</option>
                                                <option>BMW</option>
                                                <option>Ferrari</option>
                                                <option>Ford</option>
                                                <option>KIA</option>
                                                <option>Nissan</option>
                                                <option>Tesla</option>
                                                <option>Toyota</option>
                                            </select>
                                        </div>
                                        <div class="vehicle-form__item vehicle-form__item--select">
                                            <select class="form-control form-control-select2" aria-label="{{ __('pages/client/garage.select_model') }}"
                                                disabled="disabled">
                                                <option value="none">{{ __('pages/client/garage.select_model') }}</option>
                                                <option>Explorer</option>
                                                <option>Focus S</option>
                                                <option>Fusion SE</option>
                                                <option>Mustang</option>
                                            </select>
                                        </div>
                                        <div class="vehicle-form__item vehicle-form__item--select">
                                            <select class="form-control form-control-select2" aria-label="{{ __('pages/client/garage.select_engine') }}"
                                                disabled="disabled">
                                                <option value="none">{{ __('pages/client/garage.select_engine') }}</option>
                                                <option>Gas 1.6L 125 hp AT/L4</option>
                                                <option>Diesel 2.5L 200 hp AT/L5</option>
                                                <option>Diesel 3.0L 250 hp MT/L5</option>
                                            </select>
                                        </div>
                                        <div class="vehicle-form__divider">{{ __('pages/client/garage.or') }}</div>
                                        <div class="vehicle-form__item">
                                            <input type="text" class="form-control" placeholder="{{ __('pages/client/garage.enter_vin_number') }}"
                                                aria-label="{{ __('pages/client/garage.enter_vin_number') }}">
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-3">
                                        <a href="#" class="btn btn-sm btn-primary">{{ __('pages/client/garage.add_vehicle') }}</a>
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
