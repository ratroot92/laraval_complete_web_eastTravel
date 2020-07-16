@extends('layouts.admin')
<script src="{{url('ckeditor/ckeditor.js')}}"></script>
@section('content')
<div class="sb2-2">
	<div class="sb2-2-2">
		<ul>
			<li><a href="{{url('admin/dashbaord')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li class="active-bre"><a href="{{url('websitebuilder/terms')}}"> Terms and Consitions</a></li>
			<li class="active-bre"><a href="{{url('websitebuilder/cancellations')}}"> Cancellations Policy</a></li>
			<li class="active-bre"><a href="{{url('websitebuilder/contactus')}}"> Contact Us</a></li>
			<li class="active-bre"><a href="{{url('websitebuilder/cookies')}}"> Cookie Policy</a></li>
			<li class="active-bre"><a href="{{url('websitebuilder/paymentpolicy')}}"> Cookie Policy</a></li>
			<li class="active-bre"><a href="{{url('websitebuilder/faq')}}"> FAQs</a></li>
			<li class="active-bre"><a href="{{url('websitebuilder/aboutus')}}"> About Us</a></li>
			<li class="page-back"><a href="{{url('/websitebuilder')}}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
		</li>
	</ul>
</div>
<div class="sb2-2-add-blog sb2-2-1">
	<div class="box-inn-sp">
		<div class="inn-title">
			<h4> SERVICE  </h4>
			
		</div>
		<div class="bor">
			<form method="post"  action="{{url('admin/services/postupdate/services/')}}">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$services->id}}" id="id" />
				<div class="row">
					<div class="input-field col s12 font-weight-bold">
						<input type="text" class="validate" name="title" id="title" value="{{$services->title}}" placeholder="Service title" required/>
						<span></span>
						<label for="title">Service Title </label>
					</div>
				</div>
				
				<div class="row">
					<br>
					<label for="desc" style="color:red;font-weight:bold;font-size:14px;">UPDATE NEW SERVICE </label>
					<div class="input-field col s12">
						<textarea id="desc" class="ckeditor" name="desc" required="required" >{{$services->description}}</textarea>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<button type="submit" class="waves-effect waves-light btn-large">UPDATE SERVICE <i class="fa fa-paper-plane"></i></button>
					</div>
				</div>
			</form>
			
			
			
			
		</div>
	</div>
</div>
</div>
@endsection