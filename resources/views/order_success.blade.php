@extends('layouts._master')
@section('title','Automoto')
@section('content')
    <!-- site -->
    <main id="app">
   
			<div class="block-space block-space--layout--spaceship-ledge-height"></div>
			<div class="block order-success">
				<div class="container">
					<div class="order-success__body">
						<div class="order-success__header">
							<div class="order-success__icon">
								<svg width="100" height="100">
									<path d="M50,100C22.4,100,0,77.6,0,50S22.4,0,50,0s50,22.4,50,50S77.6,100,50,100z M50,2C23.5,2,2,23.5,2,50
									s21.5,48,48,48s48-21.5,48-48S76.5,2,50,2z M44.2,71L22.3,49.1l1.4-1.4l21.2,21.2l34.4-34.4l1.4,1.4L45.6,71
									C45.2,71.4,44.6,71.4,44.2,71z" />
								</svg>
							</div>
							<h1 class="order-success__title">{{__('pages/client/success.order-thank-you')}}</h1>
							<div class="order-success__subtitle">{{__('pages/client/success.order-received')}}</div>
							<div class="order-success__actions">
								<a href="{{ url('/') }}" class="btn btn-sm btn-secondary">{{__('go-to-homepage')}}</a>
							</div>
						</div>
						
						<div class="card order-success__meta">
							<ul class="order-success__meta-list">
								<li class="order-success__meta-item">
									<span class="order-success__meta-title">{{__('pages/client/success.order-number')}}:</span>
									<span class="order-success__meta-value">#9478</span>
								</li>
								<li class="order-success__meta-item">
									<span class="order-success__meta-title">{{__('pages/client/success.created-at')}}:</span>
									<span class="order-success__meta-value">Oct 19, 2020</span>
								</li>
								<li class="order-success__meta-item">
									<span class="order-success__meta-title">{{__('pages/client/success.total')}}:</span>
									<span class="order-success__meta-value">$1596.00</span>
								</li>
								<li class="order-success__meta-item">
									<span class="order-success__meta-title">{{__('pages/client/success.payment-method')}}:</span>
									<span class="order-success__meta-value">PayPal</span>
								</li>
							</ul>
						</div>
						
						<div class="card">
							<div class="order-list">
								<table>
									<thead class="order-list__header">
										<tr>
											<th class="order-list__column-label" colspan="2">{{__('pages/client/success.product')}}</th>
											<th class="order-list__column-quantity">{{__('pages/client/success.quantity')}}</th>
											<th class="order-list__column-total">{{__('pages/client/success.total')}}</th>
										</tr>
									</thead>
									
									<tbody class="order-list__products">
										<tr>
											<td class="order-list__column-image">
												<div class="image image--type--product"><a href="product-full.html" class="image__body"><img class="image__tag" src="{{ asset('/assets/images/products/product-1-40x40.jpg') }}" alt=""></a></div>
											</td>
											<td class="order-list__column-product"><a href="product-full.html">{{__('pages/client/success.product')}}</a>
												<div class="order-list__options">
													<ul class="order-list__options-list">
														<li class="order-list__options-item"><span class="order-list__options-label">{{__('pages/client/success.color')}}: </span><span class="order-list__options-value">True Red</span></li>
														<li class="order-list__options-item"><span class="order-list__options-label">{{__('pages/client/success.material')}}: </span><span class="order-list__options-value">Aluminium</span></li>
													</ul>
												</div>
											</td>
											<td class="order-list__column-quantity" data-title="{{__('pages/client/success.quantity')}}">2</td>
											<td class="order-list__column-total">{{__('pages/client/success.total')}}</td>
										</tr>
										<tr>
											<td class="order-list__column-image">
												<div class="image image--type--product"><a href="product-full.html" class="image__body"><img class="image__tag" src="{{ asset('/assets/images/products/product-2-40x40.jpg') }}" alt=""></a></div>
											</td>
											<td class="order-list__column-product"><a href="product-full.html">{{__('pages/client/success.product')}}</a></td>
											<td class="order-list__column-quantity" data-title="{{__('pages/client/success.quantity')}}">1</td>
											<td class="order-list__column-total">{{__('pages/client/success.total')}}</td>
										</tr>
										<tr>
											<td class="order-list__column-image">
												<div class="image image--type--product"><a href="product-full.html" class="image__body"><img class="image__tag" src="{{ asset('/assets/images/products/product-3-40x40.jpg') }}" alt=""></a></div>
											</td>
											<td class="order-list__column-product"><a href="product-full.html">{{__('pages/client/success.product')}}</a>
												<div class="order-list__options">
													<ul class="order-list__options-list">
														<li class="order-list__options-item"><span class="order-list__options-label">{{__('pages/client/success.color')}}: </span><span class="order-list__options-value">Green</span></li>
													</ul>
												</div>
											</td>
											<td class="order-list__column-quantity" data-title="{{__('pages/client/success.quantity')}}">3</td>
											<td class="order-list__column-total">{{__('pages/client/success.total')}}</td>
										</tr>
									</tbody>
									<tbody class="order-list__subtotals">
										<tr>
											<th class="order-list__column-label" colspan="3">{{__('pages/client/success.subtotal')}}</th>
											<td class="order-list__column-total">$1309.00</td>
										</tr>
										<tr>
											<th class="order-list__column-label" colspan="3">{{__('pages/client/success.shipping')}}</th>
											<td class="order-list__column-total">$25.00</td>
										</tr>
										<tr>
											<th class="order-list__column-label" colspan="3">{{__('pages/client/success.tax')}}</th>
											<td class="order-list__column-total">$262.00</td>
										</tr>
									</tbody>
									<tfoot class="order-list__footer">
										<tr>
											<th class="order-list__column-label" colspan="3">{{__('pages/client/success.total')}}</th>
											<td class="order-list__column-total">$1596.00</td>
										</tr>
									</tfoot>
									
								</table>
							</div>
						</div>
						<div class="order-success__addresses">
							<div class="order-success__address card address-card">
								<div class="address-card__badge tag-badge tag-badge--theme">{{__('pages/client/success.shipping_address')}}</div>
								<div class="address-card__body">
									<div class="address-card__name">{{__('pages/client/success.name')}}: Ryan Ford</div>
									<div class="address-card__row">{{__('pages/client/success.address')}}: Random Federation<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178</div>
									<div class="address-card__row">
										<div class="address-card__row-title">{{__('pages/client/success.phone_number')}}</div>
										<div class="address-card__row-content">38 972 588-42-36</div>
									</div>
									<div class="address-card__row">
										<div class="address-card__row-title">{{__('pages/client/success.email_address')}}</div>
										<div class="address-card__row-content">stroyka@example.com</div>
									</div>
								</div>
							</div>
							<div class="order-success__address card address-card">
								<div class="address-card__badge tag-badge tag-badge--theme">{{__('pages/client/success.billing_address')}}</div>
								<div class="address-card__body">
									<div class="address-card__name">{{__('pages/client/success.name')}}: Ryan Ford</div>
									<div class="address-card__row">{{__('pages/client/success.address')}}: Random Federation<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178</div>
									<div class="address-card__row">
										<div class="address-card__row-title">{{__('pages/client/success.phone_number')}}</div>
										<div class="address-card__row-content">38 972 588-42-36</div>
									</div>
									<div class="address-card__row">
										<div class="address-card__row-title">{{__('pages/client/success.email_address')}}</div>
										<div class="address-card__row-content">stroyka@example.com</div>
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