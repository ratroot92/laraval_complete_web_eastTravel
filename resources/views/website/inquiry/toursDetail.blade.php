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
<div class=""style=" height: auto;padding-top: 20px!important;padding-bottom: 20px!important;
border-top:1px solid black; border-bottom: 1px solid black;">
	
	<center><label for=""  style="margin-left: 22px;color:#f4364f;">Additional Tours Details </label></center>

<div class  ="row" style="">
	
		<div class  ="input-field col s12">
		<input type ="text" class="validate form-control" name="tour_city" id="tour_city" required="required" placeholder="city">
	
		</div>
		</div>



	    <div class="row">
	    <div class="col-md-12" >
		<label   style="margin-left: 22px;font-size:10px;margin-top:10px;">Tour Date </label>
		<input type="date" name="tour_date" id="tour_date" placeholder="flight form" class="form-control " style="height: 35px;" required="required">
	    </div>
	   
	
	    </div>

	    <div class="row">
	<label for="" style="margin-left: 30px;font-size:10px;margin-top: 10px;">Select Preffered Tour Type</label>

	<select name="tour_type" id="tour_type" class="form-control" style="width: 200px;margin-left:20px;border-radius: 0px;" required="required">
		<option value="">Select Tour Type</option>
		<option value="Private Tour (with Hotel Pickup)">Private Tour (with Hotel Pickup) </option>
		<option value="Group  Tour (with Hotel Pickup)">Group  Tour (with Hotel Pickup) </option>
		<option value="Private Tour (without Hotel Pickup)">Private Tour (without Hotel Pickup) </option>
		<option value="Group  Tour (without Hotel Pickup)">Group  Tour (without Hotel Pickup) </option>
	
	</select>
</div>

	    

<div class="row">
	<label for="" style="margin-left: 30px;font-size:10px;margin-top: 10px;">Tour Period</label>

	<select name="tour_period" id="tour_period" class="form-control" style="width: 200px;margin-left:20px;border-radius: 0px;" required="required">
		<option value="">Select Period</option>
		<option value="Half day">Half day</option>
		<option value="Full day">Full day  </option>
		
	</select>
</div>
</div>