  @if(count($activities)>0)
 @foreach($activities as $key=>$item)
                    <a href="/activity/detail/{{$item->id}}">
                    <div class="col-md-6 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <!-- OFFER BRAND -->
                        <div class="band" style="top: -10px;"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">{{$item->disc}}<br>OFF</span></div>
                    <!--<div class="band">-->
                    <!--    <div class="box">-->
                    <!--        <div class="ribbon"><span>{{$item->disc}}%off</span></div>-->
                    <!--    </div>-->
                    <!--    {{--<img src="{{url('/theme/travel')}}/images/band.png" alt="" />--}}-->
                    <!--</div>-->
                    <!-- IMAGE -->
                        <div class="v_place_img" style="height: 200px">
                            <img src="{{$item->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">
                        </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows"><!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4>{{$item->city}}<span class="v_pl_name" style="color: black">{{$item->country}}</span></h4>
                            </div>

                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{url('/theme/travel')}}/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
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



{{$activities->links()}}

{{$paginator}} 

@else       
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center alert-warning  " style="margin: 0px;padding: 0px;">
<p style="font-size: 20px;" class="text-danger font-weight-bold" >No search results </p>
</div>                                                    
</div>                                                
</div>
@endif            

