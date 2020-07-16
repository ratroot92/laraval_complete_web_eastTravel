@extends('layouts.website')
@section('content')
   {{--  <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_5">
            <div class="container">
                <h2><span>Book -</span> Your Favourite Events Now!</h2>
                <ul>
                    <li><a href="#inner-page-title">Home</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Events</a>
                    </li>
                </ul>
                <p>Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <div class="container">
        <div class="about-us">

            <div class="row">

                <div class="small-12 large-6 columns"><p></p>
                    <div class="col-sm-6">
                        <h1 style="margin-bottom: 40px;text-decoration: underline;
                        -webkit-text-decoration-color:#EA2D5D; /* Safari */
                        text-decoration-color:#EA2D5D;">About Us</h1>

                        <div class="small-12 columns">
                            <strong>East Travel s.r.o</strong>
                        </div>
                        <br>
                    <p dir="ltr"><strong>About us&nbsp;</strong></p>

                    <p dir="ltr">East Travel is an establishment of travel related companies which started their activities from 2006. Starting off with Eastern World, our experience in providing high standard services has been continuously growing, having served thousands of tourists from different countries of Europe and all over the world. Nowadays, East Travel is a Destination Management Company specialising in travel services throughout Central and Eastern Europe. Together with our dynamic team, we are continually working on improving and developing our tours to find new attractive tourist destinations and satisfy our customers&rsquo; needs.<br />
                        &nbsp;</p>
                    </div>

                    <div class="col-sm-6" style="margin-top: 11%">
                        <div class="small-12 large-6 columns"><p><strong>legal information</strong><br /><br>
                                Trade Name: East Travel s.r.o.<br />
                                Headquarters: Business Center Bratislava Mlynsk&eacute; nivy 48 82109 Bratislava -Sk<br />
                                <br />
                                Registration number: 48279994</p>

                            <p>Tax ID: SK2120152375<br />
                                <br />
                                SACKA License Number: 700</p>

                            <p>Insured: Union insurance</p>

                            <p>Member: ETOA, SACKA, JCI, SOPK</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <b>Our Philosophy</b></p>

                    <p dir="ltr">Your vacations should be a time to forget your complex and busy lives so that you can successfully rejuvenate yourself. We are here to help you with choosing the right destination for your trip. Our experienced staff present suggestions and arrangements to make the trip uniquely yours. We will find the perfect destination for you</p>
                </div>
            </div>
            <p>&nbsp;</p>

            <div class="row">
                    <div class="col-sm-6">
                        <b>Our Vision</b></p>

                    <p dir="ltr">Increasing our independent systems. We are working to expand our network of travel agencies. As a result, there will be more options for customers who seek to increase their sales and profit. We also plan to acquire new travel agencies in other countries. This will make sure we expand our strategy to have a commanding presence in the world market.</p>
                    </div>
                </div>
                    <p>&nbsp;</p>
                <div class="row">
                    <div class="col-sm-6">
                    <p dir  ="ltr"><b id="docs-internal-guid-371433a4-7fff-7a75-9117-757bc604a660">Our Philosophy</b></p>

                    <p dir="ltr">Your vacations should be a time to forget your complex and busy lives so that you can successfully rejuvenate yourself. We are here to help you with choosing the right destination for your trip. Our experienced staff present suggestions and arrangements to make the trip uniquely yours. We will find the perfect destination for you.</p>
                </div>
                </div>
            </div>
        </div>
 --}}
@endsection













 <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="row align-center">
                <div class="small-12 large-8 columns content-col">
                    <h1 style="margin-bottom: 40px;text-decoration: underline;
  -webkit-text-decoration-color:#EA2D5D; /* Safari */
  text-decoration-color:#EA2D5D;">Terms &amp; Conditions</h1>
                  {{--  <h1 class="animated fadeInLeft"></h1>
--}}
                    <div class="content animated fadeInLeft delay-250" id="content">{{-- start of content div --}}
                       
              
                     {!! html_entity_decode($content->about) !!}

                    </div>{{-- end of content div --}}

                </div>{{-- end of small-12 large-8 coloumsn content col --}}

                <div class="small-12 large-4 no-padding columns">
                </div>
            </div>{{-- end of row  --}}
            </div>{{-- end of col-ms-12 --}}
        </div>{{-- end of row --}}
    </div>{{-- end of container --}}