@extends('layouts._master')
@section('content')


<!-- site__body -->
<div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb__list">
                        <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                        <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a
                                href="index.html" class="breadcrumb__item-link">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--parent"><a href="#"
                                class="breadcrumb__item-link">Breadcrumb</a></li>
                        <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                            aria-current="page"><span class="breadcrumb__item-link">Current Page</span></li>
                        <li class="breadcrumb__title-safe-area" role="presentation"></li>
                    </ol>
                </nav>
                <h1 class="block-header__title">Tesults: {{count($pieces)}} Pieces</h1>
            </div>
        </div>
    </div>
    <div class="block-split">
        <div class="sidebar sidebar--offcanvas--always">
            <div class="sidebar__backdrop"></div>
            <div class="sidebar__body">
                <div class="sidebar__header">
                    <div class="sidebar__title">Filters</div>
                    <button class="sidebar__close"
                        type="button"><svg width="12" height="12">
                            <path
                                d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
                                c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
                                C11.2,9.8,11.2,10.4,10.8,10.8z" />
                        </svg>
                    </button>
                </div>
                <div class="sidebar__content">
                    <div class="widget widget-filters widget-filters--offcanvas--always" data-collapse
                        data-collapse-opened-class="filter--opened">
                        <div class="widget__header widget-filters__header">
                            <h4>Filters</h4>
                        </div>
                        <div class="widget-filters__list">
                            <div class="widget-filters__item">
                                <div class="filter filter--opened" data-collapse-item>
                                    <button type="button"
                                        class="filter__title" data-collapse-trigger>Categories 
                                        <span class="filter__arrow">
                                            <svg width="12px" height="7px">
                                                <path
                                                    d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="filter__body" data-collapse-content>
                                        <div class="filter__container">
                                            <div class="filter-categories">
                                                <ul class="filter-categories__list">
                                                    <li
                                                        class="filter-categories__item filter-categories__item--parent">
                                                        <span class="filter-categories__arrow"><svg
                                                                width="6" height="9">
                                                                <path
                                                                    d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
                                                                    C6.1,7.8,6.1,8.4,5.7,8.7z" />
                                                            </svg> </span><a href="#">Construction &
                                                            Repair</a>
                                                        <div class="filter-categories__counter">254</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--parent">
                                                        <span class="filter-categories__arrow"><svg
                                                                width="6" height="9">
                                                                <path
                                                                    d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
                                                                    C6.1,7.8,6.1,8.4,5.7,8.7z" />
                                                            </svg> </span><a href="#">Instruments</a>
                                                        <div class="filter-categories__counter">75</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--current">
                                                        <a href="#">Power Tools</a>
                                                        <div class="filter-categories__counter">21</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Drills & Mixers</a>
                                                        <div class="filter-categories__counter">15</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Cordless Screwdrivers</a>
                                                        <div class="filter-categories__counter">2</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Screwdrivers</a>
                                                        <div class="filter-categories__counter">30</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Wrenches</a>
                                                        <div class="filter-categories__counter">7</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Grinding Machines</a>
                                                        <div class="filter-categories__counter">5</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Milling Cutters</a>
                                                        <div class="filter-categories__counter">2</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Electric Spray Guns</a>
                                                        <div class="filter-categories__counter">9</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Jigsaws</a>
                                                        <div class="filter-categories__counter">4</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Jackhammers</a>
                                                        <div class="filter-categories__counter">0</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Planers</a>
                                                        <div class="filter-categories__counter">12</div>
                                                    </li>
                                                    <li
                                                        class="filter-categories__item filter-categories__item--child">
                                                        <a href="#">Glue Guns</a>
                                                        <div class="filter-categories__counter">7</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget-filters__item">
                                <div class="filter filter--opened" data-collapse-item><button type="button"
                                        class="filter__title" data-collapse-trigger>Price <span
                                            class="filter__arrow"><svg width="12px" height="7px">
                                                <path
                                                    d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
                                            </svg></span></button>
                                    <div class="filter__body" data-collapse-content>
                                        <div class="filter__container">
                                            <div class="filter-price" data-min="500" data-max="1500"
                                                data-from="590" data-to="1000">
                                                <div class="filter-price__slider"></div>
                                                <div class="filter-price__title-button">
                                                    <div class="filter-price__title">$<span
                                                            class="filter-price__min-value"></span> – $<span
                                                            class="filter-price__max-value"></span></div>
                                                    <button type="button"
                                                        class="btn btn-xs btn-secondary filter-price__button">Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget-filters__item">
                                <div class="filter filter--opened" data-collapse-item><button type="button"
                                        class="filter__title" data-collapse-trigger>Brand <span
                                            class="filter__arrow"><svg width="12px" height="7px">
                                                <path
                                                    d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
                                            </svg></span></button>
                                    <div class="filter__body" data-collapse-content>
                                        <div class="filter__container">
                                            <div class="filter-list">
                                                <div class="filter-list__list">
                                                    <label class="filter-list__item"><span
                                                            class="filter-list__input input-radio"><span
                                                                class="input-radio__body"><input
                                                                    class="input-radio__input"
                                                                    name="filter_radio" type="radio">
                                                                <span class="input-radio__circle"></span>
                                                            </span></span><span
                                                            class="filter-list__title">Wakita </span><span
                                                            class="filter-list__counter">7</span></label>

                                                    <label class="filter-list__item"><span
                                                            class="filter-list__input input-radio"><span
                                                                class="input-radio__body"><input
                                                                    class="input-radio__input"
                                                                    name="filter_radio" type="radio">
                                                                <span class="input-radio__circle"></span>
                                                            </span></span><span
                                                            class="filter-list__title">Zosch </span><span
                                                            class="filter-list__counter">42</span></label>

                                                    <label class="filter-list__item"><span
                                                            class="filter-list__input input-radio"><span
                                                                class="input-radio__body"><input
                                                                    class="input-radio__input"
                                                                    name="filter_radio" type="radio">
                                                                <span class="input-radio__circle"></span>
                                                            </span></span><span
                                                            class="filter-list__title">Mitasia </span><span
                                                            class="filter-list__counter">1</span></label>
                                                    <label class="filter-list__item"><span
                                                            class="filter-list__input input-radio"><span
                                                                class="input-radio__body"><input
                                                                    class="input-radio__input"
                                                                    name="filter_radio" type="radio">
                                                                <span class="input-radio__circle"></span>
                                                            </span></span><span
                                                            class="filter-list__title">Metaggo </span><span
                                                            class="filter-list__counter">25</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-filters__actions d-flex"><button
                                class="btn btn-primary btn-sm">Filter</button> <button
                                class="btn btn-secondary btn-sm">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="block-split__row row no-gutters">
                <div class="block-split__item block-split__item-content col-auto">
                    <div class="block">
                        <div class="products-view">
                            <div class="products-view__options view-options view-options--offcanvas--always">
                                <div class="view-options__body"><button type="button"
                                        class="view-options__filters-button filters-button"><span
                                            class="filters-button__icon"><svg width="16"
                                                height="16">
                                                <path
                                                    d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2
                                                    C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2
                                                    C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3
                                                    C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z" />
                                            </svg> </span><span class="filters-button__title">Filters</span>
                                        <span class="filters-button__counter">3</span></button>
                                    <div class="view-options__layout layout-switcher">
                                        <div class="layout-switcher__list"><button type="button"
                                                class="layout-switcher__button layout-switcher__button--active"
                                                data-layout="grid" data-with-features="false"><svg
                                                    width="16" height="16">
                                                    <path
                                                        d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
                                                        H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
                                                        C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
                                                        C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z" />
                                                </svg></button> <button type="button"
                                                class="layout-switcher__button" data-layout="grid"
                                                data-with-features="true"><svg width="16"
                                                    height="16">
                                                    <path
                                                        d="M16,0.8v14.4c0,0.4-0.4,0.8-0.8,0.8H9.8C9.4,16,9,15.6,9,15.2V0.8C9,0.4,9.4,0,9.8,0l5.4,0C15.6,0,16,0.4,16,0.8z M7,0.8
                                                        4.4C7,15.6,6.6,16,6.2,16H0.8C0.4,16,0,15.6,0,15.2L0,0.8C0,0.4,0.4,0,0.8,0l5.4,0C6.6,0,7,0.4,7,0.8z" />
                                                </svg></button> <button type="button"
                                                class="layout-switcher__button" data-layout="list"
                                                data-with-features="false"><svg width="16"
                                                    height="16">
                                                    <path
                                                        d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h14.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
                                                        .8C0.4,7,0,6.6,0,6.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z" />
                                                </svg></button> <button type="button"
                                                class="layout-switcher__button" data-layout="table"
                                                data-with-features="false"><svg width="16"
                                                    height="16">
                                                    <path
                                                        d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2v-2.4C0,12.4,0.4,12,0.8,12h14.4c0.4,0,0.8,0.4,0.8,0.8v2.4C16,15.6,15.6,16,15.2,16z
                                                        M15.2,10H0.8C0.4,10,0,9.6,0,9.2V6.8C0,6.4,0.4,6,0.8,6h14.4C15.6,6,16,6.4,16,6.8v2.4C16,9.6,15.6,10,15.2,10z M15.2,4H0.8
                                                        C0.4,4,0,3.6,0,3.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v2.4C16,3.6,15.6,4,15.2,4z" />
                                                </svg></button></div>
                                    </div>
                                    {{-- <div class="view-options__legend">Showing {{count($pieces)}} of {{count($allPieces)}} pieces</div> --}}
                                    <div class="view-options__spring"></div>

                                    {{-- <div class="view-options__select"><label
                                            for="view-option-sort">Sort:</label> <select
                                            id="view-option-sort" class="form-control form-control-sm"
                                            name="">
                                            <option value="">Price</option>
                                        </select>
                                    </div>
                                    
                                    <div class="view-options__select"><label
                                            for="view-option-limit">Show:</label> <select
                                            id="view-option-limit" class="form-control form-control-sm"
                                            name="">
                                            <option value="">16</option>
                                        </select>
                                    </div> --}}
                                    <div class="view-options__select">Showing {{count($pieces)}} of {{count($allPieces)}} pieces
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="products-view__list products-list products-list--grid--4"
                                data-layout="grid" data-with-features="false">
                                <div class="products-list__head">
                                    <div class="products-list__column products-list__column--image">Image</div>
                                    <div class="products-list__column products-list__column--product">Piece</div>
                                    <div class="products-list__column products-list__column--rating">Rating</div>
                                    <div class="products-list__column products-list__column--price">Price</div>
                                </div>
                                <div class="products-list__content">
                                    @foreach($pieces as $piece)
                                    <div class="products-list__item">
                                        <div class="product-card">
                                                {{-- like --}}
                                                @livewire('like', ['piece' => $piece->id])
                                                {{-- end like --}}
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
                                                        the piece is active
                                                    </div>
                                                    <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
                                                        title="The&#x20;Piece&#x20;is&#x20;Active&#x20;">
                                                    </div>
                                                    </div>

                                                    @else
                                                    <div class="status-badge__body bg-danger">
                                                    <div class="status-badge__icon text-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                        </svg>
                                                    </div>
                                                    
                                                    <div class="status-badge__text text-light">
                                                        the piece is not active
                                                    </div>
                                                    <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
                                                        title="The&#x20;Piece&#x20;is&#x20;Not&#x20;Active&#x20;">
                                                    </div>

                                                </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                
                                                <div class="product-card__name">
                                                    <div>
                                                        <a href="{{ route('piece.show-piece', $piece->id)}}">{{$piece->name}}</a>
                                                        </div>
                                                </div>
                                                <div class="product-card__rating">
                                                    <div class="rating product-card__rating-stars">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active">
                                                            </div>
                                                            <div class="rating__star rating__star--active">
                                                            </div>
                                                            <div class="rating__star rating__star--active">
                                                            </div>
                                                            <div class="rating__star rating__star--active">
                                                            </div>
                                                            <div class="rating__star rating__star--active">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__rating-label">5 on 22 reviews
                                                    </div>
                                                </div>
                                                <div class="product-card__features">
                                                    <ul>
                                                        <li>State: <span>{{$piece->etat->name}}</span></li>
                                                        <li>Engine: <span>{{$piece->motorization->name}}</span></li>
                                                        <li>Serial Number: <span>{{$piece->serial_number}}</span></li>
                                                        <li>Speed: <span>{{$piece->speed_index}} Km/h</span></li>
                                                        <li>Weight: <span>{{$piece->load_index}} Kg</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-card__footer">
                                                <div class="product-card__prices">
                                                    <div
                                                        class="product-card__price product-card__price--current">
                                                        {{$piece->price}} MAD</div>
                                                </div><button class="product-card__addtocart-icon"
                                                    type="button" aria-label="Add to cart"><svg
                                                        width="20" height="20">
                                                        <circle cx="7" cy="17"
                                                            r="2" />
                                                        <circle cx="15" cy="17"
                                                            r="2" />
                                                        <path
                                                            d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
                                                            V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
                                                            C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                                    </svg></button> <button
                                                    class="product-card__addtocart-full" type="button">Add
                                                    to cart</button> 
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            {{-- <div class="mt-3">
                                {{$pieces->links()}}
                            </div> --}}
                            {{-- <div class="products-view__pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a
                                                class="page-link page-link--with-arrow" href="#"
                                                aria-label="Previous"><span
                                                    class="page-link__arrow page-link__arrow--left"
                                                    aria-hidden="true"><svg width="7" height="11">
                                                        <path
                                                            d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                    </svg></span></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item active" aria-current="page"><span
                                                class="page-link">2 <span
                                                    class="sr-only">(current)</span></span></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item page-item--dots">
                                            <div class="pagination__dots"></div>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">9</a>
                                        </li>
                                        <li class="page-item"><a class="page-link page-link--with-arrow"
                                                href="#" aria-label="Next"><span
                                                    class="page-link__arrow page-link__arrow--right"
                                                    aria-hidden="true"><svg width="7" height="11">
                                                        <path
                                                            d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
                                                            C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg></span></a></li>
                                    </ul>
                                </nav>
                                <div class="products-view__pagination-legend">Showing 6 of 98 products</div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
    </div>
</div>
<!-- site__body / end -->
@endsection