<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        
        @include('inc.navbar')
        <main class="py-4">
            <div class="container">
                @include('inc.messages')
                @yield('content')
        </main>
            </div>
            
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
        
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
        CKEDITOR.replace( 'summary-ckeditor' );
        
        </script>
        
</body>
</html>
