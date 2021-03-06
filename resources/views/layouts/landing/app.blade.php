<!DOCTYPE html>
<!--[if IE 9]><html class="ie9" lang="{{ str_replace('_', '-', app()->getLocale()) }}"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->
<head>
    <!-- Google Web Fonts
  ================================================== -->

    <link
        href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800"
        rel="stylesheet"
    />

    <!-- Basic Page Needs
  ================================================== -->

    <title>U-rich</title>

    <meta name="format-detection" content="telephone=no" />
    <meta charset="utf-8" />

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <!--meta info-->
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vendor CSS
  ============================================ -->
    <link
        rel="stylesheet"
        type="text/css"
        media="all"
        href="{{url('/')}}/landing/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="{{url('/')}}/landing/css/fontello.css" />
    <link rel="stylesheet" href="{{url('/')}}/landing/font/demo-files/demo.css" />
    <link rel="stylesheet" href="{{url('/')}}/landing/plugins/revolution/css/settings.css" />
    <link rel="stylesheet" href="{{url('/')}}/landing/plugins/revolution/css/layers.css" />
    <link rel="stylesheet" href="{{url('/')}}/landing/plugins/revolution/css/navigation.css" />
    <link rel="stylesheet" href="{{url('/')}}/landing/css/owl.carousel.css" />

    <!-- CSS theme files
  ============================================ -->
    <link rel="stylesheet" type="text/css" media="all" href="{{url('/')}}/landing/css/style.css" />
    <link
        rel="stylesheet"
        type="text/css"
        media="all"
        href="{{url('/')}}/landing/css/responsive.css"
    />
</head>

<body class="wide-layout">
<div class="loader"></div>

<!--cookies-->
{{-- <div class="cookies">--}}
{{--      <div class="container">--}}
{{--        <div class="clearfix">--}}
{{--          <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>--}}
{{--          <div class="f-right"><a href="#" class="btn btn-small btn-style-2">Accept Cookies</a><a href="#" class="btn btn-small btn-style-4">Read More</a></div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

<div id="wrapper" class="wrapper-container">
    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header">

        <!-- top-header -->

        <div class="top-header">
            <div class="container">
                <div class="table-row">
                    <div class="col-md-3">
                        <!--Logo-->

                        <a href="{{url('/')}}" class="logo">
                            <img src="{{url('/')}}/image/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="col-md-9">
                        <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

                        <!--main menu-->

                        <div class="menu-holder">
                            <div class="menu-wrap">
                                <div class="nav-item">
                                    <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

                                    <nav id="main-navigation" class="main-navigation">
                                        <ul id="menu" class="clearfix">
                                            <li class="current">
                                                <a href="{{url('/')}}">Home</a>
                                            </li>
                                            <li class="">
                                                <a href="{{url('/about-us')}}">About</a>
                                            </li>
                                            <li class="">
                                                <a href="{{url('/services')}}">Services</a>
                                            </li>
                                            <li class="">
                                                <a href="{{url('/contact-us')}}">Contact</a>
                                            </li>
                                            <li class="">
                                                <a href="{{url('/track')}}">Track / Trace</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

@yield('content')


    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <footer id="footer" class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="widget">
                            <h6 class="widget-title">Contact Us</h6>
                            <p>Room03, 19/F., Wong's Factory Building, <br />
                                368-370 Sha Tsui Road,Tsuen Wan, NT</p>
                            <p>Hong Kong - China</p>

                            <ul class="contact-info">
                                <li><span class="licon-telephone"></span> <a href="callto:+85230115474">+852 3011 5474</a></li>
                                <li><span class="licon-telephone"></span> <a href="callto:+85236980186">+852 3698 0186</a></li>
                                <li><span class="licon-at-sign"></span> <a href="mailto:billychiu@urichf.com.hk">billychiu@urichf.com.hk</a></li>

                            </ul>
{{--                            <ul class="social-icons">--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-facebook"></i></a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-gplus"></i></a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-twitter"></i></a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-linkedin-1"></i></a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-mail"></i></a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                        <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="widget">
                            <h6 class="widget-title">About Urichf</h6>
                            <ul class="info-links">
                                <li><a href="{{url('/about-us')}}">About Us</a></li>

                                <li><a href="{{url('/services')}}">Services</a></li>

                                <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="widget">
                            <h6 class="widget-title">Services</h6>
                            <ul class="info-links">
                                <li><a href="{{url('/services')}}">Road Transport</a></li>
                                <li><a href="{{url('/services')}}">Sea Freight</a></li>
                                <li><a href="{{url('/services')}}">Air Freight</a></li>
                                <li><a href="{{url('/services')}}">Project Forwarding</a></li>
                                <li><a href="{{url('/services')}}">Logistics</a></li>
                                <li><a href="{{url('/services')}}">Warehousing</a></li>
                                <li><a href="{{url('/services')}}">Cargo insurance</a></li>
                                <li><a href="{{url('/services')}}">Supply Chain</a></li>
                            </ul>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="widget">
                            <h6 class="widget-title">Newsletter Sign Up</h6>
                            <p>
                                Sign up to our newsletter and get exclusive offers and news
                                you wont find anywhere else straight to your inbox!
                            </p>
                            <form id="newsletter" class="lineform">
                                <input
                                    type="email"
                                    name="newsletter-email"
                                    placeholder="Enter your email address"
                                />

                                <button class="lineform-btn btn">Sign Up</button>
                            </form>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->
                    </div>
                </div>
            </div>
        </div>

        <!-- - - - - - - - - - - - - - Copyright - - - - - - - - - - - - - - - - -->
        <div class="copyright">
            <div class="container">
                <div class="table-row">
                    <div class="col-sm-6">
                        Copyright U-rich ?? 2021. All Rights Reserved
                    </div>
                    <div class="col-sm-6">
                        <ul class="info-links h-type">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Service Terms</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- - - - - - - - - - - - - - End Copyright - - - - - - - - - - - - - - - - -->
    </footer>

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
</div>

<!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

<!-- JS Libs & Plugins
============================================ -->
<script src="{{url('/')}}/landing/js/libs/jquery.modernizr.js"></script>
<script src="{{url('/')}}/landing/js/libs/jquery-2.2.4.min.js"></script>
<script src="{{url('/')}}/landing/js/libs/jquery-ui.min.js"></script>
<script src="{{url('/')}}/landing/js/libs/retina.min.js"></script>
<script src="{{url('/')}}/landing/plugins/jquery.scrollTo.min.js"></script>
<script src="{{url('/')}}/landing/plugins/jquery.localScroll.min.js"></script>
<script src="{{url('/')}}/landing/plugins/jquery.queryloader2.min.js"></script>
<script src="{{url('/')}}/landing/plugins/bootstrap.js"></script>
<script src="{{url('/')}}/landing/plugins/owl.carousel.min.js"></script>
<script src="{{url('/')}}/landing/plugins/revolution/js/jquery.themepunch.tools.min.js?ver=5.0"></script>
<script src="{{url('/')}}/landing/plugins/revolution/js/jquery.themepunch.revolution.min.js?ver=5.0"></script>

<!-- JS theme files
============================================ -->
<script src="{{url('/')}}/landing/js/plugins.js"></script>
<script src="{{url('/')}}/landing/js/script.js"></script>

<!-- Header for Slider Revouliton
============================================ -->

<script
    type="text/javascript"
    src="{{url('/')}}/landing/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"
></script>
<script
    type="text/javascript"
    src="{{url('/')}}/landing/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"
></script>
<script
    type="text/javascript"
    src="{{url('/')}}/landing/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"
></script>
</body>
</html>
