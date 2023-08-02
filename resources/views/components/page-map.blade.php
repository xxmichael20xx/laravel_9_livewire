@if ($type == 'style')
    @switch(Route::currentRouteName())
        {{-- Mapping for style --}}
        @case('home')
            @vite(['resources/sass/home.scss'])
            @break
        @default
    @endswitch
@else
    @switch(Route::currentRouteName())
    {{-- Mapping for style --}}
    @case('home')
        @vite(['resources/js/home.js'])
        @break
    @default
    @endswitch
@endif

