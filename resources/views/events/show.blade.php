@extends('layouts.website')

@section('content')
<!--====== BANNER ==========-->
{{--<style>
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>--}}


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
            <p>Book travel Events and enjoy your holidays with distinctive experience</p>
        </div>
    </div>
</section>
<!--====== EVENTS ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg events events-1 tb-space" id="inner-page-title">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title col-md-12">
                <h2>Top<span> Travel Events</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>We offer events all over Europe find the perfect events that best suits your needs.</p>
            </div>
            <div class="col-md-12">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                <div class="table-responsive">
                    <table id="myTable">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th colspan="2" {{--class="e_h1"--}}>Event Name</th>
                                <th>Date</th>
                                <th>Country</th>
                                <th>City</th>
                                <!--<th>Time</th>-->
                                <th>Price</th>
                                <th>Book</th>
                            </tr>
                            @foreach($events as $key=>$e)
                            <tr>
                                <td>{{++$key}}</td>
                                <td colspan="2">{{--<img src="{{asset('/'.App\StoragePath::path())}}/storage/events/{{$e->banner}}" alt="" />--}}<a href="hotels-list.html" class="events-title">{{$e->name}}</a> </td>
                                <td>{{$e->date}}</td>
                                <td>{{$e->country}}</td>
                                <td>{{$e->city}}</td>
                                <!--<td>{{$e->time}}</td>-->
                                <td>{{$e->price}}</td>
                                <td><a href="{{route('events.detail',['id'=>$e->id])}}" class="link-btn">Book Now</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== TIPS BEFORE TRAVEL ==========-->

{{--<section>
        <div class="rows inner_banner inner_banner_5">
            <div class="container">
                <h2><span>Book -</span> Your Favourite Event Now!</h2>
                <ul>
                    <li><a href="#inner-page-title">Home</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Events</a>
                    </li>
                </ul>
                <p>Book travel Events and enjoy your holidays with distinctive experience</p>
            </div>
        </div>
    </section>
    <!--====== PACKAGES ==========-->
    <section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Tour Events</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 Events worldwide.</p>
                </div>

                <!-- TOUR PLACE 1 -->
                @foreach($events as $key=>$e)
                    <a href="{{route('events.detail',['id'=>$e->id])}}">
<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
    <!-- OFFER BRAND -->
    <div class="band">
        <div class="box">
            <div class="ribbon"><span></span></div>
        </div>
        --}}{{--<img src="{{asset('/theme/travel')}}/images/band.png" alt="" />--}}{{--
                            </div>
                            <!-- IMAGE -->
                            <div class="v_place_img" style="height: 200px">
                                <img src="{{asset('/').App\StoragePath::path()}}/storage/packages/{{$e->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">
    </div>
    <!-- TOUR TITLE & ICONS -->
    <div class="b_pack rows">
        <!-- TOUR TITLE -->
        <div class="col-md-8 col-sm-8">
            <h4>{{$e->city}}<span class="v_pl_name" style="color: black">{{$e->country}}</span></h4>
        </div>

        <!-- TOUR ICONS -->
        <div class="col-md-4 col-sm-4 pack_icon">
            <ul>
                <li>
                    <a href="#"><img src="{{asset('/theme/travel')}}/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                </li>
                <li>
                    <a href="#"><img src="{{asset('/theme/travel')}}/images/info.png" alt="Details" title="View more details" /> </a>
                </li>
                <li>
                    <a href="#"><img src="{{asset('/theme/travel')}}/images/price.png" alt="Price" title="Price" /> </a>
                </li>
                <li>
                    <a href="#"><img src="{{asset('/theme/travel')}}/images/map.png" alt="Location" title="Location" /> </a>
                </li>
            </ul>
        </div>


    </div>
</div>
</a>

@endforeach
</div>
</div>
</section>--}}


@endsection