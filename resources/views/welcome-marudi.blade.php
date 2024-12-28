<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    {{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

    <link href="/css/output.css?r{{ rand() }}" rel="stylesheet">

</head>
<body class="antialiased font-sans">
<div class="w-full py-10 text-black text-center">
    @if (Route::has('login'))
        <livewire:welcome.navigation/>
    @endif
</div>
</body>
</html>
