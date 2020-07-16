@extends('layouts.website')
@section('content')

@foreach(DB::table('blogs')->orderBy('id','desc')->where('id',$blogid)->get() as $item)

<div class="container posts">
    <br><br>
    <h1>{{$item->name}}</h1>
    <h5><span class="post_author"></span><span class="post_date">Date: {{date('F d, Y',strtotime($item->created_at))}}</span><span class="post_city"></span></h5>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive img-thumbnail" style="height: 50%;width: 100%" src="{{asset('/storage/blogs/'.$item->banner)}}" alt="">
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <p>
            @php echo $item->description @endphp
        </p>
    </div>
</div>

@endforeach
@endsection