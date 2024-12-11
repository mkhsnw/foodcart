<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Of Yogyakarta</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body>
    @php
        $currentRoute = request()->route()->getName();
    @endphp
    <x-header :current-route="$currentRoute" />

    @yield('content')

    {{-- <x-footer /> --}}

    @stack('scripts')
</body>
</html>