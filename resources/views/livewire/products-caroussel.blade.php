<div>
    <div class="block block-products-carousel" data-layout="grid-5">
        <div class="container">
            <div class="section-header">
                <div class="section-header__body">
                    <h2 class="section-header__title">{{ __('pages/client/home.featured_products') }}</h2>
                    <div class="section-header__spring"></div>
                    <ul class="section-header__groups">
                        <li class="section-header__groups-item">
                            <button type="button"
                                class="section-header__groups-button section-header__groups-button--active">
                                {{ __('pages/client/home.all') }}
                            </button>
                        </li>
                        <li class="section-header__groups-item">
                            <button type="button" class="section-header__groups-button">
                                {{ __('pages/client/home.power_tools') }}
                            </button>
                        </li>
                        <li class="section-header__groups-item">
                            <button type="button" class="section-header__groups-button">
                                {{ __('pages/client/home.hand_tools') }}
                            </button>
                        </li>
                        <li class="section-header__groups-item">
                            <button type="button" class="section-header__groups-button">
                                {{ __('pages/client/home.plumbing') }}
                            </button>
                        </li>
                    </ul>
                    <div class="section-header__arrows">
                        <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                            <button class="arrow__button" type="button">
                                <svg width="7" height="11">
                                    <path
                                        d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                </svg>
                            </button>
                        </div>
                        <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                            <button class="arrow__button" type="button">
                                <svg width="7" height="11">
                                    <path
                                        d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="section-header__divider"></div>
                </div>
            </div>
            <div class="block-products-carousel__carousel">
                <div class="block-products-carousel__carousel-loader"></div>
                <div class="owl-carousel">
                    @foreach($pieces as $piece)
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--layout--grid">
                                {{-- <div class="product-card__actions-list"> --}}
                                    {{-- like --}}
                                    @livewire('like', ['piece' => $piece->id])
                                    {{-- end like --}}
                                {{-- </div> --}}
                                <div class="product-card__image">
                                    <div class="image image--type--product">
                                        <a href="{{ route('piece.show-piece', $piece->id)}}" class="image__body"><img class="image__tag"
                                                src="{{asset('/storage/'.$piece->images[0])}}" alt="" /></a>
                                    </div>
                                    <div
                                        class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">

                                        @if ($piece->active)
                                        <div class="status-badge__body">
                                        <div class="status-badge__icon">
                                            <svg width="13" height="13">
                                                <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                            </svg>
                                        </div>
                                        
                                        <div class="status-badge__text">
                                            In Stock
                                        </div>
                                        <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
                                            title="The&#x20;Piece&#x20;is&#x20;Active&#x20;">
                                        </div>
                                        </div>

                                        @else
                                        <div class="status-badge__body bg-warning">
                                        <div class="status-badge__icon text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </div>
                                        
                                        <div class="status-badge__text text-light">
                                            Out of Stock
                                        </div>
                                        <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
                                            title="The&#x20;Piece&#x20;is&#x20;Not&#x20;Active&#x20;">
                                        </div>
                                        </div>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__meta">
                                        {{-- <span class="product-card__meta-title">SKU:</span>
                                        140-10440-B --}}
                                    </div>
                                    <div class="product-card__name">
                                        <div>
                                            {{-- <div class="product-card__badges">
                                                <div class="tag-badge tag-badge--sale">sale</div>
                                                <div class="tag-badge tag-badge--new">new</div>
                                                <div class="tag-badge tag-badge--hot">hot</div>
                                            </div> --}}
                                            <a href="{{ route('piece.show-piece', $piece->id)}}">{{$piece->name}}</a>
                                        </div>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="rating product-card__rating-stars">
                                            <div class="rating__body">
                                                <div class="rating__star rating__star--active"></div>
                                                <div class="rating__star rating__star--active"></div>
                                                <div class="rating__star rating__star--active"></div>
                                                <div class="rating__star rating__star--active"></div>
                                                <div class="rating__star"></div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-label">
                                            4 on 3 reviews
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card__footer">
                                    <div class="product-card__prices">
                                        <div class="product-card__price product-card__price--current">
                                            {{$piece->price}} MAD
                                        </div>
                                    </div>
                                    <button class="product-card__addtocart-icon" type="button"
                                        aria-label="Add to cart">
                                        <svg width="20" height="20">
                                            <circle cx="7" cy="17" r="2" />
                                            <circle cx="15" cy="17" r="2" />
                                            <path
                                                d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
