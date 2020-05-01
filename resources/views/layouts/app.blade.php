<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div class="body-inner">
        <header id="header" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="{{ url('home')}}">
                            <span class="logo-default">POLO</span>
                            <span class="logo-dark">POLO</span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href=" {{ url('home') }}">Home</a></li>
                                    <li class="dropdown"><a href="#">Portfolio<i class="icon-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="https://pustaka-alpha.000webhostapp.com/" target="_blank">E-Perpustakaan</a></li>
                                            <li><a href="https://miraima.000webhostapp.com/" target="_blank">E-Mading</a></li>
                                            <li><a href="https://pappy-decrease.000webhostapp.com/" target="_blank">Sistem Buku Induk</a></li>
                                            <li><a href="https://beefiest-speaker.000webhostapp.com/" target="_blank">E-Buku Ramadhan</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Game<i class="icon-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Options</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="layout-boxed.html">Boxed</a></li>
                                                    <li><a href="layout-modern.html">Modern</a></li>
                                                    <li><a href="layout-frame.html">Frame</a></li>
                                                    <li><a href="layout-wide.html">Wide (default)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ url('kontak') }}">Kontak</a></li>
                                    <li><a href="{{ url('tentang')}} ">Tentang</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>


        <!-- Footer -->
        <footer id="footer" style="background-color: #181818; color: white;">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">

                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                                    All rights reserved. Copyright © 2019. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Tentang</div>
                                        <ul class="list">
                                            <li><a href="{{ url('staff') }}">Mirai Staff</a></li>
                                            <li><a href="{{ url('tentang') }}">Tentang Kami</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="widget">
                                        <div class="widget-title">Kontak</div>
                                        <ul class="list">
                                            <li><a href="#"><i class="icon-mail"></i> MiraiamaDev21@gmail.com</a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i> @MiraimaDev</a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i> MiraimaDev</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="copyright-content " style="background-color: #181818; color: white;">
                <div class="container">
                    <div class="copyright-text text-center">Copyright &copy; 2020 All rights reserved | Mirai Developer<a href="https://www.instagram.com/r3ndks/" target="_blank"> Sniren-Ren</a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <!--Plugins-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <!--Template functions-->
    <script src="{{asset('js/functions.js')}}"></script>

    
            <!--Google Maps files-->
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyAZIus-_huNW25Jl7RPmHgoGZjD5udgBMI'></script>
    <script type="text/javascript" src="{{ asset('plugins/gmap3/gmap3.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('plugins/gmap3/map-styles.js') }} "></script>
</body>
</html>
