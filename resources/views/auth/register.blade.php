@extends('layouts._master')
@section('title','Automoto')
@section('content')
      
<main id="app">
   
    <div class="block-space block-space--layout--after-header"></div>
    <div class="block">
        <div class="container container--max--lg">
          
              
            <div class="col-md-12 d-flex mt-4 mt-md-0">
                <div class="card flex-grow-1 mb-0 ml-0 ml-lg-3 mr-0 mr-lg-4">
                    <div class="card-body card-body--padding--2">
                        <h3 class="card-title">
                            {{-- {{ __('pages/client/register.title') }} --}}
                        </h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- First Name -->
                            <div class="form-group">
                                <label for="signup-first-name">
                                    {{-- {{ __('pages/client/register.first_name') }} --}}
                                    first name
                                </label>
                                <input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <!-- Last Name -->
                            <div class="form-group">
                                <label for="signup-last-name">
                                    {{-- {{ __('pages/client/register.last_name') }} --}}
                                    last name
                                </label>
                                <input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label for="signup-phone">
                                    {{-- {{ __('pages/client/register.phone') }} --}}
                                    phone
                                </label>
                                <input id="phone" class="form-control" type="tele" name="phone" :value="old('phone')" required autofocus autocomplete="tel" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            <!-- Country -->
                            <div class="form-group">
                                <label for="signup-country">
                                    {{-- {{ __('pages/client/register.country') }} --}}
                                    country
                                </label>
                                <input id="country" class="form-control" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
                                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                            </div>

                            <!-- City -->
                            <div class="form-group">
                                <label for="signup-city">
                                    {{-- {{ __('pages/client/register.city') }} --}}
                                    city
                                </label>
                                <input id="city" class="form-control" type="text" name="city" :value="old('city')" required autofocus autocomplete="address-level2" />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>

                            <!-- Address -->
                            <div class="form-group">
                                <label for="signup-address">
                                    {{-- {{ __('pages/client/register.address') }} --}}
                                    address
                                </label>
                                <input id="address" class="form-control" type="text" name="address" :value="old('address')" required autofocus autocomplete="street-address" />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="signup-email">
                                    {{-- {{ __('pages/client/register.email') }} --}}
                                    email
                                </label>
                                <x-text-input id="email" class="form-control"
                                placeholder="
                                {{-- {{ __('pages/client/register.email_placeholder') }} --}}
                                " name="email" :value="old('email')" required autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="signup-password">
                                    {{-- {{ __('pages/client/register.password') }} --}}
                                    password
                                </label>
                                <input id="password" class="form-control" placeholder="
                                {{-- {{ __('pages/client/register.password_placeholder') }} --}}
                                "
                                    type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="signup-confirm">
                                    {{-- {{ __('pages/client/register.confirm_password') }} --}}
                                    confirm password
                                </label>
                                <input id="password_confirmation" class="form-control" type="password" placeholder="
                                {{-- {{ __('pages/client/register.confirm_password_placeholder') }} --}}
                                "
                                    name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                <input id="password_confirmation" class="form-control" type="hidden"
                                    name="role" required autocomplete="new-password" value="Supplier"/>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary mt-3">
                                        {{-- {{ __('pages/client/register.register_button') }} --}}
                                        register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
</main>
@stop
