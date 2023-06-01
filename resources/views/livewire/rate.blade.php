<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="rate">
        <input type="radio" id="star5" wire:model="star" name="rate" wire:click="rating(5)" value="5" />
            <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" wire:model="star" name="rate" wire:click="rating(4)" value="4" />
            <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" wire:model="star" name="rate" wire:click="rating(3)" value="3" />
            <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" wire:model="star" name="rate" wire:click="rating(2)" value="2" />
            <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" wire:model="star" name="rate" wire:click="rating(1)" value="1" />
            <label for="star1" title="text">1 star</label>
    </div>
</div>
