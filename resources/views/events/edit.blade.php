@extends('layouts.admin')
<script src="{{url('ckeditor/ckeditor.js')}}"></script>

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Edit Activity</a>
                </li>
                <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <div class="box-inn-sp">
                @foreach($events_data as $ev)
                <div class="inn-title">
                    <h4>Edit Activity</h4>
                    <p>{{$ev->name}}</p>
                </div>
                <div class="bor">
                    <form enctype="multipart/form-data" method="post" action="{{route('add.event',$ev->id)}}">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" name="name" type="text" value="{{$ev->name}}" class="validate" required>
                                    <label for="list-title">Activity Name</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="country" name="country" type="text" value="{{$ev->country}}" class="validate" required>
                                    <label for="list-title">Country Name</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="city" name="city" type="text" value="{{$ev->city}}" class="validate" required>
                                    <label for="list-title">City Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="date" type="date" name="date" class="validate" value="{{$ev->date}}" required>
                                    <label for="post-auth"></label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="time" type="time" name="time" class="validate" value="{{$ev->time}}" required>
                                    <label for="post-auth"></label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="code" name="code" type="text" value="{{$ev->code}}" class="validate" required>
                                    <label for="list-title">Code</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="price" name="price" type="text" value="{{$ev->price}}" class="validate">
                                    <label for="list-title">Price</label>
                                </div>
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <img src="{{url('/')}}/storage/events/{{$ev->banner}}" class="img-responsive">
                                        <div class="btn">
                                             <span>File <i class="fa fa-file-image-o"></i></span>
                                            <input type="file" name="banner" id="banner">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Blog Banner">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <img src="{{url('/')}}/storage/events/{{$ev->img_1}}" class="img-responsive">
                                        <div class="btn">
                                            <span>File <i class="fa fa-file-image-o"></i></span>
                                            <input type="file" name="img_1" id="img_1">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Blog img_1">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <img src="{{url('/')}}/storage/events/{{$ev->img_2}}" class="img-responsive">
                                        <div class="btn">
                                            <span>File <i class="fa fa-file-image-o"></i></span>
                                            <input type="file" name="img_2" id="img_2">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Blog img_2">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <img src="{{url('/')}}/storage/events/{{$ev->img_3}}" class="img-responsive">
                                        <div class="btn">
                                            <span>File <i class="fa fa-file-image-o"></i></span>
                                            <input type="file" name="img_3" id="img_3">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Blog img_3">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <img src="{{url('/')}}/storage/events/{{$ev->img_4}}" class="img-responsive">
                                        <div class="btn">
                                            <span>File <i class="fa fa-file-image-o"></i></span>
                                            <input type="file" name="img_4" id="img_4">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Blog img_4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <br>
                            <label for="textarea1">About The Tour</label>
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="ckeditor" name="abouttour">@if(isset($ev->abouttour))@php echo $ev->abouttour@endphp@endif</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <br>
                            <label for="textarea1">Detailed Day Wise Itinerary</label>
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="ckeditor" name="daydetail">@if(isset($ev->daydetail))@php echo $ev->daydetail@endphp@endif</textarea>
                            </div>
                        </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="description" name="description" class="materialize-textarea" required>{{$ev->description}}</textarea>
                                    <label for="textarea1">Blog Descriptions:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="waves-effect waves-light btn-large">Update <i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                    </form>
                </div>
                    <script>
                            document.getElementById("place").value = "{{$ev->place}}";
                    </script>
                @endforeach
            </div>
        </div>
    </div>
@endsection
