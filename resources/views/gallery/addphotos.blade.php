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
                    Add Videos
                </a>
            </li>
            <li class="active-bre ">
                <a href="{{route('gallery..videos.all')}}">
                    All Videos
                </a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>
                    Post
                </h4>
                <p>
                    Airtport Hotels The Right Way To Start A Short Break Holiday
                </p>
            </div>
            <div class="bor">
                <form action="{{route('gallery.insert_photos')}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input class="validate" id="title" name="title" required="" type="text" required="required"/>
                            <label for="title">
                                Photo  Title
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <input class="validate" id="desc" name="desc" placeholder="Description" required="required" type="text" required="required"/>
                            <label for="desc">
                                Photo Description
                            </label>
                        </div>
                    </div>
                    <div class="input-field col s12 font-weight-bold">
                        <span class="alert-warning pull-right ">
                            only upload images
                        </span>
                        <div class="file-field">
                            <div class="btn">
                                <span>
                                    Gallery Images
                                    <i class="fa fa-file-image-o">
                                    </i>
                                </span>
                                <input data-preview="#preview" id="img" name="img" type="file" required="required"/>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" placeholder="@Single Image Upload " type="text" required="required"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <button class="waves-effect waves-light btn-large" type="submit">
                    Add Gallery Photo
                    <i class="fa fa-paper-plane">
                    </i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
