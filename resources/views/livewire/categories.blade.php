 <div class="container">
    <div class="block-categories__list">
        @foreach ($categories as $category)
            @if (!$category->parentCategory)
            {{-- @if ($category->parent_id == null) --}}
                <div class="block-categories__item category-card category-card--layout--classic">
                    <div class="category-card__body">
                        <div class="category-card__content">
                            <div class="category-card__image image image--type--category">
                                <a href="{{route('category.filterCategory', $category->id)}}" class="image__body">
                                    @switch($category->name)
                                        @case('Headlights')
                                            <img class="image__tag" src="{{asset('images/categories/category-1-160x160.jpg')}}" alt="" />
                                            @break
                                        @case('Fuel System')
                                            <img class="image__tag" src="{{asset('images/categories/category-2-160x160.jpg')}}" alt="" />
                                            @break
                                        @case('Body Parts')
                                            <img class="image__tag" src="{{asset('images/categories/category-3-160x160.jpg')}}" alt="" />
                                            @break
                                        @case('Interior Parts')
                                            <img class="image__tag" src="{{asset('images/categories/category-4-160x160.jpg')}}" alt="" />
                                            @break
                                        @case('Wheels & Tires')
                                            <img class="image__tag" src="{{asset('images/categories/category-5-160x160.jpg')}}" alt="" />
                                            @break
                                        @case('Engine & Drivetrain')
                                            <img class="image__tag" src="{{asset('images/categories/category-6-160x160.jpg')}}" alt="" />
                                            @break
                                        @default
                                    @endswitch
                                </a>
                            </div>
                            <div class="category-card__info">
                                <div class="category-card__name">
                                    <a href="{{route('category.filterCategory', $category->id)}}">{{$category->name}}</a>
                                </div>
                                <ul class="category-card__children">
                                    @foreach($category->subcategories as $subcategory)
                                    <li><a href="{{route('category.filterCategory', $subcategory->id)}}">{{ $subcategory->name }}</a></li>
                                    @endforeach
                                </ul>
                                <div class="category-card__actions">
                                    <a href="{{route('category.filterCategory', $category->id)}}" class="category-card__link">Shop All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>