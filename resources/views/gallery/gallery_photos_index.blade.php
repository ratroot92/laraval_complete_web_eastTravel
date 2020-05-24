




@extends('layouts.website')
@section('content')
<div class="container-fluid bg-warning">
	@foreach($photos as $pics)
	<div class="col-md-3 mt-5 mb-5 p-5">
		<div class="card">
			<div class="card-header text-center bg-dark text-white font-weight-bold  ">{{$pics->title}}</div>
			
					<image src="{{$pics->url}}"   class="card-img img-thumbnail" style="height: 200px;width: 100%"   /> 
	
			
			<div class="card-text">
				{{$pics->desc}}
			</div>
			<div class="card-footer">
				
			</div>
</div>
</div>

	
	@endforeach




	
</div>
@endsection
