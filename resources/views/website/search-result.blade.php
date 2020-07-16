@extends('layouts.website')
@section('content')


<style>
  nav {
    background-color: white;
    display: flex;
    justify-content: center;
    align-content: center;
    height: auto;
  }
</style>
<style>
  @media screen and (min-width: 1230px) {
    .hot-page2-alp-quot-btn {
      font-size: 11px
    }
  }

  @media screen and (min-width: 1050px) {
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

  i.waves-effect.waves-light.tourz-sear-btn.waves-input-wrapper {
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

  .list_3:hover {
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

  .radio-toolbar input[type="radio"]:focus+label {
    border: 2px dashed #444;
  }

  .radio-toolbar input[type="radio"]:checked+label {
    background-color: #e72a43;
    border-color: #e3263f;
    border: none;
    color: #fff;
  }
</style>
<section>
  <div class="tourz-search">
    <div class="container">
      <div class="row">
        <div class="tourz-search-1">
          <!--<h1>Discover the Best of Central Europe!</h1>-->
          <!--<p>Make your choice and plan your trip at the best price in just a few minutes.</p>-->
          <form class="row" action="{{asset('search/result')}}">

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

              <input type="search" name="myCountry" id="select-search" class=" typeahead form-control " autocomplete="off" placeholder="Enter Destination (city or country)" />


              <div style="text-align: left;width:100%;background-color:white!important;position: absolute; z-index:99;    padding: 10px 10px;" id="search_div">
                <a href="{{asset('/')}}">
                  <h2 style="color: #253d52; padding-left: 15px">Home <span style="color: #f4364f;font-size: 2rem;">Page</span></h2>
                </a>
                <!-- put row here -->


                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Austria_cities as $Austria_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Austria_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Austria_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Austria_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Austria_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Austria_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Austria_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Austria_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Austria_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Austria_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Austria_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Austria_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>
                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Germany_cities as $Germany_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;"> {{$Germany_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Germany_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Germany_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Germany_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Germany_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Germany_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Germany_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Germany_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Germany_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Germany_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Germany_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>
                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Italy_cities as $Italy_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Italy_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Italy_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Italy_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Italy_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Italy_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Italy_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Italy_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Italy_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Italy_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Italy_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Italy_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>

                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($France_cities as $France_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$France_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$France_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$France_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$France_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$France_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$France_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$France_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$France_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$France_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$France_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$France_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>

                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($CzechRepubliccities as $CzechRepubliccity)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$CzechRepubliccity[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$CzechRepubliccity[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$CzechRepubliccity[4]->name ?? ''}}</li>

                  @endforeach

                </ul>

                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Slovakia_cities as $Slovakia_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Slovakia_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Slovakia_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovakia_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovakia_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovakia_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovakia_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>

                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Hungary_cities as $Hungary_cities)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Hungary_cities[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$CzechRepubliccity[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Hungary_cities[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Hungary_cities[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Hungary_cities[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Hungary_cities[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Hungary_cities[4]->name ?? ''}}</li>

                  @endforeach

                </ul>
                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Slovenia_cities as $Slovenia_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Slovenia_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Slovenia_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovenia_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovenia_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovenia_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovenia_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovenia_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovenia_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovenia_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Slovenia_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovenia_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>
                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Switzerland_cities as $Switzerland_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Switzerland_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Switzerland_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Switzerland_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Switzerland_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Switzerland_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Switzerland_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Switzerland_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Switzerland_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Switzerland_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Switzerland_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Switzerland_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>
                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Slovakia_cities as $Slovakia_cities)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Slovakia_cities[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$CzechRepubliccity[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$CzechRepubliccity[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Slovakia_cities[4]->name ?? ''}}</li>

                  @endforeach

                </ul>
                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Poland_cities as $Poland_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Poland_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Poland_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Poland_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Poland_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Poland_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Poland_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Poland_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Poland_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Poland_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Poland_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Poland_city[4]->name ?? ''}}</li>

                  @endforeach

                </ul>























                <!-- put row here -->









                <!-- put row here -->








                <!-- put row here -->
                <ul class="col-md-3 list-unstyled  mt-2" style="margin:0px;padding:0px;">


                  @foreach($Croatia_cities as $Croatia_city)
                  <h2 style="color: #253d52;"> <span style="color: #f4364f;font-size: 16px;">{{$Croatia_city[0]->country ?? ''}}</span></h2>
                  <li class="list_3" id="{{$Croatia_city[0]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Croatia_city[0]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Croatia_city[1]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Croatia_city[1]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Croatia_city[2]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Croatia_city[2]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Croatia_city[3]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Croatia_city[3]->name ?? ''}}</li>
                  <li class="list_3" id="{{$Croatia_city[4]->name ?? ''}}" style="font-weight:bold;margin-left:10px">{{$Croatia_city[4]->name ?? ''}}</li>

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
          <!--<div class="tourz-hom-ser">-->
          <!--    <ul>-->
          <!--        <li>-->
          <!--            <a href="{{asset('/packages/list')}}" class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img style="" src="{{asset('theme/travel/')}}/images/icon/packages.png" alt="">Packages</a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--            <a href="{{asset('/daytours/list')}}" class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img style="" src="{{asset('theme/travel/')}}/images/icon/day-tour.png" alt=""> <i class="fas fa-plane-departure"></i>Day Tour</a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--            <a href="{{asset('/activities/list')}}"  class="waves-effect waves-light  tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img style="" src="{{asset('theme/travel/')}}/images/icon/activity.png" alt=""> Activities</a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--            <a href="{{asset('/cruises/list')}}"  class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img style="" src="{{asset('theme/travel/')}}/images/icon/cruiser.png" alt="">Cruises</a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--            <a href="{{asset('/transfers/list')}}" class="waves-effect waves-light tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img style="" src="{{asset('theme/travel/')}}/images/icon/transfers.png" alt=""> <i class="fas fa-plane-departure"></i>Transfers</a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--            <a href="{{asset('/daytours/list')}}" class="waves-effect waves-light  tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img style="" src="{{asset('theme/travel/')}}/images/icon/event.png" alt=""> Events</a>-->
          <!--        </li>-->
          <!--    </ul>-->
          <!--</div>-->
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div id="app">
        @include('flash-message')
        @yield('content')


      </div>
    </div>
  </div>
</div>

<!--<section>-->
<!--  <div class="rows inner_banner inner_banner_5">-->
<!--    <div class="container">-->
<!--      <h2><span>Book -</span> Your Favourite Packages Now!</h2>-->
<!--      <ul>-->
<!--        <li><a href="#inner-page-title">Home</a>-->
<!--        </li>-->
<!--        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>-->
<!--        <li><a href="#inner-page-title" class="bread-acti">packages</a>-->
<!--        </li>-->
<!--      </ul>-->
<!--      <p>Book travel packages and enjoy your holidays with distinctive experience</p>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->


<div class="container" style="padding: 70px 0;">
  <div class="row">

    <div class="col-md-3 ">


    </div>
    <div class="col-md-12 " id="searchRendering">
      @if(count($packages) > 0)
      @foreach($packages as $key=>$item)
      <!-- <a href="/packages/detail/{{$item->id}}"> -->
      <div class="row" style="border:1px solid #e9ecef;background-color: white!important;margin-bottom: 10px;">

        <div class="col-md-3 img-thumbnail  " style="padding:0px; margin:0px;border-radius:0px;">
          <img src="{{$item->banner}}" width="100%" height="150px" alt="" style="padding:0px; margin:0px;">
        </div>
        <div class="col-md-6">
          <div class="trav-list-bod">
            <a href="/packages/detail/{{$item->id}}">
              <h3 style="color:#f4364f;font-family: 'Quicksand', sans-serif;
          font-weight: 700;">{{$item->name}}</h3>
            </a>
            <p>{{substr($item->desc,0,150)}}....</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
            <div class="hot-page2-alp-r-hot-page-rat pull">{{$item->disc}}%Off</div> <span class="hot-list-p3-1">From</span> <span class="hot-list-p3-2">€{{$item->price}}</span><span class="hot-list-p3-4">
              <a href="/packages/detail/{{$item->id}}" class="hot-page2-alp-quot-btn">Book Now</a>

            </span>
          </div>
        </div>
        <div>
          <div class="trav-ami">
            <h4>Detail and Includes</h4>
            <ul>



              @if(count($icons)>1 )

              @foreach($icons as $icon )
              @if($icon->name=='sightseeing' && $icon->fkey==$item->id)
              <li href="/packages/detail/{{$item->id}}"><img src="{{asset('public/images/icon/a14.png')}}" alt=""> <span>Sightseeing</span></li>
              @else
              @endif
              @endforeach

              @foreach($icons as $icon )
              @if($icon->name=='hotel' && $icon->fkey==$item->id)
              <li href="/packages/detail/{{$item->id}}"><img src="{{asset('public/images/icon/a15.png')}}" alt=""> <span>Hotel</span></li>
              @else
              @endif
              @endforeach

              @foreach($icons as $icon)
              @if($icon->name=='transfer' && $icon->fkey==$item->id)
              <li href="/packages/detail/{{$item->id}}"><img src="{{asset('public/images/icon/a16.png')}}" alt=""> <span>Transfer</span></li>
              @else
              @endif
              @endforeach

              @foreach($icons as $icon)
              @if($icon->name=='days' && $icon->fkey==$item->id)
              <li href="/packages/detail/{{$item->id}}"><img src="{{asset('public/images/icon/a18.png')}}" alt=""> <span>{{$item->duration}}</span></li>
              @else
              @endif
              @endforeach

              @foreach($icons as $icon)
              @if($icon->name=='multiple_cities' && $icon->fkey==$item->id)
              <li href="/packages/detail/{{$item->id}}"><img src="{{asset('public/images/icon/a19.png')}}" alt="">
                <span style="font-size: 11px"> Multiple Cities</span>
                @else
                @endif
                @endforeach






                @foreach($icons as $icon )
                @if($icon->name=='breakfast' && $icon->fkey==$item->id)
              <li href="/activity/detail/{{$item->id}}"><img src="https://image.flaticon.com/icons/png/512/84/84072.png" alt=""> <span>Breakfast</span></li>
              @else
              @endif
              @endforeach




              @foreach($icons as $icon )
              @if($icon->name=='breakfast_halfboard' && $icon->fkey==$item->id)
              <li href="/activity/detail/{{$item->id}}"><img src="https://image.flaticon.com/icons/png/512/84/84072.png" alt=""> <span>Half_board</span></li>
              @else
              @endif
              @endforeach





              @foreach($icons as $icon)
              @if($icon->name=='breakfast_full_board' && $icon->fkey==$item->id)
              <li href="/activity/detail/{{$item->id}}"><img src="https://image.flaticon.com/icons/png/512/84/84072.png" alt=""> <span>Full_board</span></li>
              @else
              @endif
              @endforeach




              @foreach($icons as $icon)
              @if($icon->name=='transfer_icon' && $icon->fkey==$item->id)
              <li href="/activity/detail/{{$item->id}}"><img src="http://simpleicon.com/wp-content/uploads/car.png" alt=""> <span>Transfer</span></li>
              @else
              @endif
              @endforeach





              @foreach($icons as $icon)
              @if($icon->name=='cruiser_icon' && $icon->fkey==$item->id)
              <li href="/activity/detail/{{$item->id}}"><img src="https://www.pngrepo.com/png/193576/170/cruiser-war.png" alt="">
                <span style="font-size: 11px"> Cruiser</span>
                @else
                @endif
                @endforeach



                @foreach($icons as $icon)
                @if($icon->name=='flight_icon' && $icon->fkey==$item->id)
              <li href="/activity/detail/{{$item->id}}"><img src="http://cdn.onlinewebfonts.com/svg/img_528940.png" alt=""> <span>Flight</span></li>
              @else
              @endif
              @endforeach





              @foreach($icons as $icon)
              @if($icon->name=='activity_icon' && $icon->fkey==$item->id)
              <li href="/activity/detail/{{$item->id}}"><img src="https://cdn1.iconfinder.com/data/icons/recreational-activities-1/64/16-512.png" alt="">
                <span style="font-size: 11px"> Activity</span>
                @else
                @endif
                @endforeach



              </li>
            </ul>
            @else
            @endif


            {{-- <span>@if(count($cities)>1)
              Multiple Cities
              @else
              @foreach($cities as $item)
              {{$item->name}}
            @endforeach
            @endif</span> --}}
          </div>
        </div>
      </div>
      <!-- </a> -->
      @endforeach


    </div>{{-- end  col-md-8 --}}
  </div>
</div>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      {{$packages->links()}}
    </div>
  </div>
</div>

@else
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 alert alert-warning">
      <p>No results search</p>
    </div>
  </div>
</div>
@endif
</li>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('#search_div').hide();
    $('#search_div').on('focusout', function() {
      $('#search_div').fadeOut(2000);
    })
    $('#select-search').on('click', function() {
      $('#search_div').show();
    })
    $('.list_3').on('click', function() {
      var data_value = $(this).attr('id');
      console.log("asd" + data_value)
      $('#select-search').val('');
      $('#select-search').val(data_value);
      $('#search_div').fadeOut(1000);
    })

  });
</script>
<script>
  $(document).mouseup(function(e) {
    var container = $("#search_div");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.fadeOut(1000);
    }
  });
</script>