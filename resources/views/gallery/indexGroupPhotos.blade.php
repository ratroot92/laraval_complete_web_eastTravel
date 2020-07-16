@extends('layouts.website')
@section('content')
<style>
	nav{
		background-color: #fff!important;
	}
		.special-color{
		color:#f4364f;
		font-size: 36px;
		font-family: 'Quicksand', sans-serif;
		font-weight: bold;
;
	}
	.sub-heading{
		font-size:25px;
		font-family: 'Quicksand', sans-serif;
		margin-top:15px;
		font-weight: bold;


	}
	.custom-container{
	background-color: #fff;
	padding-left:10px;
	padding-right: 10px;
	margin-top: 100px;
	}
	.custom-center{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	.gallery-row{
		padding-left: 100px;
		padding-right:100px;
	}
</style>
<div class="container-fluid custom-container bg-faded mt-5">
	<div class="row">
	<div class="col-md-12 text center mb-5 custom-center tourz-search"style="height: 400px;">

		<h1 class="text-white">Gallery  - <span class="special-color ">Group Photos </span></h1>
		<p class="text-capitalize text-white sub-heading">Explore a Different way to Travel </p>
	</div>
</div>
<div class="row gallery-row">
	@if(isset($photos))
	@foreach($photos as $pics)
	<div class="col-md-4 mt-3 mb-3 p-3">


					<image src="{{$pics->url}}"   class="card-img img-thumbnail" style="height: 300px;width: 100%"   />




</div>


	@endforeach

@else
<p>
	No Group Photos
</p>
@endif
</div>


</div>
</div>
  <div class="container bg-white mb-5 mt-5">
      <div class="row">
         <div  class="col-md-12 bg-white text-center ">
            {{$photos->links()}}
         </div>
      </div>
   </div>
@endsection
