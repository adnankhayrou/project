@extends('layouts._master')
@section('title','Automoto')
@section('content')
    <!-- site -->
    <main id="app">
   
    
			<div class="block-space block-space--layout--after-header"></div>
			<div class="block">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
							<div class="card ml-md-3 mr-md-3">
								<div class="card-body card-body--padding--2">
									<h1 class="card-title card-title--lg">{{__('pages/client/track_order.track_order')}}</h1>
									<p class="mb-4">{{__('pages/client/track_order.enter_order_id_and_email')}}</p>
									<form>
										<div class="form-group">
											<label for="track-order-id">{{__('pages/client/track_order.order_id')}}</label>
											<input id="track-order-id" type="text" class="form-control"
												placeholder="{{__('pages/client/track_order.order_id')}}">
										</div>
										<div class="form-group">
											<label for="track-email">{{__('pages/client/track_order.email_address')}}</label>
											<input id="track-email" type="email" class="form-control"
												placeholder="{{__('pages/client/track_order.email_address')}}">
										</div>
										<div class="form-group pt-4 mb-1">
											<button type="submit" class="btn btn-primary btn-lg btn-block">{{__('pages/client/track_order.track')}}</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="block-space block-space--layout--before-footer"></div>
		</div>
        @stop