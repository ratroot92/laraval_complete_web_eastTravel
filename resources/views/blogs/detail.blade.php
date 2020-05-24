@extends('layouts.website')
@section('content')
<section>
    <div class="rows inner_banner inner_banner_5" style="    background: url(/public/storage/blogs/{{$blog->banner}}); background-size: cover; background-position: center;">
        <div class="container">
            <h2><span>Users -  </span> Your Favourite Blogs Now!</h2>
            <ul>
                <li><a href="#inner-page-title">Home</a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="#inner-page-title" class="bread-acti">Blogs</a>
                </li>
            </ul>
            <p>Book travel blogs and enjoy your holidays with distinctive experience</p>
        </div>
    </div>
</section>
   <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
                <!--===== POSTS ======-->
                <div class="rows">
                    <div class="posts">
                        <!--<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;"> <img src="/public/storage/blogs/{{$blog->banner}}" alt="" /> </div>-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h3>Thai island hopper east</h3>
                            <h5><span class="post_author">Author: {{$blog->name}}</span><span class="post_date">Date: {{$created_at ?? ''}}</span><span class="post_city">City: Illunois</span></h5>
                            <div class="post-btn">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                    </li>
                                </ul>
                            </div>                          
                            <p>{!!$blog->description!!}</p></div>
                    </div>
                </div>
                <!--===== POST END ======-->
            </div>
        </div>
    </section>
    <!--====== TIPS BEFORE TRAVEL ==========-->
    <!--<section>-->
    <!--    <div class="rows tips tips-home tb-space home_title">-->
    <!--        <div class="container tips_1">-->
                <!-- TIPS BEFORE TRAVEL -->
    <!--            <div class="col-md-4 col-sm-6 col-xs-12">-->
    <!--                <h3>Tips Before Travel</h3>-->
    <!--                <div class="tips_left tips_left_1">-->
    <!--                    <h5>Bring copies of your passport</h5>-->
    <!--                    <p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>-->
    <!--                </div>-->
    <!--                <div class="tips_left tips_left_2">-->
    <!--                    <h5>Register with your embassy</h5>-->
    <!--                    <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>-->
    <!--                </div>-->
    <!--                <div class="tips_left tips_left_3">-->
    <!--                    <h5>Always have local cash</h5>-->
    <!--                    <p>Donec et placerat ante. Etiam et velit in massa. </p>-->
    <!--                </div>-->
    <!--            </div>-->
                <!-- CUSTOMER TESTIMONIALS -->
    <!--            <div class="col-md-8 col-sm-6 col-xs-12 testi-2">-->
                    <!-- TESTIMONIAL TITLE -->
    <!--                <h3>Customer Testimonials</h3>-->
    <!--                <div class="testi">-->
    <!--                    <h4>John William</h4>-->
    <!--                    <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>-->
                    <!-- ARRANGEMENTS & HELPS -->
    <!--                <h3>Arrangement & Helps</h3>-->
    <!--                <div class="arrange">-->
    <!--                    <ul>-->
                            <!-- LOCATION MANAGER -->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="images/Location-Manager.png" alt=""> </a>-->
    <!--                        </li>-->
                            <!-- PRIVATE GUIDE -->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="images/Private-Guide.png" alt=""> </a>-->
    <!--                        </li>-->
                            <!-- ARRANGEMENTS -->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="images/Arrangements.png" alt=""> </a>-->
    <!--                        </li>-->
                            <!-- EVENT ACTIVITIES -->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="images/Events-Activities.png" alt=""> </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--====== FOOTER 1 ==========-->
   
@endsection


{{--  --}}