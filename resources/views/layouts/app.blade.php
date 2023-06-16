<html>
    <head>
        <title>App Name - @yield('title')</title>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
            This is the master sidebar.
        </div>
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>