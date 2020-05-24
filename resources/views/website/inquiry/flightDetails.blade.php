
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
	
	<center><label for=""  style="margin-left: 22px;color:#f4364f;">Additional Flight Details </label></center>
	
	
	<div class="row">
		<div class="col-md-6" >
			<label   style="font-size:10px;margin-top:10px;">From  </label>
			<input type="text" name="flight_from" id="flight_from" placeholder="flight form" class="form-control " style="height: 35px;"required="required">
		</div>
		<div class="col-md-6">
			<label   style="font-size:10px;margin-top:10px;">To  </label>
			<input type="text" name="flight_to" id="flight_to" class="form-control "style="height: 35px;"required="required">
		</div>
		
	</div>
	
	
	<div class="row">
		<div class="col-md-6" >
			<label   style="font-size:10px;margin-top:10px;">Date  </label>
			<input type="date" name="flight_date" id="flight_date" placeholder="flight date" class="form-control " style="height: 35px;"required="required">
		</div>
		<div class="col-md-6">
			<label for="" style="font-size:10px;margin-top: 10px;">Select Time Prefernce</label>
			
			<select name="flight_time" id="flight_time" class="form-control" style="border-radius: 0px;" required="required">
				<option value="">Select Prefer Time</option>
				<option value="Morning">Morning </option>
				<option value="Afternoon">Afternoon  </option>
				<option value="Evening">Evening  </option>
			</select>
		</div>
		
	</div>
	
	<div class="row mt-2">
		<div class="col-md-6">
			<label style="font-size:10px;margin-top:10px;color:black;font-weight: bold" for="adult_12" >Adult(12+years)</label>
			<select name="adult_12" id="adult_12" class="form-control" style="border-radius: 0px;" required="required">
				<option value="">Select </option>
				<option value="1">1 </option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4 </option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7 </option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10 </option>
			</select>
		</div>
		<div class="col-md-6">
			<label style="font-size:10px;margin-top:10px;color:black;font-weight: bold" for="child_12_11" >Child(12-11 years)</label>
			<select name="child_12_11" id="child_12_11" class="form-control" style="border-radius: 0px;" required="required">
				<option value="">Select </option>
				<option value="1">1 </option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4 </option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7 </option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10 </option>
			</select>
		</div>
		<div class="col-md-6">
			<label style="font-size:10px;margin-top:10px;color:black;font-weight: bold" for="child_12_11" >Infant(under 2  years)</label>
			<select name="child_12_11" id="child_12_11" class="form-control" style="border-radius: 0px;" required="required">
				<option value="">Select </option>
				<option value="1">1 </option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4 </option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7 </option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10 </option>
			</select>
		</div>
	</div>
	
	
	
	<!-- additional options -->
	<div class="row mt-5">
		
		
		<div class="col-md-12">
			
			
			
			<div class="row">
				<div class="col-md-12">
					<label class="" style="margin-left: 12px; font-size: 10px; margin-top: 25px">Additional Options</label>
				</div>
			</div>
			
			<hr style="border-color: #000;margin:0">
			
			<div class="row">
				<div class="col-md-12">
					
					
					
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="direct_flight_only" name="direct_flight_only" required="required"/>
						<label class="form-check-label"  style="font-size: 10px;" for="direct_flight_only">Direct Flight only</label>
					</div>
					
					
					
				</div>
			</div>
			
			
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="flight_time_chk"  name="flight_time_chk" required="required"/>
						<label class="form-check-label"  style="font-size: 10px;" for="flight_time_chk">Time</label>
						
						
						<div class=""style="margin-top: 10px!important" id="flight_time_div">
							<input type="time" class="form-control"	id="flight_time_value" disabled="disabled"  />
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="airline_chk"  name="airline_chk" required="required"/>
						<label class="form-check-label"  style="font-size: 10px;" for="airline_chk">Airline</label>
						
						
						<div class=""style="margin-top: 10px!important" id="airline_div">
							<input type="text" class="form-control"	id="airline_value" name="airline_value" disabled="disabled"  />
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="luggage"  name="luggage" required="required"/>
						<label class="form-check-label"  style="font-size: 10px;" for="luggage">Luggage(Except the hand baggage)</label>
						
						
						<div class=""style="margin-top: 10px!important" id="luggage_div">
							<input type="text" class="form-control"	id="luggage_value" placeholder="20 kg" disabled="disabled"  />
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="travel_insurance"  name="travel_insurance" required="required"/>
						<label class="form-check-label"  style="font-size: 10px;" for="travel_insurance">Travel insurance</label>
						
						
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="meals_snacks"  name="meals_snacks" required="required"/>
						<label class="form-check-label"  style="font-size: 10px;" for="meals_snacks">Meals $ Snacks</label>
						
						
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="comments"  name="comments" required="required"/>
						<label class="form-check-label"  style="font-size: 10px;" for="comments">Comments</label>
						
						
						<div class=""style="margin-top: 10px!important" id="comments_div">
							<textarea name="comments_value" class="form-control"	id="comments_value"  disabled="disabled" ></textarea>
						</div>
					</div>
				</div>
			</div>
			
			
			
		</div>
		
		
		
		
		<div class="col-md-6">
			
		</div>
	</div>
	
	
	
	
	
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function (){
$('#flight_time_div').hide();
$('#airline_div').hide();
$('#luggage_div').hide();
$('#comments_div').hide();










$('#flight_time_chk').on('click',function(){
if($('#flight_time_chk').prop('checked')) {
$('#flight_time_value').prop('disabled',false);
$('#flight_time_div').show();

}else{
$('#flight_time_value').prop('disabled',true);
$('#flight_time_div').hide();
}
})


//airline
$('#airline_chk').on('click',function(){
if($('#airline_chk').prop('checked')) {
$('#airline_value').prop('disabled',false);
$('#airline_div').show();
}else{
$('#airline_value').prop('disabled',true);
$('#airline_div').hide();
}
})




//luggage
$('#luggage').on('click',function(){
if($('#luggage').prop('checked')) {
$('#luggage_value').prop('disabled',false);
$('#luggage_div').show();
}else{
$('#luggage_value').prop('disabled',true);
$('#luggage_div').hide();
}
})


//comments
$('#comments').on('click',function(){
if($('#comments').prop('checked')) {
$('#comments_value').prop('disabled',false);
$('#comments_div').show();

}else{
$('#comments_value').prop('disabled',true);
$('#comments_div').hide();
}
})


})
</script>