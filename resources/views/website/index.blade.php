@extends('layouts.website')
@section('content')
{{-- <style>
table {
display: block;
overflow-x: auto;
white-space: nowrap;
}
</style>--}}
<style>
@media screen and (min-width: 1230px){
.hot-page2-alp-quot-btn {
font-size: 11px
}
}
@media screen and (min-width: 1050px){
.hot-page2-alp-quot-btn {
font-size: 11px;
padding: 3px;
}
}
/*the container must be positioned relative:*/
.autocomplete {
position: relative;
display: inline-block;
}
input {
border: 1px solid transparent;
background-color: #f1f1f1;
padding: 10px;
font-size: 16px;
}
input[type=text] {
background-color: #f1f1f1;
width: 100%;
}
input[type=submit] {
background-color: DodgerBlue;
color: #fff;
cursor: pointer;
}
input.waves-button-input {
width: 100%;
}
.autocomplete-items {
position: absolute;
border: 1px solid #d4d4d4;
border-bottom: none;
border-top: none;
z-index: 99;
/*position the autocomplete items to be the same width as the container:*/
top: 100%;
left: 0;
right: 0;
}
.select-wrapper input.select-dropdown {
height: 45px;
}
.autocomplete-items div {
padding: 10px;
cursor: pointer;
background-color: #fff;
border-bottom: 1px solid #d4d4d4;
}
i.waves-effect.waves-light.tourz-sear-btn.waves-input-wrapper{
line-height: 24px;
}
/*when hovering an item:*/
.autocomplete-items div:hover {
background-color: #e9e9e9;
}
/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
background-color: DodgerBlue !important;
color: #ffffff;
}
.list_3:hover{
font-size: 17px;
color: red;
}
.radio-toolbar {
margin: 0;
float: left;
}
.radio-toolbar input[type="radio"] {
opacity: 0;
position: fixed;
width: 0;
}
.radio-toolbar label {
display: inline-block !important;
background-color: #fff;
padding: 7px 30px;
padding-left: 18px !important;
font-size: 15px !important;
border: none;
border-radius: 0px;
height: auto !important;
}
.radio-toolbar label:hover {
background-color: #e72a43;
color: #ffffff;
}
.radio-toolbar input[type="radio"]:focus + label {
border: 2px dashed #444;
}
.radio-toolbar input[type="radio"]:checked + label {
background-color: #e72a43;
border-color: #e3263f;
border: none;
color: #fff;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section>
  <div id="fb-root"></div>
  <div class="fb-customerchat"
    attribution=setup_tool
    page_id="411933035571511">
  </div>
  <div class="tourz-search">
    <div class="container">
      <div class="row">
        <div class="tourz-search-1">
          <h1>Discover the Best of Central Europe!</h1>
          <p>Make your choice and plan your trip at the best price in just a few minutes.</p>
          <form class="row" action="{{url('search/result')}}">

            <div class="col-sm-8 col-lg-8" class="autocomplete" style="padding: 0px;margin: 0px">
              <div class="radio-toolbar">
                <input type="radio" id="radioPackages" name="options" value="1" checked>
                <label for="radioPackages">Packages</label>
                <input type="radio" id="radioDaytours" name="options" value="2">
                <label for="radioDaytours">DayTour</label>
                <input type="radio" id="radioActivites" name="options" value="3">
                <label for="radioActivites">Activites</label>
                <input type="radio" id="radioCruises" name="options" value="4">
                <label for="radioCruises">DayTour</label>
                <input type="radio" id="radioTransfer" name="options" value="5">
                <label for="radioTransfer">Activites</label>
              </div>
              <input type="search"  name="myCountry" id="select-search" class= " typeahead form-control " autocomplete="off" placeholder="Enter Destination (city or country)"  />


              <div style="text-align: left;width:100%;background-color:white!important;position: absolute; z-index:99;    padding: 10px 10px;" id="search_div">
                <a href="{{url('/cities')}}" ><h2 style="color: #253d52; padding-left: 15px">Popular <span style="color: #f4364f;font-size: 2rem;">Cities</span></h2>
              </a>
              <!-- put row here -->


              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Austria_cities as $Austria_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Austria_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Austria_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Austria_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Austria_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Austria_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Austria_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Austria_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Austria_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Austria_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Austria_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Austria_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>
              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Germany_cities as $Germany_city)
                <h2 style="color: #253d52;"> <span   style="color: #f4364f;font-size: 16px;">  {{$Germany_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Germany_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Germany_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Germany_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Germany_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Germany_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Germany_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Germany_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Germany_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Germany_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Germany_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>
              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Italy_cities as $Italy_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Italy_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Italy_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Italy_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Italy_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Italy_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Italy_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Italy_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Italy_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Italy_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Italy_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Italy_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>

              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">

                @foreach($France_cities as $France_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$France_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$France_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$France_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$France_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$France_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$France_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$France_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$France_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$France_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$France_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$France_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>

              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($CzechRepubliccities as $CzechRepubliccity)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$CzechRepubliccity[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$CzechRepubliccity[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[4]->name ?? ''}}</li>

                @endforeach

              </ul>

              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">

                @foreach($Slovakia_cities as $Slovakia_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Slovakia_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Slovakia_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovakia_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovakia_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovakia_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovakia_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>

              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Hungary_cities as $Hungary_cities)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Hungary_cities[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$CzechRepubliccity[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Hungary_cities[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Hungary_cities[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Hungary_cities[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Hungary_cities[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Hungary_cities[4]->name ?? ''}}</li>

                @endforeach

              </ul>
              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">

                @foreach($Slovenia_cities as $Slovenia_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Slovenia_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Slovenia_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovenia_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovenia_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovenia_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovenia_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovenia_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovenia_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovenia_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Slovenia_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovenia_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>
              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Switzerland_cities as $Switzerland_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Switzerland_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Switzerland_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Switzerland_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Switzerland_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Switzerland_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Switzerland_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Switzerland_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Switzerland_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Switzerland_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Switzerland_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Switzerland_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>
              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Slovakia_cities as $Slovakia_cities)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Slovakia_cities[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$CzechRepubliccity[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$CzechRepubliccity[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[4]->name ?? ''}}</li>

                @endforeach

              </ul>
              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Poland_cities as $Poland_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Poland_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Poland_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Poland_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Poland_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Poland_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Poland_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Poland_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Poland_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Poland_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Poland_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Poland_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>







              <!-- put row here -->




              <!-- put row here -->




              <!-- put row here -->
              <ul class="col-md-3 list-unstyled  mt-2"style="margin:0px;padding:0px;">


                @foreach($Croatia_cities as $Croatia_city)
                <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Croatia_city[0]->country ?? ''}}</span></h2>
                <li class="list_3"id ="{{$Croatia_city[0]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Croatia_city[0]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Croatia_city[1]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Croatia_city[1]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Croatia_city[2]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Croatia_city[2]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Croatia_city[3]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Croatia_city[3]->name ?? ''}}</li>
                <li class="list_3"id ="{{$Croatia_city[4]->name ?? ''}}"style="font-weight:bold;margin-left:10px">{{$Croatia_city[4]->name ?? ''}}</li>

                @endforeach

              </ul>




            </div>





          </div>
          <!--<div class="col-sm-2 col-lg-2" class="autocomplete" style="padding: 0px;margin: 0px">-->
          <!--    <div class="form-group" style="background-color:white">-->

          <!--        <select   id="options" name="options" style="width:100%;" required="required">-->
          <!--            <option>Select</option>-->
          <!--            <option value="1" style="font-size:12px!important;">Packages</option>-->
          <!--            <option value="2" style="font-size:12px!important">Day Tours</option>-->
          <!--            <option value="3" style="font-size:12px!important">Activities</option>-->
          <!--            <option value="4" style="font-size:12px!important">Cruises</option>-->
          <!--            <option value="5" style="font-size:12px!important">Transfers</option>-->
          <!--        </select>-->
          <!--    </div>-->
          <!--</div>-->
          <div class="col-sm-12 col-lg-4" style="display: flex; align-items: flex-end;">
            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn" style="width: 100%;">
          </div>
        </form>
        <div class="tourz-hom-ser">
          <ul>
            <li>
              <a href="{{url('/packages/list')}}" class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img style="" src="{{url('theme/travel/')}}/images/icon/packages.png" alt="">Packages</a>
            </li>
            <li>
              <a href="{{url('/daytours/list')}}" class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img style="" src="{{url('theme/travel/')}}/images/icon/day-tour.png" alt=""> <i class="fas fa-plane-departure"></i>Day Tour</a>
            </li>
            <li>
              <a href="{{url('/activities/list')}}"  class="waves-effect waves-light  tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img style="" src="{{url('theme/travel/')}}/images/icon/activity.png" alt=""> Activities</a>
            </li>
            <li>
              <a href="{{url('/cruises/list')}}"  class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img style="" src="{{url('theme/travel/')}}/images/icon/cruiser.png" alt="">Cruises</a>
            </li>
            <li>
              <a href="{{url('/transfers/list')}}" class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img style="" src="{{url('theme/travel/')}}/images/icon/transfers.png" alt=""> <i class="fas fa-plane-departure"></i>Transfers</a>
            </li>
            <li>
              <a href="{{url('/daytours/list')}}" class="waves-effect waves-light  tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img style="" src="{{url('theme/travel/')}}/images/icon/event.png" alt=""> Events</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--====== POPULAR TOUR PLACES ==========-->
<section>
<div class="rows pad-bot-redu tb-spaces pt-5">
  <div class="container-fluid">
    <!-- TITLE & DESCRIPTION -->
    <div class="spe-title">
      <h2>Top <span>Tour Packages</span></h2>
      <div class="title-line">
        <div class="tl-1"></div>
        <div class="tl-2"></div>
        <div class="tl-3"></div>
      </div>
      <p>We offer tour packages all over Europe find the perfect tour packages that best suits your needs.</p>
    </div>
    <!-- TOUR PLACE 1 -->
    <div class="carousel-wrap">
      <div class="owl-carousel">
        @foreach(DB::table('packages')->orderBy('id','desc')->take(10)->get() as $key=>$s)
        <div class="item">
          <a href="{{url('packages/detail/'.$s->id)}}">
            <div class="col-md-12 col-sm-12 col-xs-12 b_packages wow slideInUp p-t-10" data-wow-duration="0.5s">
              <!-- OFFER BRAND -->
              @if($s->disc!=0)<div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">{{$s->disc}}<br>OFF</span></div>
              @else
              <!--  <div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">No Discount</span></div> -->
              @endif
              <!--    <div class="band">-->
              <!--    <div class="box">-->
              <!--        <div class="ribbon"><span>{{$s->disc}}</span></div>-->
              <!--    </div>-->
              <!--    {{--<span class="w3-tag w3-yellow"></span>--}}-->
              <!--    {{--  <img src="{{url('/theme/travel')}}/images/band.png" alt="" />--}}-->
              <!--</div>-->
              <!-- IMAGE -->
              <div class="v_place_img" style="height: 200px">
                <img src="{{$s->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">
                <!--<img src="{{url('/').App\StoragePath::path()}}/storage/activities/{{$s->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">-->
              </div>
              <!-- TOUR TITLE & ICONS -->
              <div class="b_pack rows"><!-- TOUR TITLE -->
              <div class="col-lg-8 col-md-6">
                <h4>{{$s->name}}<span class="v_pl_name" style="color: black"></span></h4>
              </div>
              <!-- TOUR ICONS -->
              <div class="col-lg-4 col-md-6 pack_icon">
                <a href="/packages/detail/{{$s->id}}" class="hot-page2-alp-quot-btn">Book Now</a>
                <!--<ul>-->
                <!--    <li>-->
                <!--        <a  href="{{url('packages/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/clock.png" alt="Date" title="Tour Timing" /> </a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <a  href="{{url('packages/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/info.png" alt="Details" title="View more details" /> </a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <a  href="{{url('packages/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/price.png" alt="Price" title="Price" /> </a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <a  href="{{url('packages/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/map.png" alt="Location" title="Location" /> </a>-->
                <!--    </li>-->
                <!--</ul>-->
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
<center>
<div class="container">
  <a class ="link-btn" href="{{url('packages/list')}}"> See All Packages</a>
</div>
</center>
</div>
</section>
<section>
<div class="rows pad-bot-redu tb-spaces">
<div class="container-fluid">
  <!-- TITLE & DESCRIPTION -->
  <div class="spe-title">
    <h2>Top <span>
    Day Tours</span></h2>
    <div class="title-line">
      <div class="tl-1"></div>
      <div class="tl-2"></div>
      <div class="tl-3"></div>
    </div>
    <p>We offer days tours all over Europe find the perfect days tours that best suits your needs.</p>
    {{--                    <p>World's leading tour and travels Booking website,Over 30,000 Events worldwide.</p>--}}
  </div>
  <!-- TOUR PLACE 1 -->
  <div class="carousel-wrap">
    <div class="owl-carousel">
      @foreach(DB::table('daytours')->orderBy('id','desc')->get() as $key=>$s)
      <div class="item">
        <a href="{{url('daytour/detail/'.$s->id)}}">
          <div class="col-md-12 col-sm-12 col-xs-12 b_packages wow slideInUp p-t-10" data-wow-duration="0.5s">
            <!-- OFFER BRAND -->
            @if($s->disc!=0)<div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">{{$s->disc}}<br>OFF</span></div>
            @else
            <!--  <div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">No Discount</span></div> -->
            @endif
            <!--    <div class="band">-->
            <!--    <div class="box">-->
            <!--        <div class="ribbon"><span>{{$s->disc}}</span></div>-->
            <!--    </div>-->
            <!--    {{--<span class="w3-tag w3-yellow"></span>--}}-->
            <!--    {{--  <img src="{{url('/theme/travel')}}/images/band.png" alt="" />--}}-->
            <!--</div>-->
            <!-- IMAGE -->
            <div class="v_place_img" style="height: 200px">
              <img src="{{$s->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">
              <!--<img src="{{url('/').App\StoragePath::path()}}/storage/activities/{{$s->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">-->
            </div>
            <!-- TOUR TITLE & ICONS -->
            <div class="b_pack rows"><!-- TOUR TITLE -->
            <div class="col-md-8 col-sm-8">
              <h4>{{$s->name}}<span class="v_pl_name" style="color: black"></span></h4>
            </div>
            <!-- TOUR ICONS -->
            <div class="col-md-4 col-sm-4 pack_icon">
              <a href="/daytour/detail/{{$s->id}}" class="hot-page2-alp-quot-btn">Book Now</a>
              <!--<ul>-->
              <!--    <li>-->
              <!--        <a href="#"><img src="{{url('/theme/travel')}}/images/clock.png" alt="Date" title="Tour Timing" /> </a>-->
              <!--    </li>-->
              <!--    <li>-->
              <!--        <a href="#"><img src="{{url('/theme/travel')}}/images/info.png" alt="Details" title="View more details" /> </a>-->
              <!--    </li>-->
              <!--    <li>-->
              <!--        <a href="#"><img src="{{url('/theme/travel')}}/images/price.png" alt="Price" title="Price" /> </a>-->
              <!--    </li>-->
              <!--    <li>-->
              <!--        <a href="#"><img src="{{url('/theme/travel')}}/images/map.png" alt="Location" title="Location" /> </a>-->
              <!--    </li>-->
              <!--</ul>-->
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
</div>
<center>
<div class="container">
<a class ="link-btn" href="{{url('daytours/list')}}"> See All Day Tours</a>
</div>
</center>
</div>
</section>
<section>
<div class="rows pad-bot-redu tb-spaces">
<div class="container-fluid">
<!-- TITLE & DESCRIPTION -->
<div class="spe-title">
  <h2>Top <span>
  Activities</span></h2>
  <div class="title-line">
    <div class="tl-1"></div>
    <div class="tl-2"></div>
    <div class="tl-3"></div>
  </div>
  <p>We offer activities all over Europe find the perfect activities that best suits your needs.</p>
  {{--                    <p>World's leading tour and travels Booking website,Over 30,000 Events worldwide.</p>--}}
</div>
<!-- TOUR PLACE 1 -->
<div class="carousel-wrap">
  <div class="owl-carousel">
    @foreach(DB::table('activities')->orderBy('id','desc')->take(10)->get() as $key=>$s)
    <div class="item">
      <a href="{{url('activity/detail/'.$s->id)}}">
        <div class="col-md-12 col-sm-12 col-xs-12 b_packages wow slideInUp p-t-10" data-wow-duration="0.5s">
          <!-- OFFER BRAND -->
          @if($s->disc!=0)<div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">{{$s->disc}}<br>OFF</span></div>
          @else
          <!--  <div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">No Discount</span></div> -->
          @endif
          <!--    <div class="band">-->
          <!--    <div class="box">-->
          <!--        <div class="ribbon"><span>{{$s->disc}}</span></div>-->
          <!--    </div>-->
          <!--    {{--<span class="w3-tag w3-yellow"></span>--}}-->
          <!--    {{--  <img src="{{url('/theme/travel')}}/images/band.png" alt="" />--}}-->
          <!--</div>-->
          <!-- IMAGE -->
          <div class="v_place_img" style="height: 200px">
            <img src="{{$s->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">
            <!--<img src="{{url('/').App\StoragePath::path()}}/storage/activities/{{$s->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">-->
          </div>
          <!-- TOUR TITLE & ICONS -->
          <div class="b_pack rows"><!-- TOUR TITLE -->
          <div class="col-md-8 col-sm-8">
            <h4>{{$s->name}}<span class="v_pl_name" style="color: black"></span></h4>
          </div>
          <!-- TOUR ICONS -->
          <div class="col-md-4 col-sm-4 pack_icon">
            <a href="/activity/detail/{{$s->id}}" class="hot-page2-alp-quot-btn">Book Now</a>
            <!--<ul>-->
            <!--    <li>-->
            <!--        <a href="{{url('activity/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/clock.png" alt="Date" title="Tour Timing" /> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="{{url('activity/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/info.png" alt="Details" title="View more details" /> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="{{url('activity/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/price.png" alt="Price" title="Price" /> </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="{{url('activity/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/map.png" alt="Location" title="Location" /> </a>-->
            <!--    </li>-->
            <!--</ul>-->
          </div>
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
</div>
</div>
<center>
<div class="container">
<a class ="link-btn" href="{{url('/activities')}}"> See All Activity</a>
</div>
</center>
</div>
</section>
<section>
<div class="rows pad-bot-redu tb-spaces">
<div class="container-fluid">
<!-- TITLE & DESCRIPTION -->
<div class="spe-title">
<h2>Top <span>
Cruises</span></h2>
<div class="title-line">
  <div class="tl-1"></div>
  <div class="tl-2"></div>
  <div class="tl-3"></div>
</div>
<p>We cruises tours all over Europe find the perfect cruises that best suits your needs.</p>
{{--                    <p>World's leading tour and travels Booking website,Over 30,000 Events worldwide.</p>--}}
</div>
<!-- TOUR PLACE 1 -->
<div class="carousel-wrap">
<div class="owl-carousel">
  @foreach(DB::table('cruises')->orderBy('id','desc')->take(10)->get() as $key=>$s)
  <div class="item">
    <a href="{{url('cruise/detail/'.$s->id)}}">
      <div class="col-md-12 col-sm-12 col-xs-12 b_packages wow slideInUp p-t-10" data-wow-duration="0.5s">
        <!-- OFFER BRAND -->
        @if($s->disc!=0)<div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">{{$s->disc}}<br>OFF</span></div>
        @else
        <!--  <div class="band"> <img src="{{url('/theme/travel')}}/images/icon/ribbon.png" alt="" /><span class="disc-text">No Discount</span></div> -->
        @endif
        <!--    <div class="band">-->
        <!--    <div class="box">-->
        <!--        <div class="ribbon"><span>{{$s->disc}}</span></div>-->
        <!--    </div>-->
        <!--    {{--<span class="w3-tag w3-yellow"></span>--}}-->
        <!--    {{--  <img src="{{url('/theme/travel')}}/images/band.png" alt="" />--}}-->
        <!--</div>-->
        <!-- IMAGE -->
        <div class="v_place_img" style="height: 200px">
          <img src="{{$s->banner}}" alt="Tour Booking" title="Tour Booking" style="height: 100%;width: 100%">
        </div>
        <!-- TOUR TITLE & ICONS -->
        <div class="b_pack rows"><!-- TOUR TITLE -->
        <div class="col-md-8 col-sm-8">
          <h4>{{$s->name}}<span class="v_pl_name" style="color: black"></span></h4>
        </div>
        <!-- TOUR ICONS -->
        <div class="col-md-4 col-sm-4 pack_icon">
          <a href="/cruise/detail/{{$s->id}}" class="hot-page2-alp-quot-btn">Book Now</a>
          <!--<ul>-->
          <!--    <li>-->
          <!--        <a href="{{url('cruise/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/clock.png" alt="Date" title="Tour Timing" /> </a>-->
          <!--    </li>-->
          <!--    <li>-->
          <!--        <a href="{{url('cruise/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/info.png" alt="Details" title="View more details" /> </a>-->
          <!--    </li>-->
          <!--    <li>-->
          <!--        <a href="{{url('cruise/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/price.png" alt="Price" title="Price" /> </a>-->
          <!--    </li>-->
          <!--    <li>-->
          <!--        <a href="{{url('cruise/detail/'.$s->id)}}"><img src="{{url('/theme/travel')}}/images/map.png" alt="Location" title="Location" /> </a>-->
          <!--    </li>-->
          <!--</ul>-->
        </div>
      </div>
    </div>
  </a>
</div>
@endforeach
</div>
</div>
</div>
<center>
<div class="container">
<a class ="link-btn" href="{{url('cruises/list')}}"> See All Cruises</a>
</div>
</center>
</div>
</section>
<section>
<div class="rows tb-spaces pad-top-o pad-bot-redu">
<div class="container-fluid">
<!-- TITLE & DESCRIPTION -->
<div class="spe-title">
<h2>Popular <span>Cities</span> </h2>
<div class="title-line">
<div class="tl-1"></div>
<div class="tl-2"></div>
<div class="tl-3"></div>
</div>
<p>We offer tours all over Europe find the perfect tours that best suits your needs.</p>
</div>
<!-- CITY -->
@foreach($cities as $item)
<div class="col-md-6">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[0]->banner}}" alt="" title="{{ $item[0]->description }}" {{--style="height: 100%;width: 100%"--}}>
  {{--<img src="{{url('/theme/travel')}}/images/listing/home.jpg" alt="">--}} </div>
  <div class="tour-mig-lc-con">
    <h5>{{$item[0]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[0]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[1]->banner}}" alt="" title="{{ $item[1]->description }}" style="height: 150px;width: 100%;">
    {{--<img src="{{url('/theme/travel')}}/images/listing/home3.jpg" alt="">--}}
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[1]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[1]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    {{-- <img src="{{url('/theme/travel')}}/images/listing/home2.jpg" alt="">--}}
    <img src="{{$item[2]->banner}}" alt="" title="{{ $item[2]->description }}" style="height: 150px;width: 100%;">
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[2]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[2]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[3]->banner}}" alt="" title="{{ $item[3]->description }}" style="height: 150px;width: 100%;">
    {{--<img src="{{url('/theme/travel')}}/images/listing/home3.jpg" alt="">--}}
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[3]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[3]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    {{-- <img src="{{url('/theme/travel')}}/images/listing/home2.jpg" alt="">--}}
    <img src="{{$item[4]->banner}}" alt="" title="{{ $item[4]->description }}" style="height: 150px;width: 100%;">
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[4]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[4]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
@endforeach
<div style="height:300px">
</div>
@foreach($cities as $item)
<div class="col-md-3 ">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[6]->banner}}" alt="" title="{{ $item[6]->description }}" style="height: 150px;width: 100%;">
  {{--<img src="{{url('/theme/travel')}}/images/listing/home.jpg" alt="">--}} </div>
  <div class="tour-mig-lc-con">
    <h5>{{$item[6]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[6]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3 ">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[7]->banner}}" alt="" title="{{ $item[7]->description }}" style="height: 150px;width: 100%;">
  {{--<img src="{{url('/theme/travel')}}/images/listing/home.jpg" alt="">--}} </div>
  <div class="tour-mig-lc-con">
    <h5>{{$item[7]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[7]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3 ">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[9]->banner}}" alt="" title="{{ $item[0]->description }}" style="height: 150px;width: 100%;">
  {{--<img src="{{url('/theme/travel')}}/images/listing/home.jpg" alt="">--}} </div>
  <div class="tour-mig-lc-con">
    <h5>{{$item[6]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[6]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3 ">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[8]->banner}}" alt="" title="{{ $item[0]->description }}" style="height: 150px;width: 100%;">
  {{--<img src="{{url('/theme/travel')}}/images/listing/home.jpg" alt="">--}} </div>
  <div class="tour-mig-lc-con">
    <h5>{{$item[6]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[6]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[7]->banner}}" alt="" title="{{ $item[0]->description }}" style="height: 150px;width: 100%;">
    {{--<img src="{{url('/theme/travel')}}/images/listing/home3.jpg" alt="">--}}
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[7]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[7]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    {{-- <img src="{{url('/theme/travel')}}/images/listing/home2.jpg" alt="">--}}
    <img src="{{$item[8]->banner}}" alt="" title="{{ $item[0]->description }}" style="height: 150px;width: 100%;">
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[8]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[8]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    <img src="{{$item[9]->banner}}" alt="" title="{{ $item[0]->description }}" style="height: 150px;width: 100%;">
    {{--<img src="{{url('/theme/travel')}}/images/listing/home3.jpg" alt="">--}}
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[9]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[9]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
<div class="col-md-3">
<a href="">
<div class="tour-mig-like-com">
  <div class="tour-mig-lc-img">
    {{-- <img src="{{url('/theme/travel')}}/images/listing/home2.jpg" alt="">--}}
    <img src="{{$item[5]->banner}}" alt="" title="{{ $item[0]->description }}" style="height: 150px;width: 100%;">
  </div>
  <div class="tour-mig-lc-con tour-mig-lc-con2">
    <h5>{{$item[5]->name}}</h5>
    <p><span>{{--12 Packages--}}</span> {{$item[5]->country}}{{--{{substr($item[0][0]->description,0,50)}}--}}{{--Starting from $2400--}}</p>
  </div>
</div>
</a>
</div>
@endforeach
<div class="col-md-12 col-md-offset-2 mx-auto text-center" style="margin: 15px 0;">
<a class="link-btn" href="http://dvenza.com/cities"> All Destinations</a>
</div>
</div>
</div>
</section>
<!--====== FOOTER 1 ==========-->
<div class="alert cookies" style="z-index: 10000; position: fixed; bottom: -10px;height:45px;">
<p style="font-size: 12px"><i class="fa fa-close" style="float: right;margin-right: 10px" onclick="$(this).parent().parent().toggle()"></i>WE AND OUR PARTNERS USE COOKIES ON THIS SITE TO IMPROVE OUR SERVICE, PERFORM ANALYTICS, PERSONALIZE ADVERTISING, MEASURE ADVERTISING PERFORMANCE, AND REMEMBER WEBSITE PREFERENCES. <a href="{{url('/cookie/policy')}}">COOKIE POLICY</a>
</p>
</div>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
{{-- <script>
window.fbAsyncInit = function() {
FB.init({
appId      : '205766477231808',
autoLogAppEvents : true,
xfbml      : true,
version    : 'v5.0'
});
FB.AppEvents.logPageView();

};
(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) {return;}
js = d.createElement(s);
 js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script> --}}
<script>
window.fbAsyncInit = function() {
FB.init({
appId      : '205766477231808',
xfbml            : true,
version          : 'v6.0'
});
};
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s);
 js.id = id;
js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
$(document).ready(function(){
$('#search_div').hide();
$('#search_div').on('focusout', function(){
$('#search_div').fadeOut(2000);
})
$('#select-search').on('click', function(){
$('#search_div').show();
})
$('.list_3').on('click',function(){
var data_value=$(this).attr('id');
console.log("asd"+data_value)
$('#select-search').val('');
$('#select-search').val(data_value);
$('#search_div').fadeOut(1000);
})
});
</script>
<script>
$(document).mouseup(function(e)
{
var container = $("#search_div");
// if the target of the click isn't the container nor a descendant of the container
if (!container.is(e.target) && container.has(e.target).length === 0)
{
container.fadeOut(1000);
}
});
</script>
{{-- <div class="fb-customerchat"
page_id="411933035571511">
</div> --}}
<!-- Load Facebook SDK for JavaScript -->
<!-- Your customer chat code -->