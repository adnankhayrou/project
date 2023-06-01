     {{-- filter --}}
<div class="block-finder__body container container--max--xxl d-flex w-100 p-3 mt-5">
    <form action="{{ route('piece.filter') }}" method="GET" class="block-finder__form d-flex flex-column bg-light p-3 mx-3">
        @csrf
        <div class="m-2">
            <select class="form-control border" name="brand_id" wire:model="brand_id" aria-label="Vehicle Marke">
                <option value="none">Select Mark</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="m-2">
            <select class="form-control border" wire:model="year" @if (empty($brand_id)) disabled @endif>
                <option value="none">Select Year</option>
                @php
                if (!empty($brand_id))
                    $years = App\Models\Models::where('brand_id',$brand_id)->get();
                @endphp
                @if (isset($years))
                    @foreach ($years as $model)
                        <option value="{{ $model->year }}">{{ $model->year }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="m-2">
            <select class="form-control border"  name="model_id" wire:model="model_id" @if (empty($year)) disabled @endif>
                <option selected>Select Model</option>
                @php
                // if (!empty($year))
                $models = App\Models\Models::where('year',$year)->where('brand_id', $brand_id)->get();
                @endphp
                @if ($models)
                    @foreach ($models as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="m-2">
            <select class="form-control border" name="motorization_id" wire:model="motorization_id" aria-label="Vehicle Engine" >
                <option value="none">Select Engine</option>
                @php
                    $motorizations = App\Models\Motorizations::all();
                @endphp
                @foreach ($motorizations as $motorization)
                    <option value="{{ $motorization->id }}" >{{ $motorization->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="m-2">
            <select class="form-control border" name="etat_id" wire:model="etat_id" aria-label="Vehicle Marke" >
                <option value="none">Select Etat</option>
                @foreach ($etats as $etat)
                    <option value="{{ $etat->id }}">{{ $etat->name }}</option>
                @endforeach
            </select>
        </div> 

        <div class="m-2">
            <select class="form-control border" name="city_id" >
                <option value="none">Select City</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
            
        <button class="btn btn-danger" type="submit">
            Search
        </button>
    </form>
    <div class=" d-lg-block d-none d-flex text-center align-items-center justify-content-center w-100 mt-5">
        <div class="">
            <div class="block-finder__title">
                Find Parts For Your Vehicle
            </div>
            <div class="block-finder__subtitle">
                Over hundreds of brands and tens of thousands of parts
            </div>
        </div>
    </div>
</div>
    {{-- end filter --}}
