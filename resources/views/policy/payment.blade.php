@extends('layouts.website')
@section('content')
    <!--====== BANNER ==========-->
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
    <br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="row align-center">
                <div class="small-12 large-8 columns content-col">
                    <h1 style="margin-bottom: 40px;text-decoration: underline;
  -webkit-text-decoration-color:#EA2D5D; /* Safari */
  text-decoration-color:#EA2D5D;">Payment Policy</h1>
                  {{--  <h1 class="animated fadeInLeft"></h1>
--}}
                    <div class="content animated fadeInLeft delay-250" id="content">{{-- start of content div --}}
                       
              
                     {!! html_entity_decode($content->payment) !!}

                    </div>{{-- end of content div --}}

                </div>{{-- end of small-12 large-8 coloumsn content col --}}

                <div class="small-12 large-4 no-padding columns">
                </div>
            </div>{{-- end of row  --}}
            </div>{{-- end of col-ms-12 --}}
        </div>{{-- end of row --}}
    </div>{{-- end of container --}}

@endsection
