@extends('layouts.admin')

@section('content')

    <style>

        #desc{
  width: 20%!important;
        }
    </style>

    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Blog</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-1">
            <h2>All Popular Cities Posts</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>City Name</th>
                    <th>Country Name</th>
                    <th id="desc">Description</th>
                    <th>Image</th>
                     <th>Created at</th>
                    <th>Edit</th>

                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($popularcities as $key=>$item)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->country}}</td>
                        <td  style="width: 20%!important;">{{substr($item->description, 0, 100)}} .......</td>
                        <td>
                          <!-- <div class="col-sm-12"> -->
                               <img src="{{$item->banner}}" alt="{{$item->name}}" class="img" style="width: 100%;height: 80px">
                           <!-- </div>-->
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td><a href="{{route('popularcities.edit',['action'=>'edit','id'=>$item->id])}}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <i onclick="confirm_delete('{{$item->id}}')" href="{{route('popularcities.delete',['id'=>$item->id])}}" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirm_delete(id) {
            let c = confirm("Do you want to delete this Popular Cities?");
            if(c === true){
                window.location.href ="{{url('popularcities/delete/')}}/"+id;
            }
        }
    </script>

@endsection


