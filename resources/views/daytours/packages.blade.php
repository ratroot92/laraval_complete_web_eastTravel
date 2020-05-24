@extends('layouts.website')
@section('content')
    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_5">
            <div class="container">
                <h2><span>Book -</span> Your Favourite |Daytour Now!</h2>
                <ul>
                    <li><a href="#inner-page-title">Home</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Activities</a>
                    </li>
                </ul>
                <p>Book travel activities and enjoy your holidays with distinctive experience</p>
            </div>
        </div>
    </section>
    <!--====== PACKAGES ==========-->
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 " style="margin-top:20px;margin-bottom:20px;">
     <!-- Material checked -->
<div class="switch  pull-right">{{-- start of switch --}}
  <label>
   GRID VIEW
    <input type="checkbox" onclick="changeView()" onchange="checkView()" onload="checkView()" id="viewCheckbox1" checked="checked">
    <span class="lever"></span> LIST VIEW 
  </label>
</div>{{-- end of switch --}}       
    </div>    
    </div>
    </div>

<br />
<div id="app">
@include('flash-message')
@yield('content')
</div>  




    

@endsection
