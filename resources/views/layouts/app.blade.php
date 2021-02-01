<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <link href="app-images/icon/icon.png" rel="shortcut icon">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/3.4.0.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shortcodes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <style>
        .form-check-label{
            margin-left: 2rem;
        }
    </style>
</head>

<body>
    <div id="app">
        <header>
            <img src="{{asset('app-images/logo.jpg')}}" alt="logo">
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <!-- <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget widget-about">
                            <div class="widget" style="margin-top:30px;height:45px !important;">
                                <h3 class="widget-title">Big Cities</h3>
                            </div>
                            <p>
                            <div class="widget widget-categories">
                                <ul class="one-half">
                                    <li>
                                        <a href="#" title="" onClick="scrollSmoothToTop()" id="karachi">Karachi</a>
                                    </li>
                                    <li>
                                        <a href="#" title="" onClick="scrollSmoothToTop()" id="lahore">Lahore</a>
                                    </li>
                                    <li>
                                        <a href="#" title="" onClick="scrollSmoothToTop()" id="islamabad">Islamabad</a>
                                    </li>
                                    <li>
                                        <a href="#" title="" onClick="scrollSmoothToTop()" id="rawalpindi">Rawalpindi</a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="one-half">
                                <li>
                                    <a href="#" title="">Fumigation</a>
                                </li>
                                <li>
                                    <a href="#" title="">Pest</a>
                                </li>
                                <li>
                                    <a href="#" title="">Termite</a>
                                </li>
                                <li>
                                    <a href="#" title="">Rodent</a>
                                </li>
                            </ul>
                            <ul class="one-half">
                                <li>
                                    <a href="#" title="">Pesticides</a>
                                </li>
                                <li>
                                    <a href="#" title="">Insecticides</a>
                                </li>
                                <li>
                                    <a href="#" title="">Bed Bugs</a>
                                </li>
                                <li>
                                    <a href="#" title="">Mice</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-contact">
                            <h3 class="widget-title">Contact</h3>
                            <ul class="contact-infomation">
                                <li class="address">
                                    Office # S-133, 2nd Floor, City Centre, Shahrah-e-Faisal, Karachi, Pakistan
                                </li>
                                <li class="phone">
                                    (021) 34554193
                                </li>
                                <li class="email">
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-categories">
                            <h3 class="widget-title">About Us</h3>
                            <ul class="one-half">
                                <li>
                                    <a href="#" title="">Report an Error</a>
                                </li>
                                <li>
                                    <a href="#" title="">Privacy Statement</a>
                                </li>
                                <li>
                                    <a href="#" title="">Terms Of Use</a>
                                </li>
                                <li>
                                    <a href="#" title="">FAQ</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="social-ft">
                            <li>
                                <a href="#" title="">
                                    <i class="ti-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="ti-twitter-alt" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="ti-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="ti-google" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="ti-pinterest" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="copyright" style="margin-bottom:15px;margin-right:41px;">
                            © 2020 Copyright by<a href="https://www.gsemarketing.pk" target="_blank"> GSE Marketing</a>. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</body>

</html>