




@extends('layouts.website')
@section('content')
<div class="container-fluid bg-warning">
	@foreach($videos as $vid)
	<div class="col-md-6 mt-5 mb-5 p-5">
		<p class="font-weight-bold text-primary">{{$vid->name}}</p>
		<iframe  width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
src="{{$vid->url}}">
</iframe>
	</div>
	@endforeach




	
</div>
@endsection
