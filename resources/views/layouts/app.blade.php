<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- sns settings -->
    @yield('meta_sns')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inspiration | @yield('title')</title>
    <meta name=”description” content="@yield('description')" />
    <meta name=”keywords” content="アイデア, webサービスアイデア, ビジネスアイデア, 実装スキル, アイデア販売, 販売" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- favicon --}}
    <link rel="icon" href="images/favicon.ico">
</head>

<body>
    @yield('header')

    <div id="app">
        {{-- フラッシュメッセージ --}}
        @if (session('flash_message'))
        <flash-message message="{{ session('flash_message') }}" type="normal"></flash-message>
        @elseif(session('error_message'))
        <flash-message message="{{ session('error_message') }}" type="error"></flash-message>
        @endif
        @yield('content')
    </div>
    @yield('footer')
</body>

</html>