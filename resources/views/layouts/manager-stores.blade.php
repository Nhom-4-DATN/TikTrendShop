<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        @vite(['resources/sass/app.scss', 'resources/css/manager-store/main.css', 'resources/js/app.js'])
    </head>

    <body>
        <div id="app">
            <x-header.header-manager-shop />
            <div style="margin-top: 80px; ">
                <div class="row">
                    <div class="col-2" style="height: 100vh;">
                        <div class="position-fixed bg-white overflow-y-scroll hedden-scroll " style="width: 280px;  height: 100vh;">
                            <x-sidebar.sidebar-manager-stores-menus />
                        </div>
                    </div>
                    <div class="col-10 mt-4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
    @stack('scripts')
    @toastr_render

</html>
