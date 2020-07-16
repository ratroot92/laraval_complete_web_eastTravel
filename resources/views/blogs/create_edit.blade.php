@extends('layouts.admin')
<script src="{{url('ckeditor/ckeditor.js')}}"></script>


@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> {{ucfirst($action)}} Post</a>
                </li>
                <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>{{ucfirst($action)}} Post</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                </div>
                <div class="bor">
                    <form action="{{route('blog.'.$action,['id'=>$id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="list-title" type="text" class="validate" name="name" value="@if(isset($blogs_data[0]->name))@php echo $blogs_data[0]->name@endphp@endif">
                                <label for="list-title">Post Name</label>
                            </div>
                            <div class="input-field col s12">
                                <div class="file-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="banner">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload Blog Banner" >
                                    </div>
                                    @if($action == 'update')
                                        <div class="col-sm-3">
                                            <img class="img-thumbnail img-responsive" src="{{url('storage/blogs/'.$blogs_data[0]->banner)}}" alt="">
                                        </div>

                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <label for="textarea1">Blog Descriptions:</label>
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="ckeditor" name="description">@if(isset($blogs_data[0]->description))@php echo $blogs_data[0]->description@endphp@endif</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn-large" value="">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
