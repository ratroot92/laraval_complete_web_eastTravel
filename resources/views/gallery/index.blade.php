@extends('layouts.website')
@section('content')
<style>
	nav{
		background-color: #fff!important;
	}
	iframe{
		width: 100%!important;
		height: 400px
!important;
		border:2px solid  white;
		border-radius: 5px;

	}
	.custom-container{
	background-color: #fff;
	padding-left:10px;
	padding-right: 10px;
	margin-top: 100px;
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

		<h1 class="text-white">Gallery  - <span class="special-color ">Videos </span></h1>
		<p class="text-capitalize text-white sub-heading">Explore a Different way to Travel </p>
	</div>
	<div class="row gallery-row">
	@if(isset($videos))
	@foreach($videos as $vid)
	<div class="col-md-4 mt-5">

<iframe  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
src="{{$vid->url}}">
</iframe>




</div>


	@endforeach

@else
<p>
	No Gallery Videos
</p>
@endif
</div>
</div>
</div>
  <div class="container bg-white mb-5 mt-5">
      <div class="row">
         <div  class="col-md-12 bg-white text-center ">
            {{$videos->links()}}
         </div>
      </div>
   </div>
@endsection