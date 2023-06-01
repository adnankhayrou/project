{{-- <style>
    ::-webkit-scrollbar
        {
            width: 0;
        }
</style> --}}
@include('includes._header')
@livewireStyles
@include('layouts._upper')
@include('layouts._nav-upper')
@include('layouts._navbar')
<div id="app" class="app">
@section('content')

@show
</div>
@include('layouts._footer')
@livewireScripts
{{-- @include('includes._footer') --}}