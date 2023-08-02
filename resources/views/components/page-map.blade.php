@switch(Route::currentRouteName())
    {{--  --}}
    @case('home')
        @vite(['resources/js/home.js'])
        @break
    @default
@endswitch
