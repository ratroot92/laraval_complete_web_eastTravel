@extends('layouts.admin')
@section('content')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{url('/admin/dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        <li class="active-bre"><a href="{{route('gallery.add')}}"> Add Videos </a>
    </li>
    <li class="active-bre "><a href="{{route('gallery..videos.all')}}"> All Videos</a></li>
</ul>
</div>
<div class="sb2-2-add-blog sb2-2-1">
<div class="box-inn-sp">
    <div class="inn-title">
        <h4>Post</h4>
        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
    </div>
    <div class="bor">
        <form method="post"  action="{{route('gallery.edit.photo')}}"enctype="multipart/form-data">
            {{csrf_field()}}


                 <input  name="id" id="id" type="hidden"  value="{{$photo->id}}"class="validate" required/>


            <div class="row">
                <div class="input-field col s12">
                    <input  name="title" id="title" type="text"  value="{{$photo->title}}"class="validate" required/>
                    <label for="title">Photo  Title</label>
                </div>
            </div>






<div class="row">

        <div class="input-field col s12 font-weight-bold">
            <input type="text" class="validate" id="desc"  name="desc" value="{{$photo->desc}}" required="required" placeholder="Description" />
            <label for="desc">Photo Description </label>
        </div>
</div>


<div class="row">
 <label for="desc">Current  Photo </label>
       <image src="{{$photo->url}}" height ="" width="" class="img-fluid" />
</div>







            <div class="input-field col s12 font-weight-bold">
                <span class="alert-warning  pull-right ">only upload images </span>
                <div class="file-field">
                    <div class="btn">
                        <span>Upload New Image <i class="fa fa-file-image-o"></i></span>
                        <input type="file" data-preview="#preview" name="img" id="img" required="required" />

                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="@Add a new image to edit " />
                    </div>
                </div>
            </div>
            <small></small>





        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="waves-effect waves-light btn-large">Edit Gallery Photo  <i class="fa fa-paper-plane"></i></button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
@endsection