@extends('layouts.website')

@section('content')



<!--====== BANNER ==========-->

<section>

    <div class="rows inner_banner inner_banner_5">

        <div class="container">

            <h2><span>Now Book -</span> Your Top Day Tours!</h2>

            <ul>

                <li><a href="#inner-page-title">Home</a>

                </li>

                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>

                <li><a href="#inner-page-title" class="bread-acti">Day Tour</a>

                </li>

            </ul>

            <p>Book your top day tours and enjoy your tour with distinctive experience</p>

        </div>

    </div>

</section>
{{asset


    <section>

        <div class="rows pad-bot-redu tb-space">

            <div class="container">{{asset

                <!-- TITLE & DESCRIPTION -->

                <div class="spe-title">{{asset

                    <h2>Top <span>Daasdy Tours</span></h2>



                    <div class="title-line">

                        <div class="tl-1"></div>

                        <div class="tl-2"></div>

                        <div class="tl-3"></div>{{asset

                    </div>
{{asset
                    <p>We offer days tours all over Europe find the perfect days tours that best suits your needs.</p>

                </div>{{asset


{{asset
                <!-- TOUR PLACE 1 -->

                @foreach($sightseeing as $item)

                    <a href="{{url('sightseeingview/details/'.$item->id)}}">

<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

    <!-- OFFER BRAND -->

    <div class="band">

        <div class="box">

            <div class="ribbon"><span></span></div>

        </div>

        {{--<img src="{{url('/theme/travel')}}/images/band.png" alt="" />--}}

    </div>

    <!-- IMAGE -->

    <div class="v_place_img" style="height: 200px">

        <img src="{{url('/').App\StoragePath::path()}}/storage/sightseeing/{{$item->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">

    </div>

    <!-- TOUR TITLE & ICONS -->

    <div class="b_pack rows">
        <!-- TOUR TITLE -->

        <div class="col-md-8 col-sm-8">

            <h4>{{$item->city}}<span class="v_pl_name" style="color: black">{{$item->country}}</span></h4>

        </div>



        <!-- TOUR ICONS -->

        <div class="col-md-4 col-sm-4 pack_icon">

            <ul>

                <li>
                    {{asset
                                            <a href="#"><img src="{{url('/theme/travel')}}/images/clock.png" alt="Date" title="Tour Timing" /> </a>

                </li>{{asset

                                        <li>

                                            <a href="#"><img src="{{url('/theme/travel')}}/images/info.png" alt="Details" title="View more details" /> </a>

                </li>

                <li>

                    <a href="#"><img src="{{url('/theme/travel')}}/images/price.png" alt="Price" title="Price" /> </a>

                </li>

                <li>

                    <a href="#"><img src="{{url('/theme/travel')}}/images/map.png" alt="Location" title="Location" /> </a>

                </li>

            </ul>

        </div>





    </div>

</div>

</a>



@endforeach

</div>

</div>

</section>



{{--<section>

        <div class="rows inner_banner inner_banner_5">

            <div class="container">

                <h2>Top <span>Sight Seeing</span> in this month</h2>

                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>

                <ul>

                    <li><a href="#inner-page-title">Home</a>

                    </li>

                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>

                    <li><a href="#inner-page-title" class="bread-acti">Sight Seeing</a>

                    </li>

                </ul>

                <p>Book Sight Seeing and enjoy your holidays with distinctive experience</p>

            </div>

        </div>

    </section>



    <section>

        <div class="rows pla pad-bot-redu tb-space">

            <div class="pla1 p-home container">

                <div class="spe-title">

                    <h2>Top <span>Sight Seeing</span></h2>

                    <div class="title-line">

                        <div class="tl-1"></div>

                        <div class="tl-2"></div>

                        <div class="tl-3"></div>

                    </div>

                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>

                </div>





                <div class="popu-places-home">

                    <!-- POPULAR PLACES 1 -->

                    @foreach($sightseeing as $item)

                        <div class="col-md-6 col-sm-6 col-xs-12 place">

                            <div class="col-md-6 col-sm-12 col-xs-12"> <img src="{{url('/storage/sightseeing/'.$item->banner)}}" alt="" /> </div>

<div class="col-md-6 col-sm-12 col-xs-12">

    <h3><span>{{$item->name}}</span> </h3> <i class="fa fa-map-marker"></i> {{$item->city."(".$item->country.")"}}

    <p>@php echo substr($item->description,0,100) @endphp</p> <a href="{{url('sightseeingview/details/'.$item->id)}}" class="link-btn">more info</a>
</div>

</div>

@endforeach

</div>

</div>

</div>

</section>--}}

@endsection