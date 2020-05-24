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
                <form action="{{url('gallery/add_video')}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input class="validate" id="name" name="name" required="" type="text" required="required"/>
                            <label for="name">
                                Video  Name
                            </label>
                        </div>
                        <div class="input-field col s12">
                            <input class="validate" id="url" name="url" required="" type="url" required="required"/>
                            <label for="url">
                                Video  URL
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="waves-effect waves-light btn-large" type="submit">
                                Add Gallery Video
                                <i class="fa fa-paper-plane">
                                </i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
