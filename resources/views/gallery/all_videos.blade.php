@extends('layouts.admin')
@section('content')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li>
                <a href="{{asset('/admin/dashboard')}}">
                    <i aria-hidden="true" class="fa fa-home">
                    </i>
                    Home
                </a>
            </li>
            <li class="active-bre">
                <a href="{{route('gallery.add')}}">
                    Add Videos
                </a>
            </li>
            <li class="active-bre">
                <a href="{{route('gallery..videos.all')}}">
                    All Videos
                </a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-1">
        <h2>
            All Gallery Videos
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        URL
                    </th>

                    <th>
                        Video Preview
                    </th>

                    <th>
                        Created At
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $key=>$vid)
                <tr>
                    <td>
                        {{$vid->id}}
                    </td>
                    <td>
                        {{$vid->name}}
                    </td>
                    <td>
                        {{$vid->url}}
                    </td>
                    <td>
                        <iframe width="200" height="100" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="{{$vid->url}}">
                        </iframe>
                    </td>
                    <td>
                        {{$vid->created_at}}
                    </td>
                    <td>
                        <a class="sb2-2-1-edit" href="{{route('gallery.video.edit',['action'=>'edit','id'=>$vid->id])}}">
                            <i aria-hidden="true" class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        <i class="sb2-2-1-edit" href="{{asset('/gallery/video/delete/',['id'=>$vid->id])}}" onclick="confirm_delete('{{$vid->id}}')">
                            <i aria-hidden="true" class="fa fa-trash-o">
                            </i>
                        </i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    function confirm_delete(id) {
        let c = confirm("Do you want to delete this Video?");
        if (c === true) {
            window.location.href = "{{asset('/gallery/video/delete/')}}/" + id;
        }
    }
</script>
@endsection