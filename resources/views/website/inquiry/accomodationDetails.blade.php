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
   label{
	color: black!important;
	font-weight: bold!important;
}   
    </style>

<br>
<div class=""style=" height: auto;padding-top: 20px!important;padding-bottom: 20px!important;
border-top:1px solid black; border-bottom: 1px solid black;">
	
	<center><label for=""  style="margin-left: 22px;color:#f4364f;">Additional Accomodation Details </label></center>

	 <div class  ="row" style="">
	 	
		<div class  ="input-field col s12">
		<input type ="text" class="validate form-control" name="accomodation_city" id="accomodation_city" required="required" placeholder="city">
		
		</div>
		</div>


	    <div class="row">
	    <div class="col-md-6" >
		<label   style="margin-left: 22px;font-size:10px;margin-top:10px;">Check-In Date </label>
		<input type="date" name="accomodation_from" id="accomodation_from"  class="form-control " style="height: 35px;" required="required">
	    </div>
	    <div class="col-md-6">
		<label   style="margin-left: 22px;font-size:10px;margin-top:10px;">Check-out Date</label>
		<input type="date" name="accomodation_to" id="accomodation_to" class="form-control "style="height: 35px;"required="required">
	    </div>
	
	    </div>


	<div class="row mt-2">
		<div class="col-md-4">
			<label style="margin-left: 22px;font-size:10px;margin-top:10px;color:black;font-weight: bold" for="adult_12" >Star Rating</label>
			<select name="adult_12" id="adult_12" class="form-control" style="width: 200px;border-radius: 0px;" required="required">
				<option value="">Select stars </option>
				<option value="1">1 </option>
				<option value="2">2 </option>
				<option value="3">3 </option>
				<option value="4">4 </option>
				<option value="5">5 </option>
				<option value="6">6 </option>
				<option value="7">7 </option>
				
			</select>
		</div>
		<div class="col-md-4">
			<label style="margin-left: 22px;font-size:10px;margin-top:10px;color:black;font-weight: bold" for="child_12_11" >Room Number</label>
			<select name="child_12_11" id="child_12_11" class="form-control" style="width: 200px;border-radius: 0px;" required="required">
				<option value="">Select stars </option>
				<option value="1">1 </option>
				<option value="2">2 </option>
				<option value="3">3 </option>
				<option value="4">4 </option>
				<option value="5">5 </option>
				<option value="6">6 </option>
				<option value="7">7 </option>
				<option value="8">8 </option>
				<option value="9">9 </option>
				<option value="10">10 </option>
				<option value="11">11 </option>
				<option value="12">12 </option>
				<option value="13">13 </option>
				<option value="14">14 </option>
				<option value="15">15 </option>
				<option value="16">16 </option>
				<option value="17">17 </option>
				<option value="18">18 </option>
				<option value="19">19 </option>
				<option value="20">20 </option>
				<option value="21">21 </option>
				<option value="22">22 </option>
				<option value="23">23 </option>
				<option value="24">24 </option>
				<option value="25">25 </option>
				<option value="26">26 </option>
				<option value="27">27 </option>
				<option value="28">28 </option>
				<option value="29">29 </option>
				<option value="30">30 </option>
				<option value="31">31 </option>
				<option value="32">32 </option>
				<option value="33">33 </option>
				<option value="34">34 </option>
				<option value="35">35 </option>
				<option value="36">36 </option>
				<option value="37">37 </option>
				<option value="38">38 </option>
				<option value="39">39 </option>
				<option value="40">40 </option>
				<option value="41">41 </option>
				<option value="42">42 </option>
				<option value="43">43 </option>
				<option value="44">44 </option>
				<option value="45">45 </option>
				<option value="46">46 </option>
				<option value="47">47 </option>
				<option value="48">48 </option>
				<option value="49">49 </option>
				<option value="50">50 </option>
			</select>
		</div>
		<div class="col-md-4">
			<label style="margin-left: 22px;font-size:10px;margin-top:10px;color:black;font-weight: bold" for="child_12_11" >Room Type</label>
			<select name="child_12_11" id="child_12_11" class="form-control" style="width: 200px;border-radius: 0px;" required="required">
				<option value="">Select stars </option>
				<option value="1">Single Room </option>
				<option value="2">Double Room </option>
				<option value="3">Twin Room </option>
				
			</select>
		</div>
	</div>


<div class="row">
	<div class="col-md-12">
		<label class="" style="margin-left: 22px; font-size: 10px;">Additional Options</label>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
			<div class="form-check">
			<input type="checkbox" class="form-check-input" id="property_type_chk" name="property_type_chk" required="required"/>
			<label class="form-check-label"  style="font-size: 10px;" for="property_type_chk">Property type </label>
		</div>
		<br>
		<div id="property_type_div">
			<select name="property_type_value" id="property_type_value" class="form-control " style="width: 100%;border-radius: 0px;" required="required" disabled="disabled" >
				<option value="">Select stars </option>
				<option value="hotel">Hotel </option>
				<option value="apartment">Apartment </option>
				<option value="hostel">Hostel </option>
				<option value="motel">Motel </option>
				<option value="not_important">Not important </option>
			</select>
		</div>
		</div>
</div>



<div class="row">
	<div class="col-md-12">
			<div class="form-check">
			<input type="checkbox" class="form-check-input" id="guest_rating_chk" name="guest_rating_chk" required="required"/>
			<label class="form-check-label"  style="font-size: 10px;" for="guest_rating_chk">Guest ratings </label>
		</div>
		<br>
		<div id="guest_rating_div">
			<select name="guest_rating_value" id="guest_rating_value" class="form-control " style="width: 100%;border-radius: 0px;" required="required"  disabled="disabled" >
				<option value="">Select stars </option>
				<option value="superb:9">Superb: 9 </option>
				<option value="very_good:8">Very Good: 8 </option>
				<option value="good:7">Good: 7 </option>
				<option value="pleasant:6">Pleasant: 6 </option>
				<option value="norating:8">No rating:8 </option>
				<option value="not_important">Not important </option>
				
			</select>
		</div>
		</div>
</div>





<div class="row">
	<div class="col-md-12">
			<div class="form-check">
			<input type="checkbox" class="form-check-input" id="distance_from_city_chk" name="distance_from_city_chk" required="required"/>
			<label class="form-check-label"  style="font-size: 10px;" for="distance_from_city_chk">Distance from city center </label>
		</div>
		<br>
		<div id="distance_from_city_div">
			

			<select name="distance_from_city_value" id="distance_from_city_value" class="form-control " style="width: 100%;border-radius: 0px;" required="required"  disabled="disabled">
			
				<option value="">Select stars </option>
				<option value="1">Less than 1 KM </option>
				<option value="1">Less than 3 KM </option>
				<option value="1">Less than 5 KM </option>
				<option value="not_important">Not important </option>
				
			</select>
					</div>
		</div>



		<div class="col-md-6 " style="margin-top:15px;">
				<label   style="margin-left: 22px;font-size:10px;margin-top:10px;">Landmarks </label>
		<input type="text" name="landmarks" id="landmarks"  class="form-control border border-dark" style="height: 35px;" required="required">
		
	
</div>
</div>



<div class="row">
<div class="col-md-12">
<div class="form-check">
  <input type="checkbox" class="form-check-input" id="room_facilities_chk"  name="room_facilities_chk" required="required"/>
  <label class="form-check-label"  style="font-size: 10px;" for="room_facilities_chk">Room facilities</label>


  <div class=""style="margin-top: 10px!important" id="room_facilities_div">
  <textarea name="room_facilities_value" class="form-control"	id="room_facilities_value"  disabled="disabled" placeholder="Example:"  disabled="disabled"></textarea>  
  </div>
</div>
</div>	
</div>







<div class="row">
<div class="col-md-12">
<div class="form-check">
  <input type="checkbox" class="form-check-input" id="hotel_facilities_chk"  name="hotel_facilities_chk" required="required"/>
  <label class="form-check-label"  style="font-size: 10px;" for="hotel_facilities_chk">Hotel facilities</label>


  <div class=""style="margin-top: 10px!important" id="hotel_facilities_div">
  <textarea name="hotel_facilities_value" class="form-control"	id="hotel_facilities_value"  disabled="disabled" placeholder="Example:"  disabled="disabled" ></textarea>  
  </div>
</div>
</div>	
</div>



<div class="row">
<div class="col-md-12">
<div class="form-check">
  <input type="checkbox" class="form-check-input" id="accomodation_comments_chk"  name="accomodation_comments_chk" required="required"/>
  <label class="form-check-label"  style="font-size: 10px;" for="accomodation_comments_chk">Comments</label>


  <div class=""style="margin-top: 10px!important" id="accomodation_comments_div">
  <textarea name="accomodation_comments_value" class="form-control"	id="accomodation_comments_value"  disabled="disabled"  disabled="disabled" ></textarea>  
  </div>
</div>
</div>	
</div>








</div>


	  <!--   <div class="row">
	    <div class="col-md-6" >
		<label   style="margin-left: 22px;font-size:10px;margin-top:10px;">Check-In Date </label>
		<input type="number" name="min_price" id="min_price"  class="form-control " style="height: 35px;" required="required">
	    </div>
	    <div class="col-md-6">
		<label   style="margin-left: 22px;font-size:10px;margin-top:10px;">Check-out Date</label>
		<input type="number" name="max_price" id="max_price" class="form-control "style="height: 35px;"required="required">
	    </div>
	
	    </div>
 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>   
<script>
    $(document).ready(function (){
    	  $('#property_type_div').hide();
 	  $('#guest_rating_div').hide();
 	    $('#distance_from_city_div').hide();
 	       $('#room_facilities_div').hide();
 	         $('#hotel_facilities_div').hide();
 			$('#accomodation_comments_div').hide();







        $('#property_type_chk').on('click',function(){
   if($('#property_type_chk').prop('checked')) {
   	  $('#property_type_value').prop('disabled',false);
   	  $('#property_type_div').show();
 
   }else{
   	 	  $('#property_type_value').prop('disabled',true);
   	 	  	  $('#property_type_div').hide();
   }
    })


//airline 
$('#guest_rating_chk').on('click',function(){
   if($('#guest_rating_chk').prop('checked')) {
   	  $('#guest_rating_value').prop('disabled',false);
   	  $('#guest_rating_div').show();
 
   }else{
   	 	  $('#guest_rating_value').prop('disabled',true);
   	 	   	  $('#guest_rating_div').hide();
   }
    })




//luggage 
$('#distance_from_city_chk').on('click',function(){
   if($('#distance_from_city_chk').prop('checked')) {
   	  $('#distance_from_city_value').prop('disabled',false);
   	  $('#distance_from_city_div').show();
 
   }else{
   	 	  $('#distance_from_city_value').prop('disabled',true);
   	 	  $('#distance_from_city_div').hide();
   }
    })


//comments 
$('#room_facilities_chk').on('click',function(){
   if($('#room_facilities_chk').prop('checked')) {
   	  $('#room_facilities_value').prop('disabled',false);
   	  $('#room_facilities_div').show();
 
   }else{
   	 	  $('#room_facilities_value').prop('disabled',true);
   	 	    $('#room_facilities_div').hide();
   }
    })













//comments 
$('#hotel_facilities_chk').on('click',function(){
   if($('#hotel_facilities_chk').prop('checked')) {
   	  $('#hotel_facilities_value').prop('disabled',false);
   	  $('#hotel_facilities_div').show();
 
   }else{
   	 	  $('#hotel_facilities_value').prop('disabled',true);
   	 	    $('#hotel_facilities_div').hide();
   }
    })













//comments 
$('#accomodation_comments_chk').on('click',function(){
   if($('#accomodation_comments_chk').prop('checked')) {
   	  $('#accomodation_comments_value').prop('disabled',false);
   	  $('#accomodation_comments_div').show();
 
   }else{
   	 	  $('#accomodation_comments_value').prop('disabled',true);
   	 	    $('#accomodation_comments_div').hide();
   }
    })











    })







</script>