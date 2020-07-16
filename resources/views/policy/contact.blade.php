@extends('layouts.website')
@section('content')
    <!--====== BANNER ==========-->
    
    <style>
        .new-con h2 {
    color: #333;
    font-size: 24px;
    font-weight: 600;
    margin: 0;
    margin-bottom: 10px;
}
    </style>
    <section>
		<div class="rows contact-map map-container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11285779.39735409!2d9.284890154070741!3d49.50098939892475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471460b9ae7cc67f%3A0xcd6b6167b1723a7d!2sSlovakia!5e0!3m2!1sen!2s!4v1580143240955!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</section>
    <br><br><br>

    <div class="container" style="padding: 40px 0;">
        <div class="row">
            <div class="col-sm-12">
                <div class="spe-title col-md-12">
					<h2><span>Contact us</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
				</div>
				
				<div class="pg-contact">
                        <!-- <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>The <span>Travel</span></h2>
                            <p>We Provide Outsourced Software Development Services To Over 50 Clients From 21 Countries.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.png" alt="">
                            <h4>Address</h4>
                            <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.
                                <br>Landmark : Next To Airport</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.png" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: 01 234874 965478</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@company.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.png" alt="">
                            <h4>Website</h4>
                            <p> <a href="#">Website: www.mycompany.com</a>
                                <br> <a href="#">Facebook: www.facebook/my</a>
                                <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                        </div> -->
                       <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                           {!! html_entity_decode($content->contact1) !!}
                       </div>
                             <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                           {!! html_entity_decode($content->contact2) !!}
                       </div>    
                      <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                           {!! html_entity_decode($content->contact3) !!}
                       </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                           {!! html_entity_decode($content->contact4) !!}
                       </div>


                     
                       
                    </div>
<!--            <div class="row align-center">-->
<!--                <div class="small-12 large-8 columns content-col">-->
<!--                    <h1 style="margin-bottom: 40px;text-decoration: underline;-->
<!--  -webkit-text-decoration-color:#EA2D5D; /* Safari */-->
<!--  text-decoration-color:#EA2D5D;">Contact Policy</h1>-->
<!--                  {{--  <h1 class="animated fadeInLeft"></h1>-->
<!----}}-->
<!--                    <div class="content animated fadeInLeft delay-250" id="content">{{-- start of content div --}}-->
                       
              

 
                   </div>

            </div>
              <div class="small-12 large-4 no-padding columns">
               </div>
           </div>
            </div>
        </div>
    </div> -->

@endsection
