<div class="block-zone__carousel-item product-card__action--wishlist" style="z-index: 10;">
    {{-- @if(auth()->check() && !$post->likes()->where('user_id', auth()->user()->id)->exists()) --}}
    @if(!$piece->likes()->where('user_id', 1)->exists())
        <div class="product-card__actions-list" >
            <button wire:click="like" class="btn product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list" title="Add to Wichlist">
                <svg width="16" height="16">
                    <path
                      d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"
                    />
                  </svg>
            </button>
        </div>
    @else
        <div class="product-card__actions-list" >
            <button wire:click="unlike" class="btn product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list"  title="Remove from Wichlist">
                <svg width="16" height="16" style="color: tomato">
                    <path
                    d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"
                    />
                </svg>
            </button>
        </div>
    @endif
</div>