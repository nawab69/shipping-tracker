@extends('layouts.landing.app')

@section('content')

    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    <div class="breadcrumbs-wrap data-grad-bg">

        <div class="container">

            <h1 class="page-title">About Us</h1>

            <ul class="breadcrumbs">

                <li><a href="{{url('/')}}">Home</a></li>
                <li>About Us</li>

            </ul>

        </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">

        <!-- page-section -->
        <div class="page-section-bg no-space">

            <div class="row">

                <div class="col-md-6">

                    <div class="section-with-video">
                        <div>
                            <h2 class="section-title">Company Profile</h2>
                            <div class="text-size-small">
                                <p>Founded in Hong Kong over 10 years by a team of energetic young people, U-Rich International Forwarding (HK) Co., Ltd. has developed a professional group who offer extensive logistics, warehousing (general & cold storage) and transportation (local fulfillment & cross-border trucking) services to our local and overseas customers.
                                    </p>
                                <p> In order to meet the challenges of diverse and complicated supply chain trends, U-Rich not only devote on global forwarding business, but also on the comprehensive logistics services. U-Rich is a powerful hub to develop integrated process and system which enable our valuable customers to take full advantage of real time cargo operations and achieving high degree of order visibility across the entire supply chain networking. U-Rich always keep improving our existing capacity and facilities that allow us to provide total supply chain/ logistics solutions to the customers and business partners.
                                </p>
                                    Our belief is:
                                <a href="#" class="btn">Always at your service, we remain.</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <img src="{{url('/')}}/image/company.jpg" alt="">

                </div>

            </div>

        </div>

        <!-- page-section -->
        <div class="page-section">

            <!-- Features section -->
            <div class="container">

                <div class="features-area align-left">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">

                            <div class="feature-item">
                                <img src="images/360x210_img4.jpg" alt="">
                                <div class="feature-inner">
                                    <h4>The Company</h4>
                                    <p>U-Rich International Forwarding (HK) Co., Ltd. <br />
                                        Office Address: Room03, 19/F., Wong's Factory Building,<br />
                                        368-370 Sha Tsui Road, Tsuen Wan, NT, Hong Kong<br />
                                        Tel: +852 36980186<br />
                                        Fax: +852 30115474<br />
                                        Website: www.urichlogistics.com (tentative)<br />
                                        Email: billychiu@urichf.com.hk</p>

                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-xs-6">

                            <div class="feature-item">
                                <img src="images/360x210_img2.jpg" alt="">
                                <div class="feature-inner">
                                    <h4>Banker</h4>
                                    <p>Beneficiary: U-RICH INTERNATIONAL FORWARDING (HK) CO., LTD<br />
                                        Address: Room03, 19/F., Wong's Factory Building, 368-370 Sha Tsui Road,<br />
                                        Tsuen Wan, NT, Hong Kong<br />
                                        Account No. : 012 9299 2034 661 (US Currency Account)<br />
                                        012 9291 0125 806 (HK Currency Account)<br />
                                        Banker: BANK OF CHINA (HONG KONG) LIMITED<br />
                                        Address: 1 GARDEN ROAD, HONG KONG<br />
                                        Bank Swift Code: BKCHHKHHXXX</p><br />

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
@endsection
