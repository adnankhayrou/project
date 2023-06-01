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
                                <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a href="index.html" class="breadcrumb__item-link">{{ __('pages/client/compare.home') }}</a></li>
                                <li class="breadcrumb__item breadcrumb__item--parent"><a href="#" class="breadcrumb__item-link">{{ __('pages/client/compare.parent') }}</a></li>
                                <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">{{ __('pages/client/compare.current') }}</span></li>
                                <li class="breadcrumb__title-safe-area" role="presentation"></li>
                            </ol>
                        </nav>
                        <h1 class="block-header__title">{{ __('pages/client/compare.title') }}</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="compare card">
                        <div class="compare__options-list">
                            <div class="compare__option">
                                <div class="compare__option-label">{{ __('pages/client/compare.showLabel') }}</div>
                                <div class="compare__option-control">
                                    <div class="button-toggle">
                                        <div class="button-toggle__list">
                                            <label class="button-toggle__item">
                                                <input type="radio" class="button-toggle__input" name="compare-filter" checked="checked">
                                                <span class="button-toggle__button">{{ __('pages/client/compare.showAll') }}</span>
                                            </label>
                                            <label class="button-toggle__item">
                                                <input type="radio" class="button-toggle__input" name="compare-filter">
                                                <span class="button-toggle__button">{{ __('pages/client/compare.showDifferent') }}</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compare__option">
                                <div class="compare__option-control">
                                    <button type="button" class="btn btn-secondary btn-xs">{{ __('pages/client/compare.clearList') }}</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="compare__table compare-table">
                                <tbody>
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.product') }}</th>
                                        <td class="compare-table__column compare-table__column--product"><a href="product-full.html"
                                                class="compare-table__product">
                                                <div class="compare-table__product-image image image--type--product">
                                                    <div class="image__body"><img class="image__tag"
                                                            src="{{ asset('/assets/images/products/product-1-150x150.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="compare-table__product-name">{{ __('pages/client/compare.productName1') }}</div>
                                            </a></td>
                                        <td class="compare-table__column compare-table__column--product"><a href="product-full.html"
                                                class="compare-table__product">
                                                <div class="compare-table__product-image image image--type--product">
                                                    <div class="image__body"><img class="image__tag"
                                                            src="{{ asset('/assets/images/products/product-2-150x150.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="compare-table__product-name">{{ __('pages/client/compare.productName2') }}</div>
                                            </a></td>
                                        <td class="compare-table__column compare-table__column--product"><a href="product-full.html"
                                                class="compare-table__product">
                                                <div class="compare-table__product-image image image--type--product">
                                                    <div class="image__body"><img class="image__tag"
                                                            src="{{ asset('/assets/images/products/product-3-150x150.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="compare-table__product-name">{{ __('pages/client/compare.productName3') }}</div>
                                            </a></td>
                                        <td class="compare-table__column compare-table__column--product"><a href="product-full.html"
                                                class="compare-table__product">
                                                <div class="compare-table__product-image image image--type--product">
                                                    <div class="image__body"><img class="image__tag"
                                                            src="{{ asset('/assets/images/products/product-4-150x150.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="compare-table__product-name">{{ __('pages/client/compare.productName4') }}</div>
                                            </a></td>
                                        <td class="compare-table__column compare-table__column--product"><a href="product-full.html"
                                                class="compare-table__product">
                                                <div class="compare-table__product-image image image--type--product">
                                                    <div class="image__body"><img class="image__tag"
                                                            src="{{ asset('/assets/images/products/product-5-150x150.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="compare-table__product-name">{{ __('pages/client/compare.productName5') }}</div>
                                            </a></td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.rating') }}</th>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="compare-table__rating">
                                                <div class="compare-table__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="compare-table__rating-title">{{ __('pages/client/compare.basedOnReviews', ['count' => 3]) }}</div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="compare-table__rating">
                                                <div class="compare-table__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="compare-table__rating-title">{{ __('pages/client/compare.basedOnReviews', ['count' => 22]) }}</div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="compare-table__rating">
                                                <div class="compare-table__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star"></div>
                                                            <div class="rating__star"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="compare-table__rating-title">{{ __('pages/client/compare.basedOnReviews', ['count' => 14]) }}</div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="compare-table__rating">
                                                <div class="compare-table__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="compare-table__rating-title">{{ __('pages/client/compare.basedOnReviews', ['count' => 26]) }}</div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="compare-table__rating">
                                                <div class="compare-table__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="compare-table__rating-title">{{ __('pages/client/compare.basedOnReviews', ['count' => 9]) }}</div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.availability') }}</th>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="status-badge status-badge--style--success status-badge--has-text">
                                                <div class="status-badge__body">
                                                    <div class="status-badge__text">{{ __('pages/client/compare.inStock') }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="status-badge status-badge--style--success status-badge--has-text">
                                                <div class="status-badge__body">
                                                    <div class="status-badge__text">{{ __('pages/client/compare.inStock') }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="status-badge status-badge--style--success status-badge--has-text">
                                                <div class="status-badge__body">
                                                    <div class="status-badge__text">{{ __('pages/client/compare.inStock') }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="status-badge status-badge--style--success status-badge--has-text">
                                                <div class="status-badge__body">
                                                    <div class="status-badge__text">{{ __('pages/client/compare.inStock') }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">
                                            <div class="status-badge status-badge--style--success status-badge--has-text">
                                                <div class="status-badge__body">
                                                    <div class="status-badge__text">{{ __('pages/client/compare.inStock') }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.price') }}</th>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.$19.00') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.$224.00') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.$349.00') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.$589.00') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.$749.00') }}</td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.addToCart') }}</th>
                                        <td class="compare-table__column compare-table__column--product"><button type="button" class="btn btn-sm btn-primary">{{ __('pages/client/compare.addToCart') }}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button type="button" class="btn btn-sm btn-primary">{{ __('pages/client/compare.addToCart') }}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button type="button" class="btn btn-sm btn-primary">{{ __('pages/client/compare.addToCart') }}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button type="button" class="btn btn-sm btn-primary">{{ __('pages/client/compare.addToCart') }}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button type="button" class="btn btn-sm btn-primary">{{ __('pages/client/compare.addToCart') }}</button></td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.sku') }}</th>
                                        <td class="compare-table__column compare-table__column--product">140-10440-B</td>
                                        <td class="compare-table__column compare-table__column--product">573-23743-C</td>
                                        <td class="compare-table__column compare-table__column--product">009-50078-Z</td>
                                        <td class="compare-table__column compare-table__column--product">A43-44328-B</td>
                                        <td class="compare-table__column compare-table__column--product">729-51203-B</td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.weight') }}</th>
                                        <td class="compare-table__column compare-table__column--product">0.1 Kg</td>
                                        <td class="compare-table__column compare-table__column--product">2.3 Kg</td>
                                        <td class="compare-table__column compare-table__column--product">1.4 Kg</
                                        </td>
                                        <td class="compare-table__column compare-table__column--product">5 Kg</td>
                                        <td class="compare-table__column compare-table__column--product">2 Kg</td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{ __('pages/client/compare.color') }}</th>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.gray') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.red') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.black') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.black') }}</td>
                                        <td class="compare-table__column compare-table__column--product">{{ __('pages/client/compare.metallic') }}</td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                                                        
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header">{{__('pages/client/compare.material')}}</th>
                                        <td class="compare-table__column compare-table__column--product">{{__('pages/client/compare.thorium')}}</td>
                                        <td class="compare-table__column compare-table__column--product">{{__('pages/client/compare.steel')}}</td>
                                        <td class="compare-table__column compare-table__column--product">{{__('pages/client/compare.plastic')}}</td>
                                        <td class="compare-table__column compare-table__column--product">{{__('pages/client/compare.aluminium')}}</td>
                                        <td class="compare-table__column compare-table__column--product">{{__('pages/client/compare.aluminium')}}</td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                    
                                    <tr class="compare-table__row">
                                        <th class="compare-table__column compare-table__column--header"></th>
                                        <td class="compare-table__column compare-table__column--product"><button
                                                type="button" class="btn btn-sm btn-secondary">{{__('pages/client/compare.remove')}}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button
                                                type="button" class="btn btn-sm btn-secondary">{{__('pages/client/compare.remove')}}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button
                                                type="button" class="btn btn-sm btn-secondary">{{__('pages/client/compare.remove')}}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button
                                                type="button" class="btn btn-sm btn-secondary">{{__('pages/client/compare.remove')}}</button></td>
                                        <td class="compare-table__column compare-table__column--product"><button
                                                type="button" class="btn btn-sm btn-secondary">{{__('pages/client/compare.remove')}}</button></td>
                                        <td class="compare-table__column compare-table__column--fake"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
		@stop
