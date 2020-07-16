@extends('layouts.website')
@section('content')
<!--====== BANNER ==========-->
<section>
    <div class="rows inner_banner" style="background-image: url('{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->banner}}');background-size: cover;">
        <div class="container">
            <ul>
                <li><a href="#inner-page-title">Home</a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                <li><a href="#inner-page-title" class="bread-acti">{{$events[0]->country}}</a>
                </li>
            </ul>
            <p>{{$events[0]->city}}, {{$events[0]->country}} -</p>

        </div>
    </div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
    <div class="rows banner_book" id="inner-page-title">
        <div class="container">
            <div class="banner_book_1">
                <ul>
                    <li class="dl1">Location : {{$events[0]->city}}<span>,{{$events[0]->country}}</span></li>
                    <li class="dl2">Price : €{{$events[0]->price}}</li>
                    <li class="dl3">Duration : 8 Nights/ 9 Days</li>
                    {{-- <li class="dl4"><a href="booking.html">Book Now</a> </li>--}}
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====== TOUR DETAILS ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space">
            <div class="col-md-9">
                <!--====== TOUR TITLE ==========-->
                <div class="tour_head">
                    <h2>{{$events[0]->name}} <span class="">{{--<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
                        </span><span class=""></span></h2>
                </div>
                <!--====== TOUR DESCRIPTION ==========-->
                <div class="">
                    <h3><i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i> Description</h3>
                    <p>{{$events[0]->description}}</p>
                </div>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <div class="hotel-book-room">
                    <h3><i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i> Photo Gallery</h3>
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-1">
                            <li data-target="#myCarousel1" data-slide-to="0"><img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->banner}}" alt="banner">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="1"><img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_1}}" alt="img1">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="2"><img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_2}}" alt="img2">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="3"><img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_3}}" alt="img3">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="4"><img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_3}}" alt="img4">
                            </li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carousel-inner1" role="listbox">
                            <div class="item active"> <img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->banner}}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_1}}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_2}}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_3}}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{asset('/').App\StoragePath::path()}}/storage/events/{{$events[0]->img_4}}" alt="Chania" width="460" height="345"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                        <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
                    </div>
                </div>
                <!--====== TOUR LOCATION ==========-->
                {{--<div class="tour_head1 tout-map map-container">
                        <h3>Location</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780" allowfullscreen></iframe>
                    </div>--}}
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1">
                    <h3>About The Tour</h3>
                    <p>{{$events[0]->abouttour}}</p>
                </div>
                <!--====== DURATION ==========-->
                <div class="tour_head1 l-info-pack-days days">
                    <h3>Detailed Day Wise Itinerary</h3>
                    <p>{{$events[0]->daydetail}}</p>
                </div>
                {{-- <div>--}}
                {{-- <div class="dir-rat">--}}
                {{-- <div class="dir-rat-inn dir-rat-title">--}}
                {{-- <h3>Write Your Rating Here</h3>--}}
                {{-- <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>--}}
                {{-- <fieldset class="rating">--}}
                {{-- <input type="radio" id="star5" name="rating" value="5" />--}}
                {{-- <label class="full" for="star5" title="Awesome - 5 stars"></label>--}}
                {{-- <input type="radio" id="star4half" name="rating" value="4 and a half" />--}}
                {{-- <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>--}}
                {{-- <input type="radio" id="star4" name="rating" value="4" />--}}
                {{-- <label class="full" for="star4" title="Pretty good - 4 stars"></label>--}}
                {{-- <input type="radio" id="star3half" name="rating" value="3 and a half" />--}}
                {{-- <label class="half" for="star3half" title="Meh - 3.5 stars"></label>--}}
                {{-- <input type="radio" id="star3" name="rating" value="3" />--}}
                {{-- <label class="full" for="star3" title="Meh - 3 stars"></label>--}}
                {{-- <input type="radio" id="star2half" name="rating" value="2 and a half" />--}}
                {{-- <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>--}}
                {{-- <input type="radio" id="star2" name="rating" value="2" />--}}
                {{-- <label class="full" for="star2" title="Kinda bad - 2 stars"></label>--}}
                {{-- <input type="radio" id="star1half" name="rating" value="1 and a half" />--}}
                {{-- <label class="half" for="star1half" title="Meh - 1.5 stars"></label>--}}
                {{-- <input type="radio" id="star1" name="rating" value="1" />--}}
                {{-- <label class="full" for="star1" title="Sucks big time - 1 star"></label>--}}
                {{-- <input type="radio" id="starhalf" name="rating" value="half" />--}}
                {{-- <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>--}}
                {{-- </fieldset>--}}
                {{-- </div>--}}
                {{-- <div class="dir-rat-inn">--}}
                {{-- <form class="dir-rat-form">--}}
                {{-- <div class="form-group col-md-6 pad-left-o">--}}
                {{-- <input type="text" class="form-control" id="email11" placeholder="Enter Name"> </div>--}}
                {{-- <div class="form-group col-md-6 pad-left-o">--}}
                {{-- <input type="number" class="form-control" id="email12" placeholder="Enter Mobile"> </div>--}}
                {{-- <div class="form-group col-md-6 pad-left-o">--}}
                {{-- <input type="email" class="form-control" id="email13" placeholder="Enter Email id"> </div>--}}
                {{-- <div class="form-group col-md-6 pad-left-o">--}}
                {{-- <input type="text" class="form-control" id="email14" placeholder="Enter your City"> </div>--}}
                {{-- <div class="form-group col-md-12 pad-left-o">--}}
                {{-- <textarea placeholder="Write your message"></textarea>--}}
                {{-- </div>--}}
                {{-- <div class="form-group col-md-12 pad-left-o">--}}
                {{-- <input type="submit" value="SUBMIT" class="link-btn"> </div>--}}
                {{-- </form>--}}
                {{-- </div>--}}
                {{-- <!--COMMENT RATING-->--}}
                {{-- <div class="dir-rat-inn dir-rat-review">--}}
                {{-- <div class="row">--}}
                {{-- <div class="col-md-3 dir-rat-left"> <img src="images/reviewer/4.jpeg" alt="">--}}
                {{-- <p>Orange Fab & Weld <span>19th January, 2017</span> </p>--}}
                {{-- </div>--}}
                {{-- <div class="col-md-9 dir-rat-right">--}}
                {{-- <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>--}}
                {{-- <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>--}}
                {{-- <ul>--}}
                {{-- <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>--}}
                {{-- </ul>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- <!--COMMENT RATING-->--}}
                {{-- <div class="dir-rat-inn dir-rat-review">--}}
                {{-- <div class="row">--}}
                {{-- <div class="col-md-3 dir-rat-left"> <img src="images/reviewer/3.jpeg" alt="">--}}
                {{-- <p>Orange Fab & Weld <span>19th January, 2017</span> </p>--}}
                {{-- </div>--}}
                {{-- <div class="col-md-9 dir-rat-right">--}}
                {{-- <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>--}}
                {{-- <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>--}}
                {{-- <ul>--}}
                {{-- <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>--}}
                {{-- </ul>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- <!--COMMENT RATING-->--}}
                {{-- <div class="dir-rat-inn dir-rat-review">--}}
                {{-- <div class="row">--}}
                {{-- <div class="col-md-3 dir-rat-left"> <img src="images/reviewer/1.jpg" alt="">--}}
                {{-- <p>Orange Fab & Weld <span>19th January, 2017</span> </p>--}}
                {{-- </div>--}}
                {{-- <div class="col-md-9 dir-rat-right">--}}
                {{-- <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>--}}
                {{-- <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>--}}
                {{-- <ul>--}}
                {{-- <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>--}}
                {{-- <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>--}}
                {{-- </ul>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
            </div>
            <div class="col-md-3 tour_r">
                <!--====== SPECIAL OFFERS ==========-->
                {{--<div class="tour_right tour_offer">
                        <div class="band1"><img src="images/offer.png" alt="" /> </div>
                        <p>Price</p>

                        </h4> <a href="" class="link-btn">Book Now</a>
                    </div>--}}
                @php echo $events[0]->code; @endphp
                <!--====== TRIP INFORMATION ==========-->
                {{-- <div class="tour_right tour_incl tour-ri-com">
                        <h3>Trip Information</h3>
                        <ul>
                            <li>Location : {{$events[0]->place}}</li>
                <li>Arrival Date: Nov 12, 2017</li>
                <li>Departure Date: Nov 21, 2017</li>
                <li>Free Sightseeing & Hotel</li>
                </ul>
            </div>--}}
            {{--<div class="col-sm-12">

                    </div>--}}
            <!--====== TRIP INFORMATION ==========-->
            <div class="tour_right tour_incl tour-ri-com">
                <h3>Trip Information</h3>
                <ul>
                    <li>Location : {{$events[0]->city}}, {{$events[0]->country}}</li>
                    <li>Date: {{$events[0]->date}}</li>
                    <li>Duration: {{--{{$events[0]->duration}}--}}</li>
                </ul>

            </div>
            <!--====== PACKAGE SHARE ==========-->
            <div class="tour_right head_right tour_social tour-ri-com">
                <h3>Share This Package</h3>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                </ul>
            </div>
            <!--====== HELP PACKAGE ==========-->
            <div class="tour_right head_right tour_help tour-ri-com">
                <h3>Help & Support</h3>
                <div class="tour_help_1">
                    <h4 class="tour_help_1_call">Call Us Now</h4>
                    <h4><i class="fa fa-phone" aria-hidden="true"></i> +421-917-251-996</h4>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
<!--====== TIPS BEFORE TRAVEL ==========-->
{{-- <section>
        <div class="rows tips tips-home tb-space home_title">
            <div class="container tips_1">
                <!-- TIPS BEFORE TRAVEL -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h3>Tips Before Travel</h3>
                    <div class="tips_left tips_left_1">
                        <h5>Bring copies of your passport</h5>
                        <p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
                    </div>
                    <div class="tips_left tips_left_2">
                        <h5>Register with your embassy</h5>
                        <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
                    </div>
                    <div class="tips_left tips_left_3">
                        <h5>Always have local cash</h5>
                        <p>Donec et placerat ante. Etiam et velit in massa. </p>
                    </div>
                </div>
                <!-- CUSTOMER TESTIMONIALS -->
                <div class="col-md-8 col-sm-6 col-xs-12 testi-2">
                    <!-- TESTIMONIAL TITLE -->
                    <h3>Customer Testimonials</h3>
                    <div class="testi">
                        <h4>John William</h4>
                        <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
                    <!-- ARRANGEMENTS & HELPS -->
                    <h3>Arrangement & Helps</h3>
                    <div class="arrange">
                        <ul>
                            <!-- LOCATION MANAGER -->
                            <li>
                                <a href="#"><img src="images/Location-Manager.png" alt=""> </a>
                            </li>
                            <!-- PRIVATE GUIDE -->
                            <li>
                                <a href="#"><img src="images/Private-Guide.png" alt=""> </a>
                            </li>
                            <!-- ARRANGEMENTS -->
                            <li>
                                <a href="#"><img src="images/Arrangements.png" alt=""> </a>
                            </li>
                            <!-- EVENT ACTIVITIES -->
                            <li>
                                <a href="#"><img src="images/Events-Activities.png" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
@endsection