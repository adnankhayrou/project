<footer class="site__footer">
    <div class="site-footer">
        <div class="decor site-footer__decor decor--type--bottom">
            <div class="decor__body">
                <div class="decor__start"></div>
                <div class="decor__end"></div>
                <div class="decor__center"></div>
            </div>
        </div> 
        <div class="site-footer__widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">{{ __('layouts/footer.contact_us') }}</h5>
                            <div class="footer-contacts__text">{{ __('layouts/footer.contact_us_text') }}</div>
                            <address class="footer-contacts__contacts">
                                <dl>
                                    <dt>{{ __('layouts/footer.phone_number') }}</dt>
                                    <dd>+1 (800) 060-07-30</dd>
                                </dl>
                                <dl>
                                    <dt>{{ __('layouts/footer.email_address') }}</dt>
                                    <dd>red-parts@example.com</dd>
                                </dl>
                                <dl>
                                    <dt>{{ __('layouts/footer.our_location') }}</dt>
                                    <dd>715 Fake Street, New York 10021 USA</dd>
                                </dl>
                                <dl>
                                    <dt>{{ __('layouts/footer.working_hours') }}</dt>
                                    <dd>Mon-Sat 10:00pm - 7:00pm</dd>
                                </dl>
                            </address>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">{{ __('layouts/footer.information') }}</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.about_us') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.delivery_information') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.privacy_policy') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.brands') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.contact_us') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.returns') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.site_map') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">{{ __('layouts/footer.my_account') }}</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.store_location') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.order_history') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.wish_list') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.newsletter') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.specials') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.gift_certificates') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('layouts/footer.affiliate') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">{{ __('layouts/footer.newsletter') }}</h5>
                            <div class="footer-newsletter__text">{{ __('layouts/footer.newsletter_text') }}</div>
                            <form action="#" class="footer-newsletter__form">
                                <label class="sr-only" for="footer-newsletter-address">{{ __('layouts/footer.email_address') }}</label>
                                <input type="text" class="footer-newsletter__form-input" id="footer-newsletter-address" placeholder="{{ __('layouts/footer.email_address_placeholder') }}">
                                <button class="footer-newsletter__form-button">{{ __('layouts/footer.subscribe') }}</button>
                            </form>
                            <div class="footer-newsletter__text footer-newsletter__text--social">{{ __('layouts/footer.follow_us') }}</div>
                            <div class="footer-newsletter__social-links social-links">
                                <ul class="social-links__list">
                                    <li class="social-links__item social-links__item--facebook"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-links__item social-links__item--twitter"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="site-footer__bottom-row">
                  
                    <div class="site-footer__payments"><img src="{{ asset('/assets/images/payments.png') }}"
                            alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- site__footer / end -->
</div><!-- site / end -->
<!-- mobile-menu -->
<div class="mobile-menu">
    <div class="mobile-menu__backdrop"></div>
    <div class="mobile-menu__body"><button class="mobile-menu__close" type="button"><svg width="12"
                height="12">
                <path
                    d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
C11.2,9.8,11.2,10.4,10.8,10.8z" />
            </svg></button>
        <div class="mobile-menu__panel">
            <div class="mobile-menu__panel-header">
                <div class="mobile-menu__panel-title">{{ __('layouts/footer.menu') }}</div>
            </div>
            <div class="mobile-menu__panel-body">
                <div class="mobile-menu__settings-list">
                    <div class="mobile-menu__setting" data-mobile-menu-item>
                        <button class="mobile-menu__setting-button" title="{{ __('layouts/footer.language') }}" data-mobile-menu-trigger>
                            <span class="mobile-menu__setting-icon">
                                <img src="{{ asset('/assets/images/languages/language-5.png') }}" alt="">
                            </span>
                            <span class="mobile-menu__setting-title">{{ __('layouts/footer.italian') }}</span>
                            <span class="mobile-menu__setting-arrow">
                                <svg width="6px" height="9px">
                                    <path d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                </svg>
                            </span>
                        </button>
                        <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                            <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                <div class="mobile-menu__panel-header">
                                    <button class="mobile-menu__panel-back" type="button">
                                        <svg width="7" height="11">
                                            <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg>
                                    </button>
                                    <div class="mobile-menu__panel-title">{{ __('layouts/footer.language') }}</div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item>
                                            <button type="button" class="" data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image">
                                                    <img src="{{ asset('/assets/images/languages/language-1.png') }}" alt="">
                                                </div>
                                                {{ __('layouts/footer.english') }}
                                            </button>
                                        </li>
                                        <li data-mobile-menu-item>
                                            <button type="button" class="" data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image">
                                                    <img src="{{ asset('/assets/images/languages/language-2.png') }}" alt="">
                                                </div>
                                                {{ __('layouts/footer.french') }}
                                            </button>
                                        </li>
                                        <li data-mobile-menu-item>
                                            <button type="button" class="" data-mobile-menu-trigger>
            
                                                <div class="mobile-menu__links-image"><img
                                                        src="{{ asset('/assets/images/languages/language-3.png') }}"
                                                        alt=""></div>{{__('layouts/footer.german')}}
                                            </button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image"><img
                                                        src="{{ asset('/assets/images/languages/language-4.png') }}"
                                                        alt=""></div>{{__('layouts/footer.russian')}}
                                            </button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image"><img
                                                        src="{{ asset('/assets/images/languages/language-5.png') }}"
                                                        alt=""></div>{{__('layouts/footer.italian')}}
                                            </button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu__setting" data-mobile-menu-item>
                        <button class="mobile-menu__setting-button" title="{{ __('layouts/footer.currency') }}" data-mobile-menu-trigger>
                            <span class="mobile-menu__setting-icon mobile-menu__setting-icon--currency">
                                $
                            </span>
                            <span class="mobile-menu__setting-title">{{ __('layouts/footer.us_dollar') }}</span>
                            <span class="mobile-menu__setting-arrow">
                                <svg width="6px" height="9px">
                                    <path d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                </svg>
                            </span>
                        </button>
                        <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                            <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                <div class="mobile-menu__panel-header">
                                    <button class="mobile-menu__panel-back" type="button">
                                        <svg width="7" height="11">
                                            <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg>
                                    </button>
                                    <div class="mobile-menu__panel-title">{{ __('layouts/footer.currency') }}</div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item>
                                            <button type="button" class="" data-mobile-menu-trigger>
                                                €
                                                {{ __('layouts/footer.euro') }}
                                            </button>
                                        </li>
                                        <li data-mobile-menu-item>
                                            <button type="button" class="" data-mobile-menu-trigger>
                                                £
                                                {{ __('layouts/footer.pound_sterling') }}
                                            </button>
                                        </li>
                                        <li data-mobile-menu-item>
                                            <button type="button" class="" data-mobile-menu-trigger>
                                                $
                                                {{ __('layouts/footer.us_dollar') }}
                                            </button>
                                        </li>
                                        <li data-mobile-menu-item>
                                            <button type="button" class="" data-mobile-menu-trigger>
                                                ₽
                                                {{ __('layouts/footer.russian_ruble') }}
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="mobile-menu__divider"></div>
                <div class="mobile-menu__indicators">
                    <a class="mobile-menu__indicator" href="wishlist.html">
                        <span class="mobile-menu__indicator-icon">
                            <svg width="20" height="20">
                                <path d="M14,3c2.2,0,4,1.8,4,4c0,4-5.2,10-8,10S2,11,2,7c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.7,1L10,5.2L11.3,4C12.1,3.4,13,3,14,3 M14,1 c-1.5,0-2.9,0.6-4,1.5C8.9,1.6,7.5,1,6,1C2.7,1,0,3.7,0,7c0,5,6,12,10,12s10-7,10-12C20,3.7,17.3,1,14,1L14,1z" />
                            </svg>
                        </span>
                        <span class="mobile-menu__indicator-title">{{ __('layouts/footer.wishlist') }}</span>
                    </a>
                
                    <a class="mobile-menu__indicator" href="account-dashboard.html">
                        <span class="mobile-menu__indicator-icon">
                            <svg width="20" height="20">
                                <path d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6 c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z" />
                            </svg>
                        </span>
                        <span class="mobile-menu__indicator-title">{{ __('layouts/footer.account') }}</span> </a><a
                        class="mobile-menu__indicator" href="cart.html"><span
                            class="mobile-menu__indicator-icon"><svg width="20" height="20">
                                <circle cx="7" cy="17" r="2" />
                                <circle cx="15" cy="17" r="2" />
                                <path
                                    d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                            </svg> <span class="mobile-menu__indicator-counter">3</span>
                        </span><span class="mobile-menu__indicator-title">{{__('layouts/footer.panier')}}</span>
                    </a><a class="mobile-menu__indicator" href="account-garage.html"><span
                            class="mobile-menu__indicator-icon"><svg width="20" height="20">
                                <path
                                    d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
C15.5,10.2,14,11.3,14,12z" />
                            </svg> </span><span class="mobile-menu__indicator-title">{{__('layouts/footer.garage')}}</span></a></div>
                <div class="mobile-menu__divider"></div>
                <ul class="mobile-menu__links">
              
                    <li data-mobile-menu-item><a href="shop-grid-4-columns-sidebar.html" class=""
                            data-mobile-menu-trigger>{{__('layouts/footer.shop')}} <svg width="7" height="11">
                                <path
                                    d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                            </svg></a>
                        <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                            <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
                                        type="button"><svg width="7" height="11">
                                            <path
                                                d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg></button>
                                    <div class="mobile-menu__panel-title">{{__('layouts/footer.shop')}} </div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item><a href="category.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.category')}}  <svg width="7" height="11">
                                                    <path
                                                        d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                </svg></a>
                                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                    <div class="mobile-menu__panel-header">
                                                        <button class="mobile-menu__panel-back" type="button"><svg
                                                                width="7" height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">
                                                            {{__('layouts/footer.category')}}  </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                   
                                        <li data-mobile-menu-item><a href="product-full.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.product')}} <svg width="7" height="11">
                                                    <path
                                                        d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                </svg></a>
                                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                    <div class="mobile-menu__panel-header">
                                                        <button class="mobile-menu__panel-back" type="button"><svg
                                                                width="7" height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">
                                                            {{__('layouts/footer.product')}} </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </li>
                                        <li data-mobile-menu-item><a href="cart.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.shop')}}</a></li>
                                        <li data-mobile-menu-item><a href="checkout.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.checkout')}} </a></li>
                                        <li data-mobile-menu-item><a href="order-success.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.order_success')}}</a>
                                        </li>
                                        <li data-mobile-menu-item><a href="wishlist.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.wishlist')}} </a></li>
                                        <li data-mobile-menu-item><a href="compare.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.compare')}} </a></li>
                                        <li data-mobile-menu-item><a href="track-order.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.track_order')}} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-mobile-menu-item><a href="blog-classic-right-sidebar.html" class=""
                            data-mobile-menu-trigger>{{__('layouts/footer.blog')}} </a>
                        
                    </li>
                    <li data-mobile-menu-item><a href="account-login.html" class=""
                            data-mobile-menu-trigger>{{__('layouts/footer.account')}} 
                            <svg width="7" height="11">
                                <path
                                    d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                            </svg></a>
                        <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                            <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
                                        type="button"><svg width="7" height="11">
                                            <path
                                                d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg></button>
                                    <div class="mobile-menu__panel-title">{{__('layouts/footer.account')}} </div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item><a href="account-login.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.login_registershop')}} </a></li>
                                        <li data-mobile-menu-item><a href="account-dashboard.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.dashboard')}} </a></li>
                                        <li data-mobile-menu-item><a href="account-garage.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.garage')}} </a></li>
                                        <li data-mobile-menu-item><a href="account-profile.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.edit_profile')}} </a>
                                        </li>
                                        <li data-mobile-menu-item><a href="account-orders.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.order_history')}} </a>
                                        </li>
                                        <li data-mobile-menu-item><a href="account-order-details.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.order_details')}} </a>
                                        </li>
                                        <li data-mobile-menu-item><a href="account-addresses.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.address_book')}} </a>
                                        </li>
                                        <li data-mobile-menu-item><a href="account-edit-address.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.edit_address')}} </a>
                                        </li>
                                        <li data-mobile-menu-item><a href="account-password.html" class=""
                                                data-mobile-menu-trigger>{{__('layouts/footer.change_password')}} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-mobile-menu-item><a href="about-us.html" class="" data-mobile-menu-trigger>{{__('layouts/footer.pages')}} 
                            <svg width="7" height="11">
                                <path
                                    d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                            </svg></a>
                    
                    </li>
                    <li data-mobile-menu-item><a
                            href="https://themeforest.net/item/redparts-auto-parts-html-template/24735474"
                            class="highlight" target="_blank" data-mobile-menu-trigger>{{__('layouts/footer.buy_theme')}} </a></li>
                </ul>
                <div class="mobile-menu__spring"></div>
                <div class="mobile-menu__divider"></div><a class="mobile-menu__contacts" href="#">
                    <div class="mobile-menu__contacts-subtitle">{{__('layouts/footer.free_call')}}  24/7</div>
                    <div class="mobile-menu__contacts-title">800 060-0730</div>
                </a>
            </div>
        </div>
    </div>
</div><!-- mobile-menu / end -->
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>
<!-- quickview-modal / end -->
<!-- add-vehicle-modal -->
<div id="add-vehicle-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
        <div class="modal-content"><button type="button" class="vehicle-picker-modal__close"><svg width="12"
                    height="12">
                    <path
                        d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
C11.2,9.8,11.2,10.4,10.8,10.8z" />
                </svg></button>
                <div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active">
                    <div class="vehicle-picker-modal__title card-title">{{ __('layouts/footer.add_vehicle') }}</div>
                    <div class="vehicle-form vehicle-form--layout--modal">
                        <div class="vehicle-form__item vehicle-form__item--select">
                            <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.') }}">
                                <option value="none">{{ __('layouts/footer.select_year') }}</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select>
                        </div>
                        <div class="vehicle-form__item vehicle-form__item--select">
                            <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.select_brand') }}" disabled="disabled">
                                <option value="none">{{ __('layouts/footer.select_brand') }}</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Ferrari</option>
                                <option>Ford</option>
                                <option>KIA</option>
                                <option>Nissan</option>
                                <option>Tesla</option>
                                <option>Toyota</option>
                            </select>
                        </div>
                        <div class="vehicle-form__item vehicle-form__item--select">
                            <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.select_model') }}" disabled="disabled">
                                <option value="none">{{ __('layouts/footer.select_model') }}</option>
                                <option>Explorer</option>
                                <option>Focus S</option>
                                <option>Fusion SE</option>
                                <option>Mustang</option>
                            </select>
                        </div>
                        <div class="vehicle-form__item vehicle-form__item--select">
                            <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.select_engine') }}" disabled="disabled">
                                <option value="none">{{ __('layouts/footer.select_engine') }}</option>
                                <option>Gas 1.6L 125 hp AT/L4</option>
                                <option>Diesel 2.5L 200 hp AT/L5</option>
                                <option>Diesel 3.0L 250 hp MT/L5</option>
                            </select>
                        </div>
                        <div class="vehicle-form__divider">{{ __('or') }}</div>
                        <div class="vehicle-form__item">
                            <input type="text" class="form-control" placeholder="{{ __('layouts/footer.enter_vin') }}" aria-label="{{ __('layouts/footer.enter_vin') }}">
                        </div>
                    </div>
                    <div class="vehicle-picker-modal__actions">
                        <button type="button" class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">{{ __('layouts/footer.cancel') }}</button>
                        <button type="button" class="btn btn-sm btn-primary">{{ __('layouts/footer.add_vehicle_button') }}</button>
                    </div>
                </div>
                
        </div>
    </div>
</div><!-- add-vehicle-modal / end -->
<!-- vehicle-picker-modal -->
<div id="vehicle-picker-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
        <div class="modal-content"><button type="button" class="vehicle-picker-modal__close"><svg width="12"
                    height="12">
                    <path
                        d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
C11.2,9.8,11.2,10.4,10.8,10.8z" />
                </svg></button>
                <div class="vehicle-picker-modal__title card-title">{{ __('layouts/footer.select_vehicle') }}</div>
                <div class="vehicle-picker-modal__text">{{ __('layouts/footer.select_vehicle_text') }}</div>
                <div class="vehicles-list">
                    <div class="vehicles-list__body">
                        <label class="vehicles-list__item">
                            <span class="vehicles-list__item-radio input-radio">
                                <span class="input-radio__body">
                                    <input class="input-radio__input" name="header-vehicle" type="radio">
                                    <span class="input-radio__circle"></span>
                                </span>
                            </span>
                            <span class="vehicles-list__item-info">
                                <span class="vehicles-list__item-name">{{ __('layouts/footer.ford_focus') }}</span>
                                <span class="vehicles-list__item-details">{{ __('layouts/footer.engine_details') }} 2.0L 1742DA L4 FI Turbo</span>
                            </span>
                            <button type="button" class="vehicles-list__item-remove">
                                <svg width="16" height="16">
                                    <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                </svg>
                            </button>
                        </label>
                        <label class="vehicles-list__item">
                            <span class="vehicles-list__item-radio input-radio">
                                <span class="input-radio__body">
                                    <input class="input-radio__input" name="header-vehicle" type="radio">
                                    <span class="input-radio__circle"></span>
                                </span>
                            </span>
                            <span class="vehicles-list__item-info">
                                <span class="vehicles-list__item-name">{{ __('layouts/footer.audi_q7') }}</span>
                                <span class="vehicles-list__item-details">{{ __('layouts/footer.engine_details') }} 3.0L 5626CC L6 QK</span>
                            </span>
                            <button type="button" class="vehicles-list__item-remove">
                                <svg width="16" height="16">
                                    <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                </svg>
                            </button>
                        </label>
                    </div>
                </div>
                
                <div class="vehicle-picker-modal__actions">
                    <button type="button" class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">{{ __('layouts/footer.translations.cancel') }}</button>
                    <button type="button" class="btn btn-sm btn-primary" data-to-panel="form">{{ __('layouts/footer.translations.add_vehicle') }}</button>
                </div>
                
            </div>
            <div class="vehicle-picker-modal__panel" data-panel="form">
                <div class="vehicle-picker-modal__title card-title">{{ __('layouts/footer.add_vehicle') }}</div>
                <div class="vehicle-form vehicle-form--layout--modal">
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.select_year') }}">
                            <option value="none">{{ __('layouts/footer.select_year') }}</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.select_brand') }}" disabled="disabled">
                            <option value="none">{{ __('layouts/footer.select_brand') }}</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ferrari</option>
                            <option>Ford</option>
                            <option>KIA</option>
                            <option>Nissan</option>
                            <option>Tesla</option>
                            <option>Toyota</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.select_model') }}" disabled="disabled">
                            <option value="none">{{ __('layouts/footer.select_model') }}</option>
                            <option>Explorer</option>
                            <option>Focus S</option>
                            <option>Fusion SE</option>
                            <option>Mustang</option>
                        </select>
                    </div>
                    <div class="vehicle-form__item vehicle-form__item--select">
                        <select class="form-control form-control-select2" aria-label="{{ __('layouts/footer.select_engine') }}" disabled="disabled">
                            <option value="none">{{ __('layouts/footer.select_engine') }}</option>
                            <option>Gas 1.6L 125 hp AT/L4</option>
                            <option>Diesel 2.5L 200 hp AT/L5</option>
                            <option>Diesel 3.0L 250 hp MT/L5</option>
                        </select>
                    </div>
                    <div class="vehicle-form__divider">{{ __('or') }}</div>
                    <div class="vehicle-form__item">
                        <input type="text" class="form-control" placeholder="{{ __('layouts/footer.enter_vin_number') }}" aria-label="{{ __('layouts/footer.enter_vin_number') }}">
                    </div>
                </div>
                <div class="vehicle-picker-modal__actions">
                    <button type="button" class="btn btn-sm btn-secondary" data-to-panel="list">{{ __('layouts/footer.back_to_list') }}</button>
                    <button type="button" class="btn btn-sm btn-primary">{{ __('layouts/footer.add_vehicle_button') }}</button>
                </div>
            </div>
            
        </div>
    </div>
</div><!-- vehicle-picker-modal / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                    title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button
                    class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div><!-- photoswipe / end -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
@livewireStyles
   
<script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/js/number.js') }}"></script>
<script src="{{ asset('/assets/js/main.js') }}"></script>

@yield('javascript')

@livewireScripts
