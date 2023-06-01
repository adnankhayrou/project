@extends('layouts._master')
@section('title','Automoto')
@section('content')
    <!-- site -->
    <main id="app">
   
			<div class="block-map block">
				<div class="block-map__body"><iframe
						src="https://maps.google.com/maps?q=Holbrook-Palmer%20Park&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
						frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
			</div>
			<div class="block-header block-header--has-breadcrumb block-header--has-title">
				<div class="container">
					<div class="block-header__body">
						<nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
							<ol class="breadcrumb__list">
								<li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
								<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
									<a href="{{ route('home') }}" class="breadcrumb__item-link">{{ __('pages/client/contact.accueil') }}</a>
								</li>
								<li class="breadcrumb__item breadcrumb__item--parent">
									<a href="#" class="breadcrumb__item-link">{{ __('pages/client/contact.fil-dariane') }}</a>
								</li>
								<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page">
									<span class="breadcrumb__item-link">{{ __('pages/client/contact.page-actuelle') }}</span>
								</li>
								<li class="breadcrumb__title-safe-area" role="presentation"></li>
							</ol>
						</nav>
						<h1 class="block-header__title">{{ __('pages/client/contact.nous-contacter') }}</h1>
					</div>
				</div>
			</div>
			
			<div class="block">
				<div class="container container--max--lg">
					<div class="card">
						<div class="card-body card-body--padding--2">
							<div class="row">
								<div class="col-12 col-lg-6 pb-4 pb-lg-0">
									<div class="mr-1">
										<h4 class="contact-us__header card-title">{{__('pages/client/contact.our-address')}}</h4>
										<div class="contact-us__address">
											<p>{{__('pages/client/contact.address')}}<br>
												{{__('pages/client/contact.email')}}: {{__('pages/client/contact.email-address')}}<br>
												{{__('pages/client/contact.phone-number')}}: +1 754 000-00-00</p>
											<p><strong>{{__('pages/client/contact.opening-hours')}}</strong><br>
												{{__('pages/client/contact.hours-mon-fri')}}<br>
												{{__('pages/client/contact.hours-sat')}}<br>
												{{__('pages/client/contact.hours-sun')}}</p>
											<p><strong>{{__('pages/client/contact.comment')}}</strong><br>
												{{__('pages/client/contact.comment-text')}}</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									@livewire('contact-form')
									@livewire('CompanyInformation')
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="block-space block-space--layout--before-footer"></div>
		</div>
        @stop