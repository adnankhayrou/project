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
                                <h3 class="card-title">{{ __('pages/client/register.title') }}</h3>
                                <form>
                                    <div class="form-group"><label for="signup-email">{{ __('pages/client/register.email') }}</label>
                                        <input id="signup-email" type="email" class="form-control"
                                            placeholder="{{ __('pages/client/register.email_placeholder') }}"></div>
                                    <div class="form-group"><label for="signup-password">{{ __('pages/client/register.password') }}</label>
                                        <input id="signup-password" type="password" class="form-control"
                                            placeholder="{{ __('pages/client/register.password_placeholder') }}"></div>
                                    <div class="form-group"><label for="signup-confirm">{{ __('pages/client/register.confirm_password') }}</label>
                                        <input id="signup-confirm" type="password" class="form-control"
                                            placeholder="{{ __('pages/client/register.confirm_password_placeholder') }}"></div>
                                    <div class="form-group mb-0"><button type="submit"
                                            class="btn btn-primary mt-3">{{ __('pages/client/register.register_button') }}</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
		@stop 