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
                                <h4 class="account-nav__title">{{__('pages/client/order_detail.navigation_title')}}</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item"><a href="account-dashboard.html">{{__('pages/client/order_detail.dashboard')}}</a></li>
                                    <li class="account-nav__item"><a href="{{ route('profile.edit')}}">{{__('pages/client/order_detail.edit_profile')}}</a></li>
                                    <li class="account-nav__item"><a href="account-orders.html">{{__('pages/client/order_detail.order_history')}}</a></li>
                                    <li class="account-nav__item account-nav__item--active"><a href="account-order-details.html">{{__('pages/client/order_detail.order_details')}}</a></li>
                                    <li class="account-nav__item"><a href="account-addresses.html">{{__('pages/client/order_detail.addresses')}}</a></li>
                                    <li class="account-nav__item"><a href="account-edit-address.html">{{__('pages/client/order_detail.edit_address')}}</a></li>
                                    <li class="account-nav__item"><a href="account-password.html">{{__('pages/client/order_detail.password')}}</a></li>
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item"><a href="account-login.html">{{__('pages/client/order_detail.logout')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="order-header">
                                    <div class="order-header__actions"><a href="account-orders.html"
                                            class="btn btn-xs btn-secondary">{{__('pages/client/order_detail.back_to_list')}}</a></div>
                                    <h5 class="order-header__title">{{__('pages/client/order_detail.order_number', ['number' => '#9478'])}}</h5>
                                    <div class="order-header__subtitle">{{__('pages/client/order_detail.placed_on')}}Oct 19, 2020</mark> {{__('pages/client/order_detail.and_is_currently')}} <mark>{{__('pages/client/order_detail.pending')}}</mark>.</div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>{{__('pages/client/order_detail.product')}}</th>
                                                    <th>{{__('pages/client/order_detail.total')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="card-table__body card-table__body--merge-rows">
                                                <tr>
                                                    <td>{{__('pages/client/order_detail.brandix_spark_plug_kit')}} ASR-400 × 2</td>
                                                    <td>$38.00</td>
                                                </tr>
                                                <tr>
                                                    <td>{{__('pages/client/order_detail.brandix_brake_kit')}} BDX-750Z370-S × 1</td>
                                                    <td>$224.00</td>
                                                </tr>
                                                <tr>
                                                    <td>{{__('pages/client/order_detail.left_headlight_of_brandix')}} Z54 × 3</td>
                                                    <td>$1047.00</td>
                                                </tr>
                                            </tbody>
                                            <tbody class="card-table__body card-table__body--merge-rows">
                                                <tr>
                                                    <th>{{__('pages/client/order_detail.subtotal')}}</th>
                                                    <td>$1309.00</td>
                                                </tr>
                                                <tr>
                                                    <th>{{__('pages/client/order_detail.shipping')}}</th>
                                                    <td>$25.00</td>
                                                </tr>
                                                <tr>
                                                    <th>{{__('pages/client/order_detail.tax')}}</th>
                                                    <td>$262.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{__('pages/client/order_detail.total')}}</th>
                                                    <td>$1596.00</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 no-gutters mx-n2">
                                <div class="col-sm-6 col-12 px-2">
                                    <div class="card address-card address-card--featured">
                                        <div class="address-card__badge tag-badge tag-badge--theme">{{__('pages/client/order_detail.shipping_address')}}</div>
                                        <div class="address-card__body">
                                            <div class="address-card__name">Ryan Ford</div>
                                            <div class="address-card__row">{{__('pages/client/order_detail.random_federation')}}<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178</div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">{{__('pages/client/order_detail.phone_number')}}</div>
                                                <div class="address-card__row-content">38 972 588-42-36</div>
                                            </div>
                                           
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">{{__('pages/client/order_detail.email_address')}}</div>
                                                <div class="address-card__row-content">stroyka@example.com</div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
                                                <div class="card address-card address-card--featured">
                                                    <div class="address-card__badge tag-badge tag-badge--theme">{{__('pages/client/order_detail.billing_address')}}</div>
                                                    <div class="address-card__body">
                                                        <div class="address-card__name">Ryan Ford</div>
                                                        <div class="address-card__row">{{__('pages/client/order_detail.random_federation')}}<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178</div>
                                                        <div class="address-card__row">
                                                            <div class="address-card__row-title">{{__('pages/client/order_detail.phone_number')}}</div>
                                                            <div class="address-card__row-content">38 972 588-42-36</div>
                                                        </div>
                                                        <div class="address-card__row">
                                                            <div class="address-card__row-title">{{__('pages/client/order_detail.email_address')}}</div>
                                                            <div class="address-card__row-content">stroyka@example.com</div>
                                                        </div>
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
