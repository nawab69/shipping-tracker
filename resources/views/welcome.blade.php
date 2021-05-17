@extends('layouts.landing.app')

@section('content')

    <!-- - - - - - - - - - - - - - Revolution Slider - - - - - - - - - - - - - - - - -->

    <div class="rev-slider-wrapper">
        <div id="rev-slider" class="rev-slider" data-version="5.0">
            <ul>
                <li data-transition="fade" class="align-right">
                    <img
                        src="{{url('/')}}/image/slider1.jpg"
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
                        Always
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
                        At your Service
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
                        we remain !
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
                        U-Rich always keep improving our existing capacity and facilities that allow us to<br> provide total supply chain/ logistics solutions to the customers and business partners.

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
                        src="{{url('/')}}/image/slider2.jpg"
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
                        Always
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
                        At your Service we remain !
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
                        U-Rich always keep improving our existing capacity and facilities that allow us to<br> provide total supply chain/ logistics solutions to the customers and business partners.

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
                        <a href="#" class="btn btn-big btn-style-5">See Details</a>
                    </div>

                    <!-- - - - - - - - - - - - - - End of Layer 4 - - - - - - - - - - - - - - - - -->
                </li>

                <li data-transition="fade" class="align-right">
                    <img
                        src="{{url('/')}}/image/slider3.jpg"
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
                        Always
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
                        at your service we remain!
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
                        U-Rich always keep improving our existing capacity and facilities that allow us to<br> provide total supply chain/ logistics solutions to the customers and business partners.

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
                            Home Delivery Service
                        </h2>

                        <!-- Medium text size -->
                        <p class="text-size-medium">
                            If you need assistance getting your purchases home,
                        </p>

                        <p>
                            we can arrange a door-to-door delivery service at reasonable rates.
                        </p>

                        <p>
                            Our delivery service is also available for Outlying Islands in Hong Kong and Macau.
                        </p>

                        <a href="/about-us" class="info-btn">More about us</a>
                    </div>
                    <div class="col-md-8">
                        <div class="banners-wrap fx-cols-2">
                            <!-- Banner -->
                            <a href="/contact-us" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Get a Free Quote!</h5>
                                    <p>
                                        Please contact us to provide details of your intended shipping and inquire about a free quote.
                                    </p>
                                    <div class="btn btn-small">Contact Us</div>
                                    <i class="licon-quote-open"></i>
                                </div>
                            </a>

                            <!-- Banner -->
                            <a href="/track" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Shipment Tracking</h5>
                                    <p>
                                        Use our global tracking system to see where your shipping currently is.
                                    </p>
                                    <div class="btn btn-small">Find Your Cargo</div>
                                    <i class="licon-dolly"></i>
                                </div>
                            </a>

                            <!-- Banner -->
                            <a href="/contact-us" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Shipping Calculator</h5>
                                    <p>
                                        We are working on a shipping calculator that will immediately provide a shipping quote according to your parameters.
                                    </p>
                                    <div class="btn btn-small">Contact Us</div>
                                    <i class="licon-calculator2"></i>
                                </div>
                            </a>

                            <!-- Banner -->
                            <a href="/contact-us" class="banner-item">
                                <div class="banner-inner">
                                    <h5 class="banner-title">Have a Question?</h5>
                                    <p>
                                        We will be happy to answer all your questions, feel free to contact us
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
                                U-Rich is a powerful hub to develop integrated process and system which enable our valuable customers to take
                                full advantage of real time cargo operations and achieving high degree of order visibility across the entire supply chain networking.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="icons-box fx-cols-4">
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-link2"></i>
                                <h5 class="icons-box-title">Supply Chain</h5>
                                <p>
                                    Supply Chain
                                    Management(SCM) service
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-road"></i>
                                <h5 class="icons-box-title">Intermodal and Multimodal</h5>
                                <p>
                                    Intermodal &
                                    Multi-modal Transport services
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
                                    Sea/ Ocean Freight
                                    Forwarding Services
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
                                <h5 class="icons-box-title">Air Freight
                                    </h5>
                                <p>
                                    Air Freight
                                    Forwarding Services
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
                                <h5 class="icons-box-title">Cross-Border</h5>
                                <p>
                                    Cross-Border Trucking Services
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
                                    Logistics & Consultancy Services
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
                                <h5 class="icons-box-title">Distribution & Delivery</h5>
                                <p>
                                    Distribution & Delivery Services
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
                                <h5 class="icons-box-title">O2O Logistics Support</h5>
                                <p>
                                    O2O Logistics Support Services
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="icon-lightbulb"></i>
                                <h5 class="icons-box-title">VAS</h5>
                                <p>
                                    Value-added Services (VAS)
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="icon-cart"></i>
                                <h5 class="icons-box-title">Pre-Retail</h5>
                                <p>
                                    Pre-Retail/
                                    Pre-Sales Services
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="icon-warehouse"></i>
                                <h5 class="icons-box-title">Warehousing</h5>
                                <p>
                                    Temperature-controlled
                                    Warehousing
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="icon-circle-1"></i>
                                <h5 class="icons-box-title">Reverse Logistics &
                                    Disposal</h5>
                                <p>
                                    Reverse Logistics &
                                    Disposal Services
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="icon-home"></i>
                                <h5 class="icons-box-title">Home Delivery</h5>
                                <p>
                                    Home Delivery Services
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="icon-globe-1"></i>
                                <h5 class="icons-box-title">Cluster-Point</h5>
                                <p>
                                    Cluster-Point Distribution Service
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="icon-airport"></i>
                                <h5 class="icons-box-title">Customs Clearance</h5>
                                <p>
                                    Customs Clearance Service
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
                    <div class="icons-wrap">
                        <div class="icons-item">
                            <div class="item-box">
                                <i class="licon-truck"></i>
                                <h5 class="icons-box-title">Cross-Docking Truck</h5>
                                <p>
                                    Cross-Docking Truck Service
                                </p>
                                <a href="#" class="info-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/ page-section -->


    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

@endsection
