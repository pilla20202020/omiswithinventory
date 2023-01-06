<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('css')
    @stack('css')
</head>

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" >
    <div class="nk-app-root">
        <div class="nk-main">
            @include('omis/partials/sidebar')
            <div class="nk-wrap">
                @include('omis/partials/header')
                @yield('content')
                @include('omis/partials/footer')
            </div>
        </div>
    </div>
    @include('omis/partials/footerincludes');
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/data-tables/data-tables.js')}}"></script>
    <script src="{{asset('assets/js/charts/project-manage-chart.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @yield('js')
        @stack('js')
</body>
</html>

