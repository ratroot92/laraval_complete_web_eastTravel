@extends('layouts.website')
@section('content')
    <!--====== BANNER ==========-->
    <style type="text/css" media="screen">
       input{
        border: 0.8px solid black!important;
       }
       [type="checkbox"] + label {
    position: relative;
    padding-left: 30px;}
       input:hover{
        border: 1px solid red!important;
       }
        select{
        border: 0.8px solid black!important;
       }
       select:hover{
        border: 1px solid red!important;
       }

         textarea{
        border: 0.8px solid black!important;
       }
       select.form-control:not([size]):not([multiple]) {
    height: 35px;
}
       textarea:hover{
        border: 1px solid red!important;
       }
   ::-webkit-input-placeholder {
   font-style: italic;
   font-weight: bold;
   color: black;
}
:-moz-placeholder {
   font-style: italic;
   font-weight: bold;
   color: black;  
}
::-moz-placeholder {
   font-style: italic;
   font-weight: bold;
   color: black;  
}
:-ms-input-placeholder {  
   font-style: italic;
   font-weight: bold;
   color: black; 
}
       
    </style>
    <section>
        <div class="rows inner_banner inner_banner_5">
            <div class="container">
                <h2><span>Cusom Iquiry From -</span> Set your own choices!</h2>
                <ul>
                    <li><a href="#inner-page-title">Home</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Custom Inquiry</a>
                    </li>
                </ul>
                <p>Send Inquiry for travel packages</p>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <div class="container">
        <div class="cus-book-form form_1">
            <form class="contact__form v2-search-form" method="post" action="{{url('/submitinquiry_email')}}">
                @csrf

                @if(Session::has('submit'))
                <div class="alert alert-success contact__msg"  role="alert">
                    Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
                </div>
                @endif
                <div class="row">
                    <div class="input-field col s12">

                        <div class="select-wrapper">

                            <span class="caret">▼</span>
{{--                            <input type="text" class="" readonly="true" data-activates="select-options-48e59078-b850-926a-4bee-7d2c3a962d05" value="Select your package"><ul id="select-options-48e59078-b850-926a-4bee-7d2c3a962d05" class="dropdown-content select-dropdown "><li class="disabled "><span>Select your package</span></li><li class=""><span>Honeymoon Package</span></li><li class=""><span>Family Package</span></li><li class=""><span>Holiday Package</span></li><li class=""><span>Group Package</span></li><li class=""><span>Regular Package</span></li></ul>--}}
                          <!--   <select name="type" class="initialized" required>
                                <option value="" disabled="" selected="">Select your Booking Module</option>
                                <option value="Event">Event</option>
                                <option value="Sight Seeing">Sight Seeing</option>
                                <option value="Tour Package">Tour Package</option>
                                <option value="Activity">Activity</option>
                                <option value="Cruise">Cruise</option>
                                <option value="Transfer">Transfer</option>
                            </select> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 ">
                        <input type="text" class="validate form-control" name="name" id="name"  required=""placeholder="name">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" class="validate form-control" name="phone" id="phone" required="" placeholder="phone">
                      
                    </div>
                    <div class="input-field col s6">
                        <input type="email" class="validate form-control" name="email" id="email" required="" placeholder="email">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                            <input name="number_of_travelers form-control" class="form-control"  placeholder="How many travellers?">
                    </div>


                    <div class="input-field col s12">
                        <textarea class="form-control" name="travelers_description"  placeholder="Details of Traverls. Kids and adults etc"></textarea>
                    </div>

                </div>

                <div class="row">
                <div class="input-field col s12">
                <input type="text" id="select-city-1" class="autocomplete validate form-control" name="city" id="city" placeholder="select city">     
                </div>
                </div>


                <div class="row">
                    <div class="input-field col s6">
                        <div class="select-wrapper">
                            <input type="text" class="form-control" placeholder="Min Price" name="min_price">
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <div class="select-wrapper">
                            <input type="text" class="form-control" placeholder="Max Price" name="max_price">
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <textarea class="form-control" name="description"  placeholder="any other detail?"></textarea>
                    </div>

                </div>


<div class="row ">
 <div style="display: flex;justify-content: space-between;align-items: center;height: 50px;margin:0px;">
                    <!-- Material inline 1 -->
<!-- Material inline 2 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" name="flight_ticket" id="flight_ticket">
    <label class="form-check-label" for="flight_ticket" style="font-size: 9px;">Flight Ticket</label>
</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" name="flight_details"  id="airport_details">
    <label class="form-check-label" for="airport_details" style="font-size: 9px;"> Transfer</label>
</div>

<!-- Material inline 3 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="accomodationDetails">
    <label class="form-check-label" for="accomodationDetails" style="font-size: 9px;">Accommodation</label>
</div>

                <!-- Material inline 1 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="toursDetails">
  <label class="form-check-label" for="toursDetails" style="font-size: 9px;">Tours</label>
</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="cruiseDetails">
    <label class="form-check-label" for="cruiseDetails" style="font-size: 9px;">Cruises</label>
</div>

                <!-- Material inline 1 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="eventDetails">
  <label class="form-check-label" for="eventDetails" style="font-size: 9px;">Events</label>
</div>

 </div>








</div>

{{--  --}}
<div  >
  {{-- flight details  --}}
       <div id="div1">
           
       </div>
   {{-- end flisght details --}}



{{-- flight details  --}}
       <div id="div2">
           
       </div>
   {{-- end flisght details --}}



{{-- flight details  --}}
       <div id="div3">
           
       </div>
   {{-- end flisght details --}}




{{-- flight details  --}}
       <div id="div4">
           
       </div>
   {{-- end flisght details --}}




{{-- flight details  --}}
       <div id="div5">
           
       </div>
   {{-- end flisght details --}}




{{-- flight details  --}}
       <div id="div6">
           
       </div>
   {{-- end flisght details --}}





</div>
{{--  --}}











<div class="row ">
 
                    <!-- Material inline 1 -->
<div class="form-check form-check-inline" >
  <input type="checkbox" class="form-check-input" id="terms" name="terms">
  <label class="form-check-label" for="terms" style="font-size: 9px;"><b>I have read and agree</b> to the <a href="{{url('/termscondition')}}">Terms & conditions</a>, <a href="{{url('/payment/policy')}}">Personal data processing</a> and <a href="{{url('/payment/policy')}}">Privacy Policy</a></a>.</label>
</div>
<br>
<!-- Material inline 2 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="gdpr" name="gdpr">
    <label class="form-check-label" for="gdpr" style="font-size: 9px;"><b>Check this box</b> if you would like to receive emails , SMS , Call from East Travel s.r.o. with travel deals, special offers and other information</label>
</div>
<br>
<br>
</div>




                  



<div class="row">
<div class="input-field col s12">
<i class="waves-effect waves-light tourz-sear-btn v2-ser-btn waves-input-wrapper" style=""><input type="submit" value="Send Inquiry" class="waves-button-input" id="submit"></i>
</div>
</div>




            </form>
        </div>
    </div>
        <br><br>


        

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>   
    <script>
    $(document).ready(function (){
    
    $('#flight_ticket').on('click',function (){
    if($('#flight_ticket').prop('checked')) 
    {
    $.get('/customInquiry/flighDetails',function(data){
    $('#div1').empty().append(data);
    });
    }else
    {
 $('#div1').empty().append();
    }
    });

//airpott deyails 

  $('#airport_details').on('click',function (){
    if($('#airport_details').prop('checked')) 
    {
    $.get('/customInquiry/airportDetails',function(data){
    $('#div2').empty().append(data);
    });
    }else
    {
 $('#div2').empty().append();
    }
    });



  //accomodation  deyails 

  $('#accomodationDetails').on('click',function (){
    if($('#accomodationDetails').prop('checked')) 
    {
    $.get('/customInquiry/accomodationDetails',function(data){
    $('#div3').empty().append(data);
    });
    }else
    {
 $('#div3').empty().append();
    }
    });



  //tours  deyails 

  $('#toursDetails').on('click',function (){
    if($('#toursDetails').prop('checked')) 
    {
    $.get('/customInquiry/toursDetails',function(data){
    $('#div4').empty().append(data);
    });
    }else
    {
 $('#div4').empty().append();
    }
    });






  //trip  deyails 

  $('#cruiseDetails').on('click',function (){
    if($('#cruiseDetails').prop('checked')) 
    {
    $.get('/customInquiry/cruiseDetails',function(data){
    $('#div5').empty().append(data);
    });
    }else
    {
 $('#div5').empty().append();
    }
    });





  //trip  deyails 

  $('#eventDetails').on('click',function (){
    if($('#eventDetails').prop('checked')) 
    {
    $.get('/customInquiry/eventDetails',function(data){
    $('#div6').empty().append(data);
    });
    }else
    {
 $('#div6').empty().append();
    }
    });








//disabale submit button 
$("#submit").attr("disabled", true);


//enable submit button on gdpr-checked
$('#gdpr').on('click',function (){
if($('#gdpr').prop('checked')){
$("#submit").attr("disabled", false);
}
else{
$("#submit").attr("disabled", true);
}


});


    
    });


</script>  


