 <!--====== BANNER ==========-->
    <style type="text/css" media="screen">
       input{
        border: 0.8px solid black!important;
       }
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
       textarea:hover{
        border: 1px solid red!important;
       }
       label{
  color: black!important;
  font-weight: bold!important;
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
<br>
{{-- <div class=""style=" height: auto;padding-top: 20px!important;padding-bottom: 20px!important;
  border-top:1px solid black; border-bottom: 1px solid black;">
  
  <center><label for=""  style="margin-left: 22px;color:#f4364f;">Additional Airport Transfer Details </label></center>
  <div class="row">
    <div class="col-md-6" >
      <label   style="margin-left: 22px;font-size:10px;margin-top:10px;">From Date </label>
      <input type="date" name="airport_from" id="airport_from" placeholder="flight form" class="form-control " style="height: 35px;"required="required">
    </div>
    <div class="col-md-6">
      <label   style="margin-left: 22px;font-size:10px;margin-top:10px;">To Date </label>
      <input type="date" name="airport_to" id="airport_to" class="form-control "style="height: 35px;"required="required">
    </div>
    
  </div>
  
  <div class="row" style="">
    <label   style="margin-left: 37px;font-size:10px;margin-top:10px;">Flight # </label>
    <div class  ="input-field col s12">
      <input type ="text" class="validate" name="flight_number" id="flight_number" required="required">
      <label style="font-size: 10px;">Flight Number</label>
    </div>
  </div>
  <div class="row">
    <label for="" style="margin-left: 30px;font-size:10px;margin-top: 10px;">Select Preffered Transport </label>
    <select name="airport_transport" id="airport_transport" class="form-control" style="width: 200px;margin-left:20px;"required="required" >
      <option value="">Select Prefer Time</option>
      <option value="Bus">Bus </option>
      <option value="Van">Van  </option>
      <option value="Car">Car  </option>
    </select>
  </div>
</div> --}}
<div class=""style=" height: auto;padding-top: 20px!important;padding-bottom: 20px!important;
  border-top:1px solid black; border-bottom: 1px solid black;">
  
  <center><label for=""  style="margin-left: 22px;color:#f4364f;">Additional Airport Transfer Details </label></center>
  <div class="row">
    <div class="col-md-12" >
      
      <input type="text" name="airport_from" id="airport_from" placeholder="From: airport, train, station, city, hotel, other places" class="form-control " placeholder="" style="height: 35px;"required="required">
    </div>
    <div class="col-md-12 "style="margin-top: 15px;">
      
      <input type="text" name="airport_to" id="airport_to" placeholder="To: airport, train, station, city, hotel, other places"class="form-control "style="height: 35px;"required="required">
    </div>
    
  </div>
  {{-- new form inputs  --}}
  <div class="row mt-2">
    <div class="col-md-4">
      <label style="margin-left: 22px;font-size:10px;margin-top:10px;color:black;font-weight: bold" for="transfer_transfer_date" >Transfer date</label>
      <input type="date" value="<?php echo date("Y-m-d");?>" name="transfer_transfer_date" id="transfer_transfer_date" class="form-control" style="height:40px;border-radius: 0px;" required="required"/>
    </div>
    <div class="col-md-4">
      <label style="margin-left: 22px;font-size:10px;margin-top:10px;color:black;font-weight: bold" for="child_12_11" >Pick-up time</label>
      <input type="time" value="13:30" name="transfer_pickup_time" id="transfer_pickup_time" class="form-control" style="height:40px;border-radius: 0px;" required="required"/>
    </div>
    <div class="col-md-4">
      <label style="margin-left: 22px;font-size:12px!important;margin-top:10px;color:black;font-weight: bold" for="transfer_preffered_transport" >Select preffered transport</label>
      <select name="transfer_preffered_transport" id="transfer_preffered_transport" class="form-control" style="height:40px;border-radius: 0px;" required="required">
        <option value="">Select </option>
        <option value="economy">Economy </option>
        <option value="premium">Premium</option>
        <option value="vip">VIP</option>
        <option value="suv">SUV </option>
        <option value="van">Van</option>
        <option value="minibus">Minibus</option>
        <option value="bus">Bus</option>
        <option value="helicopter">Helicopter</option>
        
      </select>
    </div>
  </div>
  <div class="row">
  </div>
  <div class="row">
    <div class="col-md-12" style="margin-top:20px">
      <label class="" style="margin-left: 22px; font-size: 10px;">Additional Options</label>
    </div>
    <div class="col-md-12">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="transfer_book_trip_chck"  name="transfer_book_trip_chck" required="required"/>
        <label class="form-check-label"  style="font-size: 10px;" for="transfer_book_trip_chck">Book a round trip </label>
        <div class="row"style="margin-top: 10px!important;display: flex;flex-direction: row;" id="transfer_book_trip_div">
          <div class="col-md-4"><input type="date" value="<?php echo date("Y-m-d");?>" class="form-control" id="transfer_book_trip_date" disabled="disabled"  /></div>
          <div class="col-md-4"><input type="time" value="13:30" class="form-control "  id="transfer_book_trip_time" disabled="disabled" style=""  /> </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="transfer_by_the_hour_chk"  name="transfer_by_the_hour_chk" required="required"/>
        <label class="form-check-label"  style="font-size: 10px;" for="transfer_by_the_hour_chk">By the hour (DURATION)</label>
        <div class="row"style="margin-top: 10px!important;display: flex;flex-direction: row;">
          <div class="col-md-4" id="transfer_by_the_hour_div">
            <select name="transfer_by_the_hour_value" id="transfer_by_the_hour_value" class="form-control" style="height:40px;border-radius: 0px;" required="required" disabled="disabled" >
              <option value="">Select hour </option>
              <option value="1">1 Hour </option>
              <option value="2">2 Hours</option>
              <option value="3">3 Hours</option>
              <option value="4">4 Hours </option>
              <option value="5">5 Hours</option>
              <option value="6">6 Hours</option>
              <option value="7">7 Hours</option>
              <option value="8">8 Hours</option>
              <option value="9">9 Hours</option>
              <option value="10">10 Hours</option>
              <option value="11">11 Hours </option>
              <option value="12">12 Hours</option>
              <option value="13">13 Hours</option>
              <option value="14">14 Hours </option>
              <option value="15">15 Hours</option>
              <option value="16">16 Hours</option>
              <option value="17">17 Hours</option>
              <option value="18">18 Hours</option>
              <option value="19">19 Hours</option>
              <option value="20">20 Hours</option>
              <option value="21">21 Hours </option>
              <option value="22">22 Hours</option>
              <option value="23">23 Hours</option>
              <option value="24">24 Hours </option>
            </select>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="transfer_flightnumber_check"  name="transfer_flightnumber_check" required="required"/>
        <label class="form-check-label"  style="font-size: 10px;" for="transfer_flightnumber_check">Flight or train number </label>
        <div class="row"style="margin-top: 10px!important;display: flex;flex-direction: row;" id="transfer_flightnumber_div">
        <input type ="text" class="form-control " name="transfer_flightnumber_value" id="transfer_flightnumber_value" placeholder="Example: BA 2243" required="required" disabled="disabled" >  </div>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="transfer_childseats_check"  name="transfer_childseats_check" required="required"/>
      <label class="form-check-label"  style="font-size: 10px;" for="transfer_childseats_check">Child seats </label>
      <div class="row"style="margin-top: 10px!important;display: flex;flex-direction: row;" id="transfer_childseats_div">
        <select name="transfer_childseats_value" id="transfer_childseats_value" class="form-control" style="height:40px;border-radius: 0px;" required="required" disabled="disabled" >
          <option value="">Select </option>
          <option value="">Infant car seat 0-2 Y </option>
          <option value="">Convertible seat 2-4 Y </option>
          <option value="">Booster seat 4-8 Y </option>
        </select></div>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="transfer_passenger_meeting_chk"  name="transfer_passenger_meeting_chk" required="required"/>
      <label class="form-check-label"  style="font-size: 10px;" for="transfer_passenger_meeting_chk">Meeting with a name sign is required </label>
      
      <div class="row"style="margin-top: 10px!important;display: flex;flex-direction: row;" id="transfer_passenger_meeting_div">
      <input type ="text" class="validate" name="transfer_passenger_meeting_value" id="transfer_passenger_meeting_value" placeholder="please fill in the passenger's name" required="required" disabled="disabled" >  </div>
      
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-12">
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="transfer_extra_luggage_check" id="transfer_extra_luggage_check" required="required"/>
    <label class="form-check-label"  style="font-size: 10px;" for="transfer_extra_luggage_check">Extra luggage</label>
    
    <div class="row"style="margin-top: 10px!important;display: flex;flex-direction: row;" id="extra_luggage_div">
      <select class="form-control" name="transfer_extra_luggage_value" id="transfer_extra_luggage_value" placeholder="20 kg" required="required" disabled="disabled" >
        <option value="10">10 kg</option>
        <option value="20">20 kg</option>
        <option value="30">30 kg</option>
        <option value="40">40 kg</option>
        <option value="50">50 kg</option>
        <option value="50+">More than 50 kg</option>
      </select> </div>
      
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-12">
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="transfer_offer_price_chk"  name="transfer_offer_price_chk" required="required"/>
    <label class="form-check-label"  style="font-size: 10px;" for="transfer_offer_price_chk">Offer your price </label>
    
    <div class="row"style="margin-top: 10px!important;display: flex;flex-direction: row;" id="transfer_offer_price_div">
      <div class="col-md-2"><select name="transfer_offer_currency_value" id="transfer_offer_currency_value" class="form-control" style="height:40px;border-radius: 0px;" required="required" disabled="disabled" >
        <option value="$">$</option>
        
        
      </select></div>
      <div class="col-md-4"><input type ="text" class="form-control " name="transfer_offer_price_value" id="transfer_offer_price_value" placeholder=" " required="required" disabled="disabled" > </div>
    </div>
    
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-check">
  <input type="checkbox" class="form-check-input" id="transfer_comments"  name="transfer_comments" required="required"/>
  <label class="form-check-label"  style="font-size: 10px;" for="transfer_comments">Comments</label>
  <div class=""style="margin-top: 10px!important" id="transfer_comments_div">
    <textarea name="transfer_comments_value" class="form-control" id="transfer_comments_value" placeholder="Provide your requirements,special needs or driver task"  disabled="disabled" ></textarea>
  </div>
</div>
</div>
</div>
<!-- 
<div class="row" style="">
<label   style="margin-left: 37px;font-size:10px;margin-top:10px;">Flight # </label>
<div class  ="input-field col s12">
<input type ="text" class="validate" name="flight_number" id="flight_number" required="required">
<label style="font-size: 10px;">Flight Number</label>
</div>
</div> -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function (){
  document.getElementById("transfer_book_trip_date").valueAsDate = new Date();
$('#transfer_book_trip_div').hide();
$('#transfer_by_the_hour_div').hide();
$('#transfer_flightnumber_div').hide();
$('#transfer_childseats_div').hide();
  $('#transfer_passenger_meeting_div').hide();
        $('#transfer_offer_price_div').hide();
   $('#transfer_comments_div').hide();
$('#extra_luggage_div').hide();

//book a round trip
$('#transfer_book_trip_chck').on('click',function(){
if($('#transfer_book_trip_chck').prop('checked')) {
  $('#transfer_book_trip_date').prop('disabled',false);
  $('#transfer_book_trip_time').prop('disabled',false);
  $('#transfer_book_trip_div').show();

}else{
    $('#transfer_book_trip_date').prop('disabled',true);
    $('#transfer_book_trip_time').prop('disabled',true);
      $('#transfer_book_trip_div').hide();
}
})
//transfer_childseats_check
$('#transfer_childseats_check').on('click',function(){
if($('#transfer_childseats_check').prop('checked')) {
  $('#transfer_childseats_value').prop('disabled',false);
  $('#transfer_childseats_div').show();

}else{
    $('#transfer_childseats_value').prop('disabled',true);
    $('#transfer_childseats_div').hide();
}
})
//transfer_by_the_hour_chk
$('#transfer_by_the_hour_chk').on('click',function(){
if($('#transfer_by_the_hour_chk').prop('checked')) {
  $('#transfer_by_the_hour_value').prop('disabled',false);
  $('#transfer_by_the_hour_div').show();

}else{
    $('#transfer_by_the_hour_value').prop('disabled',true);
      $('#transfer_by_the_hour_div').hide();
}
})
//transfer_flightnumber_check
$('#transfer_flightnumber_check').on('click',function(){
if($('#transfer_flightnumber_check').prop('checked')) {
  $('#transfer_flightnumber_value').prop('disabled',false);
  $('#transfer_flightnumber_div').show();

}else{
    $('#transfer_flightnumber_value').prop('disabled',true);
     $('#transfer_flightnumber_div').hide();
}
})
//transfer_passenger_meeting_chk
$('#transfer_passenger_meeting_chk').on('click',function(){
if($('#transfer_passenger_meeting_chk').prop('checked')) {
  $('#transfer_passenger_meeting_value').prop('disabled',false);
  $('#transfer_passenger_meeting_div').show();

}else{
    $('#transfer_passenger_meeting_value').prop('disabled',true);
      $('#transfer_passenger_meeting_div').hide();
}
})
//transfer_extra_luggage_check
$('#transfer_flightnumber_check').on('click',function(){
if($('#transfer_flightnumber_check').prop('checked')) {
  $('#transfer_extra_luggage_value').prop('disabled',false);

}else{
    $('#transfer_extra_luggage_value').prop('disabled',true);
}
})
//transfer_offer_price_chk
$('#transfer_offer_price_chk').on('click',function(){
if($('#transfer_offer_price_chk').prop('checked')) {
  $('#transfer_offer_currency_value').prop('disabled',false);
  $('#transfer_offer_price_value').prop('disabled',false);
  $('#transfer_offer_price_div').show();

}else{
    $('#transfer_offer_price_value').prop('disabled',true);
    $('#transfer_offer_currency_value').prop('disabled',true);
      $('#transfer_offer_price_div').hide();

}
})
//transfer_comments
$('#transfer_comments').on('click',function(){
if($('#transfer_comments').prop('checked')) {
  $('#transfer_comments_value').prop('disabled',false);
     $('#transfer_comments_div').show();


}else{
    $('#transfer_comments_value').prop('disabled',true);
       $('#transfer_comments_div').hide();
    }
    
})
})

//extra luggage
$('#transfer_extra_luggage_check').on('click',function(){
if($('#transfer_extra_luggage_check').prop('checked')) {
  $('#transfer_extra_luggage_value').prop('disabled',false);
  $('#extra_luggage_div').show();

}else{
    $('#transfer_extra_luggage_value').prop('disabled',true);
    $('#extra_luggage_div').hide();
}
})
</script>