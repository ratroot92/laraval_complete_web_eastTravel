@extends('layouts.admin')



@section('content')

    <div class="sb2-2">

        <div class="sb2-2-2">

             <ul>
            <li>
                <a href="{{url('/admin/dashboard')}}">
                    <i aria-hidden="true" class="fa fa-home">
                    </i>
                    Home
                </a>
            </li>
            <li class="active-bre">
                <a href="{{route('gallery.add')}}">
                   Add Gallery Videos
                </a>
            </li>
              <li class="active-bre">
                <a href="{{route('gallery..videos.all')}}">
                    All  Gallery Videos
                </a>
            </li>
             <li class="active-bre ">
                <a class="active" href="{{route('gallery.add.traveller.review')}}">
                   Add Traveller Review
                </a>
            </li>

             <li class="active-bre">
                <a href="{{route('gallery.all.traveller.review')}}">
                    All Traveller Review
                </a>
            </li>
            <li class="active-bre ">
                <a href="{{route('gallery.addphotos')}}">
                  Add  Gallery Photos
                </a>
            </li>
               <li class="active-bre ">
                <a href="{{route('gallery.all_photos')}}">
                   <b>All Gallery Photos</b>
                </a>
            </li>
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
                        <td><image src="{{$photo->url}}" height="80" width="200" class="img-fluid"/></td>
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

            if(c === true){

                window.location.href ="{{url('/gallery/delete/photo/')}}/"+id;

            }

        }

    </script>



@endsection



