<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ucwords(Route::currentRouteName() ?? config('app.name', 'Laravel Livewire')) }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss'])

    {{-- Livewire Styles --}}
    <livewire:styles />

    {{-- Add Page Mapping - Style --}}
    <x-page-map type="style" />
</head>
<body>
    <main id="app" class="container {{ $containerClass ?? '' }}">
        @yield('content')
    </main>

    {{-- Scripts --}}
    @vite(['resources/js/app.js'])

    {{-- Livewire scripts --}}
    <livewire:scripts />

    {{-- Add Page Mapping - Script --}}
    <x-page-map type="script" />
</body>
</html>
