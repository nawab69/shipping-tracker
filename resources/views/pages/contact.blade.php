@extends('layouts.landing.app')

@section('content')

<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

<div class="breadcrumbs-wrap data-grad-bg">

    <div class="container">

        <h1 class="page-title">Contact Us</h1>

        <ul class="breadcrumbs">

            <li><a href="{{url('/')}}">Home</a></li>
            <li>Contact us</li>

        </ul>

    </div>

</div>

<!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

<div id="content">

{{--    <!-- Google map -->--}}
{{--    <div class="relative">--}}

{{--        <div id="googleMap" class="map_container"></div>--}}

{{--    </div>--}}

    <!-- page-section -->
    <div class="page-section-bg type2">

        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <h5 class="fw-medium">Office</h5>
                    <p>Room03, 19/F., Wong's Factory Building, <br />
                        368-370 Sha Tsui Road,Tsuen Wan, NT</p>
                    <p>Hong Kong - China</p>
                    <ul class="contact-info">

                        <li><span class="licon-telephone"></span> <a href="callto:+85230115474">+852 3011 5474</a></li>
                        <li><span class="licon-telephone"></span> <a href="callto:+85236980186">+852 3698 0186</a></li>
                        <li><span class="licon-at-sign"></span> <a href="mailto:billychiu@urichf.com.hk">billychiu@urichf.com.hk</a></li>

                    </ul>
                </div>
            </div>

        </div>

    </div>

    <!-- page-section -->
    <div class="page-section">

        <div class="container">

            <div class="row">
                <div class="col-md-6">

                    <h2>Contact Us</h2>
                    <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                    <form id="contact-form" action="" class="contact-form form-style1 fx-cols-2">

                        <div class="form-column">
                            <input type="text" name="cf-name" placeholder="First Name">
                        </div>
                        <div class="form-column">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="form-column">
                            <input type="text" name="cf-email" placeholder="Email">
                        </div>
                        <div class="form-column">
                            <input type="text" placeholder="Phone number">
                        </div>
                        <div class="form-column-full">

                            <div class="custom-select">
                                <div class="select-title">Select a department</div>
                                <ul id="menu-type" class="select-list"></ul>
                                <select class="hide">
                                    <option value="menu">Option 1</option>
                                    <option value="menu">Option 2</option>
                                    <option value="menu">Option 3</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-column-full">
                            <textarea name="cf-message" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="form-column-full">
                            <button type="submit" class="btn" data-type="submit">Send Message</button>
                        </div>

                    </form>

                </div>
                <div class="col-md-6">

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

</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

@endsection
