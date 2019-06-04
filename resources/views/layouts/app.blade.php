<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    {{-- <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        {{-- Navbar --}}
        @include('layouts.nav')

        {{-- Content --}}
        <main class="py-4">
            <div class="container">
                {{-- Session alert message --}}
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Success</h4>
                      <hr/>
                      <p>{{ session()->get('message') }}</p>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
