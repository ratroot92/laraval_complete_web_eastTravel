@extends('layouts.website')
@section('content')
<style>
	.set-overflow{
		height: 700px;
	overflow-y:auto;
	}
</style>
<div style="text-align: left;width:100%;background-color:white!important;position: absolute; z-index:99;    padding: 10px 10px;" id="search_div">
	<a href="{{url('/cities')}}" ><h2 style="color: #253d52; padding-left: 15px">Popular <span style="color: #f4364f;font-size: 2rem;">Cities</span></h2>
</a>
<!-- put row here -->
<div class="row	set-overflow	 list-unstyled  mt-2"style="margin:0px;padding:0px;" >
	@foreach($all_popularcities as $item)
	<div class="col-md-6">
		<a href="">
			<div class="tour-mig-like-com">
				<div class="tour-mig-lc-img">
					<img src="{{$item->banner}}" alt="" title="{{ $item->description }}" >
				</div>
				<div class="tour-mig-lc-con">
					<h5>{{$item->name}}</h5>
					<p><span>{{--12 Packages--}}</span> {{$item->country}}</p>
				</div>
			</div>
		</a>
	</div>
	@endforeach
</div>
</div>
<br>
<br>
<br>
<br>
@endsection