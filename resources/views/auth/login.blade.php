@extends('layouts._master')
@section('title','Automoto')
@section('content')
   
    <main id="app">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--lg">
              
                  
                    <div class="col-md-12 d-flex mt-4 mt-md-0">
                        <div class="card flex-grow-1 mb-md-0 mr-0 mr-lg-3 ml-0 ml-lg-4">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">login_title</h3>
   
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="signin-email">{{ __('pages/client/login.email_address') }}</label>
            <input id="email" class="form-control" placeholder="{{ __('pages/client/login.email_placeholder') }}" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="signin-password">{{ __('pages/client/login.password') }}</label>
           
            <input id="password" type="password" class="form-control" placeholder="{{ __('pages/client/login.password_placeholder') }}"
                            name="password"
                            required autocomplete="current-password" />
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="form-check-label" for="signin-remember">{{ __('Remember me') }}</span>
            </label>
        </div>

        
            <div class="form-group mb-0">
            <button class="btn btn-primary mt-3">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</div>
</div>

</div>

</div>
</div>
<div class="block-space block-space--layout--before-footer"></div>
</div>
    @stop

