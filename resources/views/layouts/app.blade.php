<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{asset('adm/css/main.css')}}">
</head>
<body>
<!-- SideBar -->
<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            {{ $session_data->user_role }} <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <!-- SideBar User info -->
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src="{{ asset('adm/assets/img/avatar.jpg') }}" alt="UserIcon">
                <figcaption class="text-center text-titles">{{ $session_data->name }}</figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <a href="#!">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-exit-system">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SideBar Menu -->
        @include('layouts.navigation')
    </div>
</section>

<!-- Content page-->
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    <nav class="full-box dashboard-Navbar navbar-fixed-top">
        <ul class="full-box list-unstyled text-right">
            <li class="pull-left">
                <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-menu"></i></a>
            </li>
            <li>
                <a href="#!" class="btn-search">
                    <i class="zmdi zmdi-search"></i>
                </a>
            </li>
        </ul>
    </nav>
    <br>
    @yield('content')
</section>
<!--====== Scripts -->
<script src="{{ asset('adm/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('adm/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('adm/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adm/js/material.min.js') }}"></script>
<script src="{{ asset('adm/js/ripples.min.js') }}"></script>
<script src="{{ asset('adm/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('adm/js/main.js') }}"></script>
<script>
    $.material.init();
</script>
</body>
</html>