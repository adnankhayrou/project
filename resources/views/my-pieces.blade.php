@extends('layouts._master')
@section('content')
@livewireStyles
<div class="site__body">
    <div class="block-space block-space--layout--after-header"></div>
    <div class="block">
        <div class="container container--max--xxl">
            <div class="row">
                <div class="col-12 col-lg-3 d-flex">
                    <div class="account-nav flex-grow-1">
                        <h4 class="account-nav__title">Navigation</h4>
                        <ul class="account-nav__list">
                            <li class="account-nav__item"><a href="{{route('account-dashboard')}}">Dashboard</a></li>
                            <li class="account-nav__item account-nav__item--active"><a href="{{route('my-pieces')}}">Pieces</a></li>
                            {{-- <li class="account-nav__item"><a href="account-garage.html">Garage</a></li> --}}
                            <li class="account-nav__item"><a href="{{ route('profile.edit')}}">Edit Profile</a></li>
                            <li class="account-nav__item"><a href="account-orders.html">Order History</a></li>
                            <li class="account-nav__item"><a href="account-order-details.html">Order Details</a></li>
                            <li class="account-nav__item"><a href="account-addresses.html">Addresses</a> </li>
                            <li class="account-nav__item"><a href="account-edit-address.html">Edit Address</a></li>
                            <li class="account-nav__item"><a href="account-password.html">Password</a></li>
                            <li class="account-nav__divider" role="presentation"></li>
                            <li class="account-nav__item">
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="#"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('logout') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                    <div class="dashboard">
                        <h3 class="m-2">My pieces</h3>
                        <div class="dashboard__orders card">
                            <div class="card-table">
                                @livewire('all-pieces',['user_id'=> 1])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
</div>

@livewireScripts
@endsection