@extends('layouts.admin')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@section('content')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Add Eventy</a>
            </li>
            <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add Events</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
            </div>
            <div class="bor">
                <form enctype="multipart/form-data" method="post" action="{{route('add.event',-1)}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" name="name" type="text" value="" class="validate">
                            <label for="list-title">Activity Name</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="country" name="country" type="text" value="" class="validate">
                            <label for="list-title">Country Name</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="city" name="city" type="text" value="" class="validate">
                            <label for="list-title">City Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="date" type="date" name="date" class="validate" required>
                            <label for="post-auth"></label>
                        </div>

                        <div class="input-field col s12">
                            <input id="time" type="time" name="time" class="validate" required>
                            <label for="post-auth"></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="code" name="code" type="text" value="" class="validate">
                            <label for="list-title">Code</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="price" name="price" type="text" value="" class="validate">
                            <label for="list-title">Price</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <div class="file-field">
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
                                <div class="btn">
                                    <span>Gallery Image 1 <i class="fa fa-file-image-o"></i></span>
                                    <input type="file" name="img_1" id="img_1">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Blog img_1">
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>Gallery Image 2 <i class="fa fa-file-image-o"></i></span>
                                    <input type="file" name="img_2" id="img_2">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Blog img_2">
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>Gallery Image 3 <i class="fa fa-file-image-o"></i></span>
                                    <input type="file" name="img_3" id="img_3">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Blog img_3">
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>Gallery Image 4 <i class="fa fa-file-image-o"></i></span>
                                    <input type="file" name="img_4" id="img_4">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Blog img_4">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <br>
                            <label for="textarea1">About The Tour</label>
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="ckeditor" name="abouttour"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <br>
                            <label for="textarea1">Detailed Day Wise Itinerary</label>
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="ckeditor" name="daydetail"></textarea>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="description" name="description" class="materialize-textarea" required></textarea>
                            <label for="textarea1">Descriptions:</label>
                        </div>
                    </div>
                    {{-- <div class="row">--}}
                    {{-- <div class="input-field col s12">--}}
                    {{-- <select multiple>--}}
                    {{-- <option value="" disabled selected>Choose Category</option>--}}
                    {{-- <option value="1">Hotels</option>--}}
                    {{-- <option value="2">Educations</option>--}}
                    {{-- <option value="3">Medical</option>--}}
                    {{-- <option value="3">Health</option>--}}
                    {{-- <option value="3">Fitness</option>--}}
                    {{-- <option value="3">Tution</option>--}}
                    {{-- <option value="3">Software</option>--}}
                    {{-- <option value="3">Wedding</option>--}}
                    {{-- <option value="3">Party</option>--}}
                    {{-- <option value="3">Spa/Club</option>--}}
                    {{-- </select>--}}
                    {{-- <label>Select Category</label>--}}
                    {{-- </div>--}}
                    {{-- <div class="input-field col s12">--}}
                    {{-- <select multiple>--}}
                    {{-- <option value="" disabled selected>Choose Category</option>--}}
                    {{-- <option value="1">Hotels</option>--}}
                    {{-- <option value="2">Educations</option>--}}
                    {{-- <option value="3">Medical</option>--}}
                    {{-- <option value="3">Health</option>--}}
                    {{-- <option value="3">Fitness</option>--}}
                    {{-- <option value="3">Tution</option>--}}
                    {{-- <option value="3">Software</option>--}}
                    {{-- <option value="3">Wedding</option>--}}
                    {{-- <option value="3">Party</option>--}}
                    {{-- <option value="3">Spa/Club</option>--}}
                    {{-- </select>--}}
                    {{-- <label>Select Sub Category</label>--}}
                    {{-- </div>--}}
                    {{-- </div>--}}
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="waves-effect waves-light btn-large">Create <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection