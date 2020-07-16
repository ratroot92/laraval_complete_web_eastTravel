@extends('layouts.website')
@section('content')

@foreach(DB::table('blogs')->orderBy('id','desc')->get() as $item)

<div class="posts">
    <div class="col-md-4 col-sm-12 col-xs-12">
        <img class="img-responsive img-thumbnail" style="height: 50%;width: 100%" src="{{asset('/storage/blogs/'.$item->banner)}}" alt="">
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
        <h3>{{$item->name}}</h3>
        <h5><span class="post_author"></span><span class="post_date">Date: {{date('F d, Y',strtotime($item->created_at))}}</span><span class="post_city"></span></h5>
        <p>
            @php echo substr($item->description,0,500) @endphp
        </p>
        <a href="{{asset('/blog/full/'.$item->id)}}">Read More</a>
    </div>
</div>

@endforeach
@endsection