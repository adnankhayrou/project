@extends('layouts._master')
@section('title','Automoto')
@section('content')
    <!-- site -->
    <main id="app">
   
		<div class="block-header block-header--has-breadcrumb block-header--has-title">
			<div class="container">
				<div class="block-header__body">
					<nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
						<ol class="breadcrumb__list">
							<li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
							<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
								<a href="index.html" class="breadcrumb__item-link">{{ __('pages/client/checkout.home') }}</a>
							</li>
							<li class="breadcrumb__item breadcrumb__item--parent">
								<a href="#" class="breadcrumb__item-link">{{ __('pages/client/checkout.breadcrumb') }}</a>
							</li>
							<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
								aria-current="page">
								<span class="breadcrumb__item-link">{{ __('pages/client/checkout.currentPage') }}</span>
							</li>
							<li class="breadcrumb__title-safe-area" role="presentation"></li>
						</ol>
					</nav>
					<h1 class="block-header__title">{{ __('pages/client/checkout.title') }}</h1>
				</div>
			</div>
		</div>
		
			<div class="checkout block">
				<div class="container container--max--xl">
					<div class="row">
						<div class="col-12 mb-3">
							<div class="alert alert-lg alert-primary">{{ __('pages/client/checkout.returningCustomer') }} <a href="#">{{ __('pages/client/checkout.loginLink') }}</a></div>
						</div>
						
						<div class="col-12 col-lg-6 col-xl-7">
							<div class="card mb-lg-0">
								<div class="card-body card-body--padding--2">
									<h3 class="card-title">{{ __('pages/client/checkout.billingDetails') }}</h3>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="checkout-first-name">{{ __('pages/client/checkout.firstName') }}</label>
											<input type="text" class="form-control" id="checkout-first-name" placeholder="{{ __('pages/client/checkout.firstName')}}">
										</div>
										<div class="form-group col-md-6">
											<label for="checkout-last-name">{{ __('pages/client/checkout.lastName')}}</label>
											<input type="text" class="form-control" id="checkout-last-name" placeholder="{{ __('pages/client/checkout.lastName')}}">
										</div>
									</div>
									<div class="form-group">
										<label for="checkout-company-name">{{ __('pages/client/checkout.companyName')}} <span class="text-muted">({{ __('pages/client/checkout.optional')}})</span></label>
										<input type="text" class="form-control" id="checkout-company-name" placeholder="{{ __('pages/client/checkout.companyName')}}">
									</div>
									<div class="form-group">
										<label for="checkout-country">{{ __('pages/client/checkout.country')}}</label>
										<select id="checkout-country" class="form-control form-control-select2">
											<option>{{ __('pages/client/checkout.selectCountry')}}</option>
											<option>{{ __('pages/client/checkout.countryUnitedStates')}}</option>
											<option>{{ __('pages/client/checkout.countryRussia')}}</option>
											<option>{{ __('pages/client/checkout.countryItaly')}}</option>
											<option>{{ __('pages/client/checkout.countryFrance')}}</option>
											<option>{{ __('pages/client/checkout.countryUkraine')}}</option>
											<option>{{ __('pages/client/checkout.countryGermany')}}</option>
											<option>{{ __('pages/client/checkout.countryAustralia')}}</option>
										</select>
										
									</div>
									<div class="form-group">
										<label for="checkout-street-address">{{ __('pages/client/checkout.streetAddress')}}</label>
										<input type="text" class="form-control" id="checkout-street-address" placeholder="{{ __('pages/client/checkout.streetAddress') }}">
									</div>
									<div class="form-group">
										<label for="checkout-address">{{ __('pages/client/checkout.apartmentSuite') }} <span class="text-muted">({{ __('pages/client/checkout.optional')}})</span></label>
										<input type="text" class="form-control" id="checkout-address">
									</div>
									<div class="form-group">
										<label for="checkout-city">{{ __('pages/client/checkout.city') }}</label>
										<input type="text" class="form-control" id="checkout-city">
									</div>
									<div class="form-group">
										<label for="checkout-state">{{ __('pages/client/checkout.stateCounty')}}</label>
										<input type="text" class="form-control" id="checkout-state">
									</div>
									<div class="form-group">
										<label for="checkout-postcode">{{ __('pages/client/checkout.postcodeZIP')}}</label>
										<input type="text" class="form-control" id="checkout-postcode">
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="checkout-email">{{ __('pages/client/checkout.email')}}</label>
											<input type="email" class="form-control" id="checkout-email" placeholder="{{ __('pages/client/checkout.email') }}">
										</div>
										<div class="form-group col-md-6">
											<label for="checkout-phone">{{ __('pages/client/checkout.phone')}}</label>
											<input type="text" class="form-control" id="checkout-phone" placeholder="{{ __('pages/client/checkout.phone') }}">
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
											<span class="input-check form-check-input">
								<span class="input-check__body"><input class="input-check__input" type="checkbox" id="checkout-create-account">
													<span class="input-check__box"></span>
													<span class="input-check__icon">
														<svg width="9px" height="7px">
															<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
														</svg>
													</span>
												</span>
											</span>
											<label class="form-check-label" for="checkout-create-account">{{ __('pages/client/checkout.createAccount')}}</label>
										</div>
									</div>
								</div>
								<div class="card-divider"></div>
								<div class="card-body card-body--padding--2">
									<h3 class="card-title">{{ __('pages/client/checkout.shippingDetails') }}</h3>
									<div class="form-group">
										<div class="form-check">
											<span class="input-check form-check-input">
												<span class="input-check__body">
													<input class="input-check__input" type="checkbox" id="checkout-different-address">
													<span class="input-check__box"></span>
													<span class="input-check__icon">
														<svg width="9px" height="7px">
															<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
														</svg>
													</span>
												</span>
											</span>
											<label class="form-check-label" for="checkout-different-address">
												{{ __('pages/client/checkout.differentAddress') }}
											</label>
										</div>
									</div>
									<div class="form-group">
										<label for="checkout-comment">{{ __('pages/client/checkout.orderNotes') }} <span class="text-muted">({{ __('pages/client/checkout.optional') }})</span></label>
										<textarea id="checkout-comment" class="form-control" rows="4"></textarea>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
							<div class="card mb-0">
								<div class="card-body card-body--padding--2">
									<div class="card-body card-body--padding--2">
										<h3 class="card-title">{{ __('pages/client/checkout.shippingDetails') }}</h3>
										<div class="form-group">
											<div class="form-check">
												<span class="input-check form-check-input">
													<span class="input-check__body">
														<input class="input-check__input" type="checkbox" id="checkout-different-address">
														<span class="input-check__box"></span>
														<span class="input-check__icon">
															<svg width="9px" height="7px">
																<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
															</svg>
														</span>
													</span>
												</span>
												<label class="form-check-label" for="checkout-different-address">
													{{ __('pages/client/checkout.differentAddress') }}
												</label>
											</div>
										</div>
										<div class="form-group">
											<label for="checkout-comment">{{ __('pages/client/checkout.orderNotes') }} <span class="text-muted">({{ __('pages/client/checkout.optional') }})</span></label>
											<textarea id="checkout-comment" class="form-control" rows="4"></textarea>
										</div>
									</div>
									
									<div class="checkout__payment-methods payment-methods">
										<ul class="payment-methods__list">
											<li class="payment-methods__item payment-methods__item--active">
												<label class="payment-methods__item-header">
													<span class="payment-methods__item-radio input-radio">
														<span class="input-radio__body">
															<input class="input-radio__input" name="checkout_payment_method" type="radio" checked="checked">
															<span class="input-radio__circle"></span>
														</span>
													</span>
													<span class="payment-methods__item-title">{{ __('pages/client/checkout.directBankTransfer') }}</span>
												</label>
												<div class="payment-methods__item-container">
													<div class="payment-methods__item-details text-muted">{{ __('pages/client/checkout.bankTransferDetails') }}</div>
												</div>
											</li>
											
											<li class="payment-methods__item"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="payment-methods__item-title">{{ __('pages/client/checkout.checkPayments') }}</span></label>
												<div class="payment-methods__item-container">
													<div class="payment-methods__item-details text-muted">{{ __('pages/client/checkout.checkPaymentDetails') }}</div>
												</div>
											</li>
											<li class="payment-methods__item"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="payment-methods__item-title">{{ __('pages/client/checkout.cashOnDelivery') }}</span></label>
												<div class="payment-methods__item-container">
													<div class="payment-methods__item-details text-muted">{{ __('pages/client/checkout.cashOnDeliveryDetails') }}</div>
												</div>
											</li>
											
											<li class="payment-methods__item">
												<label class="payment-methods__item-header">
													<span class="payment-methods__item-radio input-radio">
														<span class="input-radio__body">
															<input class="input-radio__input" name="checkout_payment_method" type="radio">
															<span class="input-radio__circle"></span>
														</span>
													</span>
													<span class="payment-methods__item-title">{{ __('pages/client/checkout.payPal') }}</span>
												</label>
												<div class="payment-methods__item-container">
													<div class="payment-methods__item-details text-muted">{{ __('pages/client/checkout.payPalDetails') }}</div>
												</div>
											</li>
											
										</ul>
									</div>
									<div class="checkout__agree form-group">
										<div class="form-check">
											<span class="input-check form-check-input">
												<span class="input-check__body">
													<input class="input-check__input" type="checkbox" id="checkout-terms">
													<span class="input-check__box"></span>
													<span class="input-check__icon">
														<svg width="9px" height="7px">
															<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
														</svg>
													</span>
												</span>
											</span>
											<label class="form-check-label" for="checkout-terms">
												{{ __('pages/client/checkout.iAgreeToTerms') }}
												<a target="_blank" href="terms.html">{{ __('pages/client/checkout.termsAndConditions') }}</a>
											</label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-xl btn-block">
										{{ __('pages/client/checkout.placeOrder') }}
									</button>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-space block-space--layout--before-footer"></div>
		</div>
        @stop
