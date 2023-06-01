{{-- The whole world belongs to you. --}}
<div class="wishlist">
    <table class="wishlist__table">
        <thead class="wishlist__head">
            <tr class="wishlist__row wishlist__row--head items-center text-start">
                <th class="wishlist__column wishlist__column--head wishlist__column--image">Image</th>
                <th class="wishlist__column wishlist__column--head wishlist__column--product">Piece</th>
                <th class="wishlist__column wishlist__column--head wishlist__column--stock">Status</th>
                <th class="wishlist__column wishlist__column--head wishlist__column--price text-center">Price</th>
                <th class="wishlist__column wishlist__column--head wishlist__column--button text-center">Add</th>
                {{-- <th class="wishlist__column wishlist__column--head wishlist__column--remove"></th> --}}
            </tr>
        </thead>
        <tbody class="wishlist__body">
            {{-- @php
                $likedPieces = App\Models\Like::where('user_id',1)->get();
            @endphp --}}

            @foreach ($pieces as $piece)
                @if($piece->likes->contains('user_id',1))
                    <tr class="wishlist__row wishlist__row--body">
                        <td class="wishlist__column wishlist__column--body wishlist__column--image">
                            <div class="image image--type--product">
                                <a href="{{ route('piece.show-piece',$piece->id) }}" class="image__body">
                                    @if ($piece->images)
                                        <img class="rounded border image__tag" src="{{asset('/storage/'.$piece->images[0])}}">
                                    @else
                                        <span>...</span>        
                                    @endif
                                </a>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--body wishlist__column--product">
                            <div class="wishlist__product-name">
                                <a href="{{ route('piece.show-piece',$piece->id) }}">
                                    {{$piece->name}}
                                </a>
                            </div>
                            <div class="wishlist__product-rating">
                                <div class="wishlist__product-rating-stars">
                                    <div class="rating">
                                        <div class="rating__body">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= round($piece->rates->avg('rate')))
                                                    <div class="rating__star rating__star--active"></div>
                                                @else
                                                    <div class="rating__star"></div>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist__product-rating-title">(3 of 5)</div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--body wishlist__column--stock">
                            <div class="status-badge status-badge--style--success status-badge--has-text">
                                <div class="status-badge__body">
                                    @if ($piece->active == 1)
                                        <div class="status-badge__text">In Stock</div>
                                    @else
                                        <div class="status-badge__text rounded-pill bg-warning text-light">Out of Stock</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--body wishlist__column--price">
                            {{$piece->price}} MAD
                        </td>



                        {{-- <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                            @if (!$orders->contains('piece_id', $piece->id) && $pieceInOrders != $piece->id)
                                <button type="button" class="btn btn-sm btn-primary" wire:click="store({{$piece->id}})">
                                    Add to cart
                                </button>
                            @else
                                <div class="cart-table__quantity input-number">
                                    <input class="form-control bg-transparent rounded border w-50 m-auto" type="number" min="0" wire:model.defer="quantity" wire:change="updateQuantity({{$piece->id}})">
                                    @if (isset($orderQuantities[$piece->id]))
                                        <span>{{$orderQuantities[$piece->id]}}</span>
                                    @endif
                                </div>
                            @endif
                        </td> --}}

                        {{-- <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                            @if ((!$orders->contains('piece_id', $piece->id) && $pieceInOrders != $piece->id))
                                <button type="button" class="btn btn-sm btn-primary" wire:click="store({{$piece->id}})">
                                    Add to cart
                                </button>                         
                            @else
                                <div class="cart-table__quantity input-number">
                                    <input class="form-control bg-transparent rounded border w-50 m-auto"
                                        type="number"
                                        min="0"
                                        wire:model.defer="orderQuantities.{{$piece->id}}"
                                        wire:change="updateQuantity({{$piece->id}}, $event.target.value)">
                                </div>
                            @endif
                        </td> --}}
                        <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                            @if (!$orders->contains('piece_id', $piece->id) && $pieceInOrders != $piece->id)
                                <button type="button" class="btn btn-sm btn-primary" @if (!$piece->active) disabled @endif wire:click="store({{$piece->id}})">
                                    Add to cart
                                </button>                         
                            @else
                                <div class="cart-table__quantity input-number">
                                    @if (isset($orderQuantities[$piece->id]) && $orderQuantities[$piece->id] > 0)
                                        <input class="form-control bg-transparent rounded border w-50 m-auto"
                                            type="number"
                                            min="0"
                                            wire:model.defer="orderQuantities.{{$piece->id}}"
                                            wire:change="updateQuantity({{$piece->id}}, $event.target.value)">
                                    @else
                                        <button type="button" class="btn btn-sm btn-primary" wire:click="store({{$piece->id}})">
                                            Add to cart
                                        </button>
                                    @endif
                                </div>
                            @endif
                        </td>
                        
                        

                        
                        {{-- @dd($lpiece->piece->likes[0]->user_id) --}}
                        <td class="wishlist__column wishlist__column--body wishlist__column--remove">
                            <button wire:click="unlike({{$piece->id}})" type="button" class="wishlist__remove btn btn-sm btn-muted btn-icon">
                                <svg width="12" height="12">
                                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>