@extends('layouts._master')
@section('title', 'Automoto')
@section('content')
    <!-- site -->
    <main id="app">

        <div class="block-space block-space--layout--after-header"></div>
        <div class="block ">
            <div class="container container--max--xxl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        <div class="account-nav flex-grow-1">
                            <h4 class="account-nav__title">
                                {{-- {{ __('pages/client/profile.dashboard') }} --}}
                                Navigation
                            </h4>
                            <ul class="account-nav__list">
                                <li class="account-nav__item "><a
                                    href="{{route('account-dashboard')}}">
                                        {{-- {{ __('pages/client/profile.dashboard') }} --}}
                                        Dashboard
                                    </a></li>
                                <li class="account-nav__item "><a
                                    href="{{route('my-pieces')}}">
                                        {{-- {{ __('pages/client/profile.dashboard') }} --}}
                                        Pieces
                                    </a></li>
                                {{-- <li class="account-nav__item"><a
                                        href="account-garage.html">
                                        {{ __('pages/client/profile.garage') }}
                                        profile garage
                                    </a></li> --}}
                                <li class="account-nav__item account-nav__item--active"><a
                                    href="{{ route('profile.edit')}}">
                                        {{-- {{ __('pages/client/profile.edit_profile') }} --}}
                                        Edit Profile
                                    </a></li>
                                <li class="account-nav__item"><a
                                        href="account-orders.html">
                                        {{-- {{ __('pages/client/profile.order_history') }} --}}
                                        Order History
                                    </a></li>
                                <li class="account-nav__item"><a
                                        href="account-order-details.html">
                                        {{-- {{ __('pages/client/profile.order_details') }} --}}
                                        Order Details
                                    </a>
                                </li>
                                <li class="account-nav__item"><a
                                        href="account-addresses.html">
                                        {{-- {{ __('pages/client/profile.addresses') }} --}}
                                        Addresses
                                    </a></li>
                                <li class="account-nav__item"><a
                                        href="account-edit-address.html">
                                        {{-- {{ __('pages/client/profile.edit_address') }} --}}
                                        Edit Address
                                    </a>
                                </li>
                                <li class="account-nav__item"><a
                                        href="account-password.html">
                                        {{-- {{ __('pages/client/profile.password') }} --}}
                                        Password
                                    </a></li>
                                <li class="account-nav__divider" role="presentation"></li>
                                <li class="account-nav__item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="#"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                    </form>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>
                                    {{-- {{ __('pages/client/profile.title_edit_profile') }} --}}
                                    edit profile
                                </h5>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-body card-body--padding--2">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-7 col-xl-6">

                                        <form id="send-verification" method="post"
                                            action="{{ route('verification.send') }}">
                                            @csrf
                                        </form>

                                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
@csrf
                                            @method('patch')

                                            <div class="form-group"><label
                                                    for="profile-first-name">
                                                    {{-- {{ __('pages/client/profile.first_name') }} --}}
                                                    first name
                                                </label>
                                                <x-text-input id="name" name="first_name" type="text"
                                                    class="form-control" :value="old('first_name', $user->first_name)" required autofocus
                                                    autocomplete="name" />
                                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                                            </div>
                                            <div class="form-group"><label
                                                    for="profile-last-name">
                                                    {{-- {{ __('pages/client/profile.last_name') }} --}}
                                                    last name
                                                </label>
                                                <x-text-input type="text" class="form-control" id="profile-last-name" name="last_name"
                                                :value="old('last_name', $user->last_name)" required autofocus
                                                autocomplete="name" />
                                                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                                            </div>
                                            <div>
                                                <div class="form-group"><label
                                                    for="profile-email">
                                                    {{-- {{ __('pages/client/profile.country') }} --}}
                                                    country
                                                </label>
                                                <x-text-input type="text" class="form-control" id="" name="country"
                                                :value="old('country', $user->country)" required autofocus
                                                autocomplete="name" /></div>

                                                <div class="form-group"><label
                                                    for="profile-email">
                                                    {{-- {{ __('pages/client/profile.city') }} --}}
                                                    city
                                                </label>
                                                <x-text-input type="text" class="form-control" id="" name="city"
                                                :value="old('city', $user->city)" required autofocus
                                                autocomplete="name" /></div>

                                                <div class="form-group"><label
                                                        for="profile-email">
                                                        {{-- {{ __('pages/client/profile.address') }} --}}
                                                        address
                                                    </label>
                                                    <x-text-input type="text" class="form-control" id="" name="address"
                                                    :value="old('address', $user->address)" required autofocus
                                                    autocomplete="name" /></div>

                                                <div class="form-group"><label
                                                        for="profile-phone">
                                                        {{-- {{ __('pages/client/profile.phone') }} --}}
                                                        phone
                                                    </label>
                                                    <x-text-input type="tele" class="form-control" id="profile-phone" name="phone"
                                                    :value="old('phone', $user->phone)" required autofocus
                                                    autocomplete="name" /></div>

                                                    <input id="password_confirmation" class="form-control" type="hidden"
                                                     name="role" required autocomplete="new-password" value="Supplier"/>

                                                <div class="form-group mb-0">
                                                        <div class="form-group"><label
                                                            for="profile-phone">
                                                            {{-- {{ __('pages/client/profile.email') }} --}}
                                                            email
                                                        </label>
                                                <x-text-input id="email" name="email" type="email"
                                                    class="form-control" :value="old('email', $user->email)" required
                                                    autocomplete="username" />
                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                    <div>
                                                        <p class="text-sm mt-2 text-gray-800">
                                                            {{ __('Your email address is unverified.') }}

                                                            <button form="send-verification"
                                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                {{ __('Click here to re-send the verification email.') }}
                                                            </button>
                                                        </p>

                                                        @if (session('status') === 'verification-link-sent')
                                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                                {{ __('A new verification link has been sent to your email address.') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                         
                                            <div class="form-group mb-0"><button class="btn btn-primary mt-3">Save
                                                {{-- {{ __('pages/client/profile.save_button') }} --}}
                                            </button>

                                                @if (session('status') === 'profile-updated')
                                                    <p x-data="{ show: true }" x-show="show" x-transition
                                                        x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                                        {{ __('Saved.') }}</p>
                                                @endif
                                            </div>
                                        </form>

                                        {{-- <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="#"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form> --}}

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
