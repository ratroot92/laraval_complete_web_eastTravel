<<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
        <style>
        h3, .h3 {
        font-size: 24px;
        }
        table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }
        table td, table th {
        border: 1px solid #ddd;
        padding: 8px;
        }
        table tr:nth-child(even){background-color: #f2f2f2;}
        table tr:hover {background-color: #ddd;}
        table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #f4364f;
        color: white;
        }
        header {
        position: fixed;
        top: 0px;
        left: 0px;
        right: 0px;
        height: 50px;
        /** Extra personal styles **/
        
        color: white;
        
        line-height: 35px;
        }
        footer {
        position: fixed;
        bottom: 0px;
        left: 0px;
        right: 0px;
        height: 50px;
        /** Extra personal styles **/
        
        color: #333;
        
        line-height: 35px;
        }
        </style>
    </head>
    <body>
        <header>
            <div class="tour_head">
                <img src="http://dvenza.com/theme/travel/images/logo.jpg" width="200px">
                <!--<h2>{{$package->name ?? '' }}</h2>-->
            </div>
        </header>
        <footer>
            <div class="tour_head">
                <strong>EMAIL: </strong>info@eastravels.com <br>
                <strong>PHONE:</strong> +421-917-251-996
            </div>
        </footer>
        <!--====== BANNER ==========-->
        <!--<section>-->
        <!--    <div class="rows inner_banner" >-->
        <!--        <div class="container">-->
        <!--            <ul>-->
        <!--                <li><a href="#inner-page-title">Home</a>-->
        <!--                </li>-->
        <!--                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>-->
        <!--                <li><a href="#inner-page-title" class="bread-acti">{{$package->country ?? '' }}</a>-->
        <!--                </li>-->
        <!--            </ul>-->
        <!--            <h3 style="color: white">{{$package->name ?? ''}} </h3>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--====== TOUR DETAILS - BOOKING ==========-->
        <!--<section>-->
        <!--    <div class="rows banner_book" id="inner-page-title">-->
        <!--        <div class="container">-->
        <!--            <div class="banner_book_1">-->
        <!--                <ul>-->
        <!--                    <li class="dl2">Location : {{$package->city ?? ''}}, {{$package->country ?? '' }}</li>-->
        <!--                    <li class="dl2">Price : ${{$package->price ?? '' }}</li>-->
        <!--                    <li class="dl2">Duration : {{$package->duration ?? '' }}</li>-->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--====== TOUR DETAILS ==========-->
        <section>
            <!--<div class="row">-->
            <!--    <div class="col-md-12 text-center" style="margin-top:20px;">-->
            <!--        <button type="button" class="btn btn-danger btn-lg" style="border-radius: 0px;font-weight: bold;"id="Btnpdf" data-task={{$package->id ?? ''}}>Download As PDF</button>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="rows inn-page-bg com-colo">
                <div class="container inn-page-con-bg tb-space">
                    <div class="col-md-8 p-t-10" style="margin-top: 50px">
                        <!--====== TOUR TITLE ==========-->
                        <div class="tour_head">
                            <img src="http://dvenza.com/theme/travel/images/logo.jpg" width="200px">
                            <h2>{{$package->name ?? '' }}</h2>
                        </div>
                        <!--====== TOUR DESCRIPTION ==========-->
                        <div class="">
                            <h3><i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i> Description</h3>
                            <p>{{$package->desc ?? '' }}</p>
                        </div>
                        <!--====== ROOMS: HOTEL BOOKING ==========-->
                        <!--                    <div class="hotel-book-room">-->
                        <!--                        <h3><i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i> Photo Gallery</h3>-->
                        <!--<div id="myCarousel1" class="carousel slide" data-ride="carousel">-->
                        <!-- Indicators -->
                        <!--                            <ol class="carousel-indicators carousel-indicators-1">-->
                        
                        
                        <!--                            </div>-->
                        <!-- Left and right controls -->
                        <!--                            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>-->
                        <!--                            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>-->
                        <!--                        </div>-->
                        
                    </div>
                    <div class="row">
                        <h3>
                        <i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i>
                        About The Tour
                        </h3>
                        @php echo  $package->about ?? ''@endphp
                    </div>
                    <div class="row">
                        <h3>
                        <i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i>
                        Detailed Day Wise Itinerary
                        </h3>
                        @php echo  $package->day_detail ?? ''@endphp
                    </div>
                    <div class="row">
                        <h3>
                        <i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i>
                        Terms & Conditions
                        </h3>
                        @php echo  $package->terms@endphp
                    </div>
                    <div class="row">
                        <h3>
                        <i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i>
                        Payment Policy
                        </h3>
                        @php echo  $package->payment_policy@endphp
                    </div>
                    <div class="row">
                        <h3>
                        <i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i>
                        Cancellation Policy
                        </h3>
                        @php echo  $package->cancellation_policy@endphp
                    </div>
                    <div class="row">
                        <h3>
                        <i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i>
                        Visa Info
                        </h3>
                        @php echo  $package->visa_info@endphp
                    </div>
                    <div class="row">
                        <h3>
                        <i class="fa fa-umbrella" style="background-color: darkorange;font-size: 20px"></i>
                        Other Notes
                        </h3>
                        @php echo  $package->notes@endphp
                    </div>
                    <div class="row">
                        <div class="col-md-12"style="padding: 0;">
                            <div class="db-2" style="width: 100%;margin: 0;">
                                <div class="db-2-com db-2-main">
                                    <h4>More Information</h4>
                                    <div class="db-2-main-com db-2-main-com-table">
                                        <table class="responsive-table">
                                            <tbody>
                                                <tr>
                                                    <td>Group Size</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->grpsize@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Tour Style</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->tourstyle@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Tour Language</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->tourlanguage@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Start/End Location</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->startloc@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Availablity</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->avalibilitydetails@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Transport Details</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->tranportdetails@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Accomodation Details</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->accomodationdetails@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Meal Details</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->mealdetails@endphp</td>
                                                </tr>
                                                <tr>
                                                    <td>Guide Details</td>
                                                    <td>:</td>
                                                    <td>@php echo  $package->guidedetails@endphp</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 tour_r">
                    <!--====== SPECIAL OFFERS ==========-->
                    <div class="tour_right tour_offer" style="background: transparent">
                        <div class="band1"><img src="images/offer.png" alt="" /> </div>
                        {{--<p class="h3 text text-primary">Price $ {{$packages[0]->price ?? '' }}</p>--}}
                        {{--<a class="link-btn">Book Now</a>--}} </div>
                        <!--@php echo $package->code ?? '' @endphp-->
                        <!--====== TRIP INFORMATION ==========-->
                        <div class="tour_right tour_incl tour-ri-com">
                            <h3>Trip Information</h3>
                            <ul>
                                <li>Location : {{$package->city ?? ''}}, {{$package->country ?? '' }}</li>
                                {{-- <li>Date: {{$package->date ?? '' }}</li> --}}
                                <li>Duration: {{$package->duration ?? '' }}</li>
                            </ul>
                        </div>
                        <!--====== PACKAGE SHARE ==========-->
                        <!--<div class="tour_right head_right tour_social tour-ri-com">-->
                        <!--    <h3>Share This Package</h3>-->
                        <!--    <ul>-->
                        <!--        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>-->
                        <!--        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>-->
                        <!--        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>-->
                        <!--        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>-->
                        <!--        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <!--====== HELP PACKAGE ==========-->
                        <div class="tour_right head_right tour_help tour-ri-com">
                            <!--<h3>Help & Support</h3>-->
                            <div class="tour_help_1">
                                <h4 class="tour_help_1_call">Call Us Now</h4>
                            <h4><i class="fa fa-phone" aria-hidden="true"></i> +421-917-251-996</h4> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>