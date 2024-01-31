<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expert Mind | @yield('title')</title>
        <link rel="icon" type="image/png" href="/images/favicon.png">
        <meta property="og:image" content="@yield ('ogImage')" />
        {{-- CSS --}}
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        {{-- AOS --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        {{-- TAILWIND --}}
        <script src="https://cdn.tailwindcss.com"></script>
        @include('site.pixels.header')
    </head>
    <body class="antialiased">
        @include('site.pixels.body')
        @yield('content')
        @include('site.footer')
        @include('site.scripts')
    </body>
</html>
