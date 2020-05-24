
@extends('layouts.website')
@section('content')

<style>
    nav{
        background-color: white;
        margin-bottom: 20px;
       
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>


<section>
        <div class="rows inner_banner inner_banner_5">
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


    <!--====== ALL POST ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title col-md-12">
                    <h2>Holiday Tour <span>Blog</span> Posts</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <!--===== POSTS ======-->
                <div class="rows">


                    <section class="container-fluid">
<div class="row">
<div class="col-md-12"style="margin-top: 50px;">



 @if(count($blogs)>0)
 @foreach($blogs as $key=>$item)
                    <div class="posts">
                        <div class="col-md-6 col-sm-6 col-xs-12"> <img src="{{$item->banner}}" alt="" /> </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>Thai island hopper east</h3>
                            <h5><span class="post_author">Author: Johnson</span>
                            <!--<span class="post_date">Date: {{$item->created_at}}</span>-->
                            <span class="post_city">City: Illunois</span></h5>
                            <p>{!!$item->description!!}</p>
                            <p>Randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> <a href="blog-inner.html" class="link-btn">Read more</a> </div>
                    </div>
                    @endforeach
        @endforeach

<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center ">
        
</div>    
</div>
    
</div>

       @else       
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center alert-warning  " style="margin: 0px;padding: 0px;">
<p style="font-size: 20px;" class="text-danger font-weight-bold" >No search results </p>
</div>                                                    
</div>                                                
</div>
@endif                    
</div>    
</div>
    
</section>

@endsection