@extends('layouts.admin')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>


@section('content')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> {{ucfirst($action)}} Day Tour</a>
            </li>
            <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>{{ucfirst($action)}} Day Tour</h4>
            </div>
            <div class="bor">
                <form action="{{route('sightseeing.'.$action,['id'=>$id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="name" value="@if(isset($sightseeing_data[0]->name))@php echo $sightseeing_data[0]->name@endphp@endif">
                            <label for="list-title">Title</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="city" value="@if(isset($sightseeing_data[0]->city))@php echo $sightseeing_data[0]->city@endphp@endif">
                            <label for="list-title">City</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="country" value="@if(isset($sightseeing_data[0]->country))@php echo $sightseeing_data[0]->country@endphp@endif">
                            <label for="list-title">Country</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="price" value="@if(isset($sightseeing_data[0]->price))@php echo $sightseeing_data[0]->price@endphp@endif">
                            <label for="list-title">Price</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="date" class="validate" name="sight_date" value="@if(isset($sightseeing_data[0]->sight_date))@php echo $sightseeing_data[0]->sight_date@endphp@endif">
                            <label for="list-title">Sight Date</label>
                        </div>


                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="form-control" name="duration" value="@if(isset($sightseeing_data[0]->duration))@php echo $sightseeing_data[0]->duration@endphp@endif">
                            <label for="list-title">Duration</label>
                        </div>


                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="banner">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Sight Seeing Banner">
                                </div>
                                @if($action == 'update')
                                <div class="col-sm-3">
                                    <img class="img-thumbnail img-responsive" src="{{asset(App\StoragePath::path().'/storage/sightseeing/'.$sightseeing_data[0]->banner)}}" alt="">
                                </div>
                                @endif
                            </div>


                            <div class="input-field col s12">
                                <div class="file-field">
                                    <div class="btn">
                                        <span>Gallery Image 1 <i class="fa fa-file-image-o"></i></span>
                                        <input type="file" name="img_1" id="img_1">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload img_1">
                                    </div>

                                    @if($action == 'update')
                                    <div class="col-sm-3">
                                        <img class="img-thumbnail img-responsive" src="{{asset(App\StoragePath::path().'/storage/sightseeing/'.$sightseeing_data[0]->img_1)}}" alt="">
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <div class="file-field">
                                    <div class="btn">
                                        <span>Gallery Image 2 <i class="fa fa-file-image-o"></i></span>
                                        <input type="file" name="img_2" id="img_2">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload img_2">
                                    </div>

                                    @if($action == 'update')
                                    <div class="col-sm-3">
                                        <img class="img-thumbnail img-responsive" src="{{asset(App\StoragePath::path().'/storage/sightseeing/'.$sightseeing_data[0]->img_2)}}" alt="">
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <div class="file-field">
                                    <div class="btn">
                                        <span>Gallery Image 3 <i class="fa fa-file-image-o"></i></span>
                                        <input type="file" name="img_3" id="img_3">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload img_3">
                                    </div>

                                    @if($action == 'update')
                                    <div class="col-sm-3">
                                        <img class="img-thumbnail img-responsive" src="{{asset(App\StoragePath::path().'/storage/sightseeing/'.$sightseeing_data[0]->img_3)}}" alt="">
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <div class="file-field">
                                    <div class="btn">
                                        <span>Gallery Image 4 <i class="fa fa-file-image-o"></i></span>
                                        <input type="file" name="img_4" id="img_4">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload img_4">
                                    </div>
                                </div>

                                @if($action == 'update')
                                <div class="col-sm-3">
                                    <img class="img-thumbnail img-responsive" src="{{asset(App\StoragePath::path().'/storage/sightseeing/'.$sightseeing_data[0]->img_4)}}" alt="">
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <label for="textarea1">Description</label>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="ckeditor" name="description">@if(isset($sightseeing_data[0]->description))@php echo $sightseeing_data[0]->description@endphp@endif</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <label for="textarea1">About The Tour</label>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="ckeditor" name="abouttour">@if(isset($sightseeing_data[0]->abouttour))@php echo $sightseeing_data[0]->abouttour@endphp@endif</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <br>
                        <label for="textarea1">Detailed Day Wise Itinerary</label>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="ckeditor" name="daydetail">@if(isset($sightseeing_data[0]->daydetail))@php echo $sightseeing_data[0]->daydetail@endphp@endif</textarea>
                        </div>
                    </div>


                    <div class="row">
                        <br>
                        <label for="textarea2">Code:</label>
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="form-control" name="code">@if(isset($sightseeing_data[0]->code))@php echo $sightseeing_data[0]->code@endphp@endif</textarea>
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