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

    <title>Expeditor</title>

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
        <!-- top-bar -->

        <div class="top-bar">
            <div class="container">
                <div class="table-row">
                    <div class="col-sm-6">
                        <ul class="contact-info">
                            <li>Phone: <a href="#">800-987-65-43</a></li>
                            <li>Email: <a href="#">info@companyname.com</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="client-info">
                            <li><a href="#get_quote" class="animated">Get a Quote</a></li>
                            <li><a href="#">Shipment Tracker</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- top-header -->

        <div class="top-header">
            <div class="container">
                <div class="table-row">
                    <div class="col-md-3">
                        <!--Logo-->

                        <a href="{{url('/')}}" class="logo">
                            <img src="{{url('/')}}/landing/images/logo.png" alt="" />
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
                                            <li class="dropdown">
                                                <a href="#">Services</a>
                                                <!--sub menu-->
                                                <div class="sub-menu-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="services.html">Services Overview</a>
                                                        </li>
                                                        <li>
                                                            <a href="single_service.html"
                                                            >Single Service Page</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
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

    <!-- - - - - - - - - - - - - - Revolution Slider - - - - - - - - - - - - - - - - -->

    <div class="rev-slider-wrapper">
        <div id="rev-slider" class="rev-slider" data-version="5.0">
            <ul>
                <li data-transition="fade" class="align-right">
                    <img
                        src="{{url('/')}}/landing/images/1920x600_slide1.jpg"
                        class="rev-slidebg"
                        alt=""
                    />

                    <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-medium
                  rs-parallaxlevel-1
                "
                        data-x="right"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="140"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":750,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-responsive_offset="on"
                        data-elementdelay="0.05"
                    >
                        Accelerate
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-small
                  rs-parallaxlevel-2
                "
                        data-x="right"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="200"
                        data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    >
                        Your Freight With
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 3 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-large
                  rs-parallaxlevel-3
                "
                        data-x="right"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="225"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-responsive_offset="on"
                        data-elementdelay="0.05"
                    >
                        Air Cargo!
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 4 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-text
                  rs-parallaxlevel-4
                "
                        data-x="right"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="305"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1700,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    >
                        Donec porta diam eu massa. Quisque diam <br />
                        lorem, interdum vitae, dapibus ac.
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 4 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 5 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-text
                  rs-parallaxlevel-5
                "
                        data-x="right"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="395"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2200,"speed":2500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;"}]'
                    >
                        <a href="#" class="btn btn-big btn-style-5">Read More</a>
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 5 - - - - - - - - - - - - - - - - -->
                </li>

                <li data-transition="fade" class="align-left">
                    <img
                        src="images/1920x600_slide2.jpg"
                        class="rev-slidebg"
                        alt=""
                    />

                    <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-large2
                  rs-parallaxlevel-1
                "
                        data-x="left"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="160"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":750,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-responsive_offset="on"
                        data-elementdelay="0.05"
                    >
                        Ocean Freights
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-small2
                  rs-parallaxlevel-2
                "
                        data-x="left"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="230"
                        data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    >
                        Global Solutions For Your Business
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 3 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-text
                  rs-parallaxlevel-3
                "
                        data-x="left"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="280"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1700,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    >
                        Aliquam dapibus tincidunt metus. Praesent justo dolor, lobor-
                        <br />tis quis, lobortis dignissim, pulvinar ac, lorem.
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 3 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 4 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-text
                  rs-parallaxlevel-4
                "
                        data-x="left"
                        data-hoffset="100"
                        data-y="top"
                        data-voffset="370"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2200,"speed":2500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;"}]'
                    >
                        <a href="#" class="btn btn-big btn-style-5">Get Pricing</a>
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 4 - - - - - - - - - - - - - - - - -->
                </li>

                <li data-transition="fade" class="align-right">
                    <img
                        src="{{url('/')}}/landing/images/1920x600_slide3.jpg"
                        class="rev-slidebg"
                        alt=""
                    />

                    <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-large2
                  rs-parallaxlevel-1
                "
                        data-x="right"
                        data-hoffset="0"
                        data-y="top"
                        data-voffset="160"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":750,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-responsive_offset="on"
                        data-elementdelay="0.05"
                    >
                        Road Transport
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-small2
                  rs-parallaxlevel-2
                "
                        data-x="right"
                        data-hoffset="0"
                        data-y="top"
                        data-voffset="230"
                        data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1200,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    >
                        Shortens Transit Times
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 3 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-text
                  rs-parallaxlevel-3
                "
                        data-x="right"
                        data-hoffset="0"
                        data-y="top"
                        data-voffset="280"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1700,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                    >
                        Aliquam dapibus tincidunt metus. Praesent justo dolor, lobor-
                        <br />tis quis, lobortis dignissim, pulvinar ac, lorem.
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 3 - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Layer 4 - - - - - - - - - - - - - - - - -->

                    <div
                        class="
                  tp-caption tp-resizeme
                  scaption-white-text
                  rs-parallaxlevel-4
                "
                        data-x="right"
                        data-hoffset="0"
                        data-y="top"
                        data-voffset="370"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2200,"speed":2500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;"}]'
                    >
                        <a href="#" class="btn btn-big btn-style-5">Get Estimate</a>
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 4 - - - - - - - - - - - - - - - - -->
                </li>
            </ul>
        </div>
    </div>

    <!-- - - - - - - - - - - - - - End of Slider - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">
        <!-- page-section -->
        <div class="page-section">
            <!-- Banners section -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="section-title">
                            From Departure <br />
                            to Destination!
                        </h2>

                        <!-- Medium text size -->
                        <p class="text-size-medium">
                            Donec porta diam eu massa. Quisque diam lorem, interdum vitae,
                            dapibus ac.
                        </p>

                        <p>
                            Donec eget tellus non erat lacinia fermentum. Donec in velit
                            vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                            Proin dictum elementum velit.
                        </p>

                        <p>
                            Fusce euismod consequat ante. Sed in lacus ut enim adipiscing
                            aliquet. Nulla venenatis. In pede mi, aliquet sit amet,
                            euismod in, auctor ut, ligula.
                        </p>

                        <a href="#" class="info-btn">More about us</a>
                    </div>
                    <div class="col-md-8">
                        <div class="banners-wrap fx-cols-2">
                            <!-- Banner -->
                            <a href="#" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Get a Free Quote!</h5>
                                    <p>
                                        Nulla venenatis. In pede mi, aliquet sit amet, euismod
                                        in, auctor ut, ligula.
                                    </p>
                                    <div class="btn btn-small">Start a Quote</div>
                                    <i class="licon-quote-open"></i>
                                </div>
                            </a>

                            <!-- Banner -->
                            <a href="#" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Shipment Tracking</h5>
                                    <p>
                                        Aliquam dapibus tincidunt metus. Praesent justo dolor,
                                        lobortis quis, lobortis dignissim.
                                    </p>
                                    <div class="btn btn-small">Find Your Cargo</div>
                                    <i class="licon-dolly"></i>
                                </div>
                            </a>

                            <!-- Banner -->
                            <a href="#" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Shipping Calculator</h5>
                                    <p>
                                        Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                        cursus eleifend, elit.
                                    </p>
                                    <div class="btn btn-small">Get Estimate</div>
                                    <i class="licon-calculator2"></i>
                                </div>
                            </a>

                            <!-- Banner -->
                            <a href="#" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Have a Question?</h5>
                                    <p>
                                        Donec sagittis euismod purus.Sed ut perspiciatis unde
                                        omnis iste natus error.
                                    </p>
                                    <div class="btn btn-small">Contact Us</div>
                                    <i class="licon-question-circle"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->

        <!-- page-section -->
        <div class="page-section-bg">
            <!-- Icons section -->
            <div class="container">
                <div class="content-element-type-2">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="section-pre-title">what we offer</h6>
                            <h2 class="section-title">Our Services</h2>
                        </div>
                        <div class="col-md-8">
                            <p>
                                Donec eget tellus non erat lacinia fermentum. Donec in velit
                                vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                                Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In
                                pede mi, aliquet sit amet, euismod in, auctor ut, ligula.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="icons-box fx-cols-4">
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-road"></i>
                                <h5 class="icons-box-title">Road Transport</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-ship"></i>
                                <h5 class="icons-box-title">Sea Freight</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-plane"></i>
                                <h5 class="icons-box-title">Air Freight</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-3d-rotate"></i>
                                <h5 class="icons-box-title">Project Forwarding</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-map"></i>
                                <h5 class="icons-box-title">Logistics</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-box"></i>
                                <h5 class="icons-box-title">Warehousing</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-shield-check"></i>
                                <h5 class="icons-box-title">Cargo Insurance</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-link2"></i>
                                <h5 class="icons-box-title">Supply Chain</h5>
                                <p>
                                    Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                    cursus eleifend, elit.
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->

        <!-- page-section -->
        <div
            class="page-section parallax-section"
            data-bg="{{url('/')}}/landing/images/2433x1637_bg.jpg"
        >
            <!-- Testimonials section -->
            <div class="container">
                <h6 class="section-pre-title">testimonials</h6>
                <h2 class="section-title">What Our Clients Say</h2>

                <!-- - - - - - - - - - - - - Owl-Carousel - - - - - - - - - - - - - - - -->

                <div class="carousel-type-1">
                    <div
                        class="owl-carousel"
                        data-max-items="2"
                        data-item-margin="30"
                        data-autoplay="true"
                    >
                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <div class="testimonial">
                                <div class="testimonial-holder">
                                    <h6>Very Fast Delivery</h6>
                                    <blockquote>
                                        <p>
                                            “Nulla facilisi. Aenean nec eros. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Suspendisse sollicitudin velit
                                            sed leo.”
                                        </p>
                                    </blockquote>
                                </div>

                                <div class="author-box">
                                    <a href="#" class="avatar">
                                        <img src="{{url('/')}}/landing/images/120x120_avatar1.png" alt="" />
                                    </a>

                                    <div class="author-info">
                                        <span class="author-name">Stacy Haddon</span>
                                        <span class="author-position">Los Angeles</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <div class="testimonial">
                                <div class="testimonial-holder">
                                    <h6>Very Fast Delivery</h6>
                                    <blockquote>
                                        <p>
                                            “Nulla facilisi. Aenean nec eros. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Suspendisse sollicitudin velit
                                            sed leo.”
                                        </p>
                                    </blockquote>
                                </div>

                                <div class="author-box">
                                    <a href="#" class="avatar">
                                        <img src="{{url('/')}}/landing/images/120x120_avatar2.png" alt="" />
                                    </a>

                                    <div class="author-info">
                                        <span class="author-name">Alan Smith</span>
                                        <span class="author-position">New York</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <div class="testimonial">
                                <div class="testimonial-holder">
                                    <h6>Very Fast Delivery</h6>
                                    <blockquote>
                                        <p>
                                            “Nulla facilisi. Aenean nec eros. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Suspendisse sollicitudin velit
                                            sed leo.”
                                        </p>
                                    </blockquote>
                                </div>

                                <div class="author-box">
                                    <a href="#" class="avatar">
                                        <img src="{{url('/')}}/landing/images/120x120_avatar1.png" alt="" />
                                    </a>

                                    <div class="author-info">
                                        <span class="author-name">Stacy Haddon</span>
                                        <span class="author-position">Los Angeles</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <div class="testimonial">
                                <div class="testimonial-holder">
                                    <h6>Very Fast Delivery</h6>
                                    <blockquote>
                                        <p>
                                            “Nulla facilisi. Aenean nec eros. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Suspendisse sollicitudin velit
                                            sed leo.”
                                        </p>
                                    </blockquote>
                                </div>

                                <div class="author-box">
                                    <a href="#" class="avatar">
                                        <img src="{{url('/')}}/landing/images/120x120_avatar2.png" alt="" />
                                    </a>

                                    <div class="author-info">
                                        <span class="author-name">Alan Smith</span>
                                        <span class="author-position">New York</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <div class="testimonial">
                                <div class="testimonial-holder">
                                    <h6>Very Fast Delivery</h6>
                                    <blockquote>
                                        <p>
                                            “Nulla facilisi. Aenean nec eros. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Suspendisse sollicitudin velit
                                            sed leo.”
                                        </p>
                                    </blockquote>
                                </div>

                                <div class="author-box">
                                    <a href="#" class="avatar">
                                        <img src="{{url('/')}}/landing/images/120x120_avatar1.png" alt="" />
                                    </a>

                                    <div class="author-info">
                                        <span class="author-name">Stacy Haddon</span>
                                        <span class="author-position">Los Angeles</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <div class="testimonial">
                                <div class="testimonial-holder">
                                    <h6>Very Fast Delivery</h6>
                                    <blockquote>
                                        <p>
                                            “Nulla facilisi. Aenean nec eros. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices
                                            posuere cubilia Curae; Suspendisse sollicitudin velit
                                            sed leo.”
                                        </p>
                                    </blockquote>
                                </div>

                                <div class="author-box">
                                    <a href="#" class="avatar">
                                        <img src="{{url('/')}}/landing/images/120x120_avatar2.png" alt="" />
                                    </a>

                                    <div class="author-info">
                                        <span class="author-name">Alan Smith</span>
                                        <span class="author-position">New York</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->

        <!-- page-section -->
        <div class="page-section-bg2">
            <!-- Counter section -->
            <div class="container">
                <div class="table-row">
                    <div class="col-md-4">
                        <h6 class="section-pre-title">why choose us</h6>
                        <h2 class="section-title">Our Advantages</h2>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="counter">
                                    <div class="counter-inner">
                                        <h2
                                            class="timer count-number"
                                            data-to="380"
                                            data-speed="1500"
                                        >
                                            0
                                        </h2>
                                        <p>professionals in our team</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="counter">
                                    <div class="counter-inner">
                                        <h2
                                            class="timer count-number"
                                            data-to="25"
                                            data-speed="1500"
                                        >
                                            0
                                        </h2>
                                        <p>years of successful work</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="counter">
                                    <div class="counter-inner">
                                        <h2
                                            class="timer count-number"
                                            data-to="970"
                                            data-speed="1500"
                                        >
                                            0
                                        </h2>
                                        <p>satisfied clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="counter">
                                    <div class="counter-inner">
                                        <h2
                                            class="timer count-number"
                                            data-to="44000"
                                            data-speed="1500"
                                        >
                                            0
                                        </h2>
                                        <p>square meters warehouse</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->

        <!-- page-section -->
        <div id="get_quote" class="page-section">
            <!-- Quotes section -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="section-pre-title">questions & answers</h6>
                        <h2 class="section-title">Frequently Asked Questions</h2>

                        <div class="accordion">
                            <!--accordion item-->
                            <div class="accordion-item">
                                <h6 class="a-title">Aliquam dapibus tincidunt?</h6>
                                <div class="a-content">
                                    <p>
                                        Donec eget tellus non erat lacinia fermentum. Donec in
                                        velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                        lacinia est. Proin dictum elementum velit. Fusce euismod
                                        consequat ante. Sed in lacus ut enim adipiscing aliquet.
                                    </p>
                                </div>
                            </div>

                            <!--accordion item-->
                            <div class="accordion-item">
                                <h6 class="a-title active">
                                    Nemo enim ipsam voluptatem quia?
                                </h6>
                                <div class="a-content">
                                    <p>
                                        Donec eget tellus non erat lacinia fermentum. Donec in
                                        velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                        lacinia est. Proin dictum elementum velit. Fusce euismod
                                        consequat ante. Sed in lacus ut enim adipiscing aliquet.
                                    </p>
                                </div>
                            </div>

                            <!--accordion item-->
                            <div class="accordion-item">
                                <h6 class="a-title">Proin dictum elementum velit?</h6>
                                <div class="a-content">
                                    <p>
                                        Donec eget tellus non erat lacinia fermentum. Donec in
                                        velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                        lacinia est. Proin dictum elementum velit. Fusce euismod
                                        consequat ante. Sed in lacus ut enim adipiscing aliquet.
                                    </p>
                                </div>
                            </div>

                            <!--accordion item-->
                            <div class="accordion-item">
                                <h6 class="a-title">Vivamus eget nibh?</h6>
                                <div class="a-content">
                                    <p>
                                        Donec eget tellus non erat lacinia fermentum. Donec in
                                        velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                        lacinia est. Proin dictum elementum velit. Fusce euismod
                                        consequat ante. Sed in lacus ut enim adipiscing aliquet.
                                    </p>
                                </div>
                            </div>

                            <!--accordion item-->
                            <div class="accordion-item">
                                <h6 class="a-title">
                                    Voluptatem quia voluptas sit aspernatur?
                                </h6>
                                <div class="a-content">
                                    <p>
                                        Donec eget tellus non erat lacinia fermentum. Donec in
                                        velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                        lacinia est. Proin dictum elementum velit. Fusce euismod
                                        consequat ante. Sed in lacus ut enim adipiscing aliquet.
                                    </p>
                                </div>
                            </div>

                            <!--accordion item-->
                            <div class="accordion-item">
                                <h6 class="a-title">Pellentesque sed dolor?</h6>
                                <div class="a-content">
                                    <p>
                                        Donec eget tellus non erat lacinia fermentum. Donec in
                                        velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                        lacinia est. Proin dictum elementum velit. Fusce euismod
                                        consequat ante. Sed in lacus ut enim adipiscing aliquet.
                                    </p>
                                </div>
                            </div>

                            <!--accordion item-->
                            <div class="accordion-item">
                                <h6 class="a-title">
                                    Duis ac turpis. Integer rutrum ante eu lacus?
                                </h6>
                                <div class="a-content">
                                    <p>
                                        Donec eget tellus non erat lacinia fermentum. Donec in
                                        velit vel ipsum auctor pulvinar. Vestibulum iaculis
                                        lacinia est. Proin dictum elementum velit. Fusce euismod
                                        consequat ante. Sed in lacus ut enim adipiscing aliquet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="section-pre-title">Get a quotation</h6>
                        <h2 class="section-title">Request a Free Quote!</h2>

                        <form class="form-style1 fx-cols-2">
                            <div class="form-column">
                                <input type="text" placeholder="Your Name" />
                            </div>
                            <div class="form-column">
                                <input type="text" placeholder="Email" />
                            </div>
                            <div class="form-column">
                                <input type="text" placeholder="Loading place" />
                            </div>
                            <div class="form-column">
                                <input type="text" placeholder="Unloading place" />
                            </div>
                            <div class="form-column">
                                <input type="text" placeholder="Loading place" />
                            </div>
                            <div class="form-column">
                                <input type="text" placeholder="Unloading place" />
                            </div>
                            <div class="form-column">
                                <div class="custom-select">
                                    <div class="select-title">Type of cargo</div>
                                    <ul id="menu-type" class="select-list"></ul>
                                    <select class="hide">
                                        <option value="menu">Option 1</option>
                                        <option value="menu">Option 2</option>
                                        <option value="menu">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="custom-select">
                                    <div class="select-title">Type of transportation</div>
                                    <ul id="menu-type2" class="select-list"></ul>
                                    <select class="hide">
                                        <option value="menu">Option 1</option>
                                        <option value="menu">Option 2</option>
                                        <option value="menu">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-column-full">
                                <textarea rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="form-column-full">
                                <a href="#" class="btn">Submit Your Quote</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->

        <!-- page-section -->
        <div class="page-section-bg">
            <!-- Brend section -->
            <div class="container">
                <!-- - - - - - - - - - - - - Owl-Carousel - - - - - - - - - - - - - - - -->

                <div class="carousel-type-2">
                    <div
                        class="owl-carousel brend-box"
                        data-max-items="6"
                        data-item-margin="30"
                        data-autoplay="true"
                    >
                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <a href="#"><img src="{{url('/')}}/landing/images/brend1.jpg" alt="" /></a>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <a href="#"><img src="{{url('/')}}/landing/images/brend2.jpg" alt="" /></a>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <a href="#"><img src="{{url('/')}}/landing/images/brend3.jpg" alt="" /></a>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <a href="#"><img src="{{url('/')}}/landing/images/brend4.jpg" alt="" /></a>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <a href="#"><img src="{{url('/')}}/landing/images/brend5.jpg" alt="" /></a>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <a href="#"><img src="{{url('/')}}/landing/images/brend6.jpg" alt="" /></a>
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->

        <!-- page-section -->
        <div class="page-section">
            <!-- Blog section -->
            <div class="container">
                <h6 class="section-pre-title">from our blog</h6>
                <h2 class="section-title">Latest News</h2>

                <!-- - - - - - - - - - - - - Owl-Carousel - - - - - - - - - - - - - - - -->

                <div class="carousel-type-2">
                    <div
                        class="owl-carousel entry-box"
                        data-max-items="3"
                        data-item-margin="30"
                    >
                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->
                            <div class="entry-attachment">
                                <div class="thumbnail-attachment">
                                    <img src="{{url('/')}}/landing/images/360x260_img1.jpg" alt="" />
                                </div>

                                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <time class="entry-date" datetime="2016-01-27"
                                        >24 October 2017</time
                                        >
                                        <a href="#" class="entry-cat">News</a>
                                        <a href="#" class="entry-comments-link">3 comments</a>
                                    </div>

                                    <h5 class="entry-title">
                                        <a href="#"
                                        >In Pede Mi Aliquet Sit Amet Euismod In Auctor</a
                                        >
                                    </h5>

                                    <p>
                                        Ut tellus dolor, dapibus eget, elementum vel, cursus
                                        eleifend, elit. Aenean auctor wisi et urna. Aliquam erat
                                        volutpat.
                                    </p>
                                </div>
                            </div>
                            <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->
                            <div class="entry-attachment">
                                <div class="thumbnail-attachment">
                                    <img src="{{url('/')}}/landing/images/360x260_img2.jpg" alt="" />
                                </div>

                                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <time class="entry-date" datetime="2016-01-27"
                                        >21 October 2017</time
                                        >
                                        <a href="#" class="entry-cat">Advices</a>
                                        <a href="#" class="entry-comments-link">8 comments</a>
                                    </div>

                                    <h5 class="entry-title">
                                        <a href="#">Vestibulum Ante Ipsum</a>
                                    </h5>

                                    <p>
                                        Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor
                                        sit amet, consectetuer adipiscing elit. Ut tellus dolor,
                                        dapibus eget.
                                    </p>
                                </div>
                            </div>
                            <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->

                        <!-- Slide -->
                        <div class="item-carousel">
                            <!-- Carousel Item -->
                            <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->
                            <div class="entry-attachment">
                                <div class="thumbnail-attachment">
                                    <img src="{{url('/')}}/landing/images/360x260_img3.jpg" alt="" />
                                </div>

                                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <time class="entry-date" datetime="2016-01-27"
                                        >24 October 2017</time
                                        >
                                        <a href="#" class="entry-cat">Delivery</a>
                                        <a href="#" class="entry-comments-link">0 comments</a>
                                    </div>

                                    <h5 class="entry-title">
                                        <a href="#">Aliquam Dapibus Tincidunt Metus Auctor </a>
                                    </h5>

                                    <p>
                                        Elementum vel, cursus eleifend, elit. Aenean auctor wisi
                                        et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                                        sit amet eros.
                                    </p>
                                </div>
                            </div>
                            <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->
                            <!-- /Carousel Item -->
                        </div>
                        <!-- /Slide -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->

        <!-- page-section -->
        <div class="call-out">
            <!-- Blog section -->
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h3>
                            Let Us Help You to Find a Solution That Meets Your Needs
                        </h3>
                        <p>
                            Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend,
                            elit. Aenean auctor wisi et urna. Aliquam erat volutpat.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="align-right">
                            <div class="button-holder">
                                <a href="#" class="btn btn-big">Contact Us Now</a>
                                <p>Or Call <span>855-605-8080</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ page-section -->
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <footer id="footer" class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="widget">
                            <h6 class="widget-title">Contact Us</h6>
                            <p>
                                Expeditor Inc.<br />
                                9870 St Vincent Place, Glasgow, <br />
                                DC 45 Fr 45
                            </p>

                            <ul class="contact-info">
                                <li>
                                    <span class="licon-telephone"></span>
                                    <a href="callto:18005596580">+ 1 800 559 6580</a>
                                </li>
                                <li>
                                    <span class="licon-at-sign"></span>
                                    <a href="mailto:mail@companyname.com"
                                    >mail@companyname.com</a
                                    >
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-gplus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-linkedin-1"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-mail"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="widget">
                            <h6 class="widget-title">About Expeditor</h6>
                            <ul class="info-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Global Network</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- - - - - - - - - - - - - - End of Widget - - - - - - - - - - - - - - - - -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="widget">
                            <h6 class="widget-title">Services</h6>
                            <ul class="info-links">
                                <li><a href="#">Road Transport</a></li>
                                <li><a href="#">Sea Freight</a></li>
                                <li><a href="#">Air Freight</a></li>
                                <li><a href="#">Project Forwarding</a></li>
                                <li><a href="#">Logistics</a></li>
                                <li><a href="#">Warehousing</a></li>
                                <li><a href="#">Cargo insurance</a></li>
                                <li><a href="#">Supply Chain</a></li>
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
                        Copyright Expeditor © 2017. All Rights Reserved
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
