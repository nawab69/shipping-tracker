@extends('layouts.landing.app')

@section('content')

    <div class="breadcrumbs-wrap" data-bg="{{url('/')}}/landing/images/3095x2066_bg.jpg">

        <div class="container">

            <h1 class="page-title">Shipment Tracking</h1>

            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>Shipment Tracking</li>

            </ul>

        </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

        <div class="container">

            <div class="row">
                <div class="col-sm-8">

                    <h2>Track Your Shipment</h2>
                    <p>Please enter information below in order to calculate the shipment.</p>
                    <form method="post" action="{{route('track.now')}}" class="form-style1 fx-cols-2">
                        @csrf
                        <div class="form-column">
                            <input type="text" placeholder="Tracking number" name="shipping_id">
                        </div>
                        <div class="form-column-full">
                            <button type="submit" class="btn">Track Shipment</button>
                        </div>

                    </form>

                </div>
                <div class="col-sm-4">

                    <div class="banners-wrap">

                        <!-- Banner -->
                        <a href="#" class="banner-item">
                            <div class="banner-inner">
                                <h5 class="banner-title">Have a Question?</h5>
                                <p>Donec sagittis euismod purus.Sed ut perspiciatis unde omnis iste natus error.</p>
                                <div class="btn btn-small">Contact Us</div>
                                <i class="licon-question-circle"></i>
                            </div>
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
@endsection
