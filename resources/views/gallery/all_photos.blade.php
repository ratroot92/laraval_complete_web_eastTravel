@extends('layouts.admin')



@section('content')

<div class="sb2-2">

    <div class="sb2-2-2">

        <ul>

            <li><a href="{{asset('/admin/dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

            </li>

            <li class="active-bre"><a href="{{route('gallery.add')}}"> Add Videos </a>

            </li>

            <li class="active-bre"><a href="{{route('gallery..videos.all')}}"> All Videos</a></li>




        </ul>

    </div>

    <div class="sb2-2-1">

        <h2>All Gallery Photos</h2>

        <table class="table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Title</th>



                    <th>Description</th>
                    <th>Image</th>
                    <th>Created At</th>

                    <th>Edit</th>

                    <th>Delete</th>

                </tr>

            </thead>

            <tbody>

                @foreach($photos as $key=>$photo)

                <tr>

                    <td>{{$photo->id}}</td>
                    <td>{{$photo->title}}</td>
                    <td>{{$photo->desc}}</td>
                    <td>
                        <image src="{{$photo->url}}" height="80" width="200" class="img-fluid" />
                    </td>
                    <td>{{$photo->created_at}}</td>

                    <td><a href="{{route('gallery.editview.photo',['action'=>'edit','id'=>$photo->id])}}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                    </td>

                    <td>

                        <i onclick="confirm_delete('{{$photo->id}}')" href="{{route('package_cat.delete',['id'=>$photo->id])}}" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></i>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>



<script>
    function confirm_delete(id) {

        let c = confirm("Do you want to delete this Photo?");

        if (c === true) {

            window.location.href = "{{asset('/gallery/delete/photo/')}}/" + id;

        }

    }
</script>



@endsection