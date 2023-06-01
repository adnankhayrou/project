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
                                    <h3 class="card-title">{{ __('pages/client/login.login_title') }}</h3>
                                    <form>
                                        <div class="form-group">
                                            <label for="signin-email">{{ __('pages/client/login.email_address') }}</label>
                                            <input id="signin-email" type="email" class="form-control" placeholder="{{ __('pages/client/login.email_placeholder') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="signin-password">{{ __('pages/client/login.password') }}</label>
                                            <input id="signin-password" type="password" class="form-control" placeholder="{{ __('pages/client/login.password_placeholder') }}">
                                            <small class="form-text text-muted"><a href="#">{{ __('pages/client/login.forgot_password') }}</a></small>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <span class="input-check form-check-input">
                                                    <span class="input-check__body">
                                                        <input class="input-check__input" type="checkbox" id="signin-remember">
                                                        <span class="input-check__box"></span>
                                                        <span class="input-check__icon">
                                                            <svg width="9px" height="7px">
                                                                <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                                <label class="form-check-label" for="signin-remember">{{ __('pages/client/login.remember_me') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-primary mt-3">{{ __('pages/client/login.login_button') }}</button>
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
