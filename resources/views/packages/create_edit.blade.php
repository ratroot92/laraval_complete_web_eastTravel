@extends('layouts.admin')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

@section('content')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Add New Package</a>
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
                <form method="post" enctype="multipart/form-data" action="{{asset("packages/$action/$id")}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="" type="text" name="pack_name" class="validate" value="@if(isset($packages_data[0]->pack_name)) {{$packages_data[0]->pack_name}} @endif">
                            <label for="Package-auth">Package Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="" type="text" name="city" class="validate" value="@if(isset($packages_data[0]->city)) {{$packages_data[0]->city}} @endif">
                            <label for="Package-auth">City Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="" type="text" name="country" class="validate" value="@if(isset($packages_data[0]->country)) {{$packages_data[0]->country}} @endif">
                            <label for="Package-auth">Country Name</label>
                        </div>
                    </div>


                    <div class="row">

                        <div class="input-field col s12">
                            <select required multiple name="cat_id">
                                <option value="@if(isset($packages_data[0]->cat_id)) {{ $packages_data[0]->cat_id }}  @endif" disabled>Choose Category</option>
                                @foreach($packagecat as $item)
                                <option value="{{$item->id}}" @if(isset($packages_data[0]->cat_id)) @if($item->id == $packages_data[0]->cat_id) selected @endif @endif>{{$item->name}}</option>

                                @endforeach
                            </select>
                            <label>Select Category</label>
                        </div>
                        {{--<div class="input-field col s12">
                                <select multiple>
                                    <option value="" disabled selected>Choose Category</option>
                                    <option value="1">Hotels</option>
                                    <option value="2">Educations</option>
                                    <option value="3">Medical</option>
                                    <option value="3">Health</option>
                                    <option value="3">Fitness</option>
                                    <option value="3">Tution</option>
                                    <option value="3">Software</option>
                                    <option value="3">Wedding</option>
                                    <option value="3">Party</option>
                                    <option value="3">Spa/Club</option>
                                </select>
                                <label>Select Sub Category</label>
                            </div>--}}
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="" type="text" name="description" class="validate" value="@if(isset($packages_data[0]->description)) {{$packages_data[0]->description}} @endif">
                            <label for="Package-auth">Description</label>
                        </div>
                    </div>

                    <div class="row">
                        {{-- <div class="input-field col s12">
                                  <input id="list-title" type="text" class="validate">
                                  <label for="list-title">Package Name</label>
                              </div>
                            --}}
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File <i class="fa fa-file-image-o"></i></span>
                                    <input type="file" name="banner" id="banner">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" placeholder="Upload Package Banner">
                                </div>
                                @if($action == 'update')
                                <div class="col-sm-3">
                                    <img class="img-thumbnail img-responsive" src="{{asset('storage/packages/'.$packages_data[0]->banner)}}" alt="">
                                </div>

                                @endif
                            </div>
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
                                    <img class="img-thumbnail img-responsive" src="{{asset('storage/packages/'.$packages_data[0]->img_1)}}" alt="">
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
                                    <img class="img-thumbnail img-responsive" src="{{asset('storage/packages/'.$packages_data[0]->img_2)}}" alt="">
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
                                    <img class="img-thumbnail img-responsive" src="{{asset('storage/packages/'.$packages_data[0]->img_3)}}" alt="">
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
                                <img class="img-thumbnail img-responsive" src="{{asset('storage/packages/'.$packages_data[0]->img_4)}}" alt="">
                            </div>

                            @endif
                        </div>

                    </div>
                    <div class="row">
                        <br>
                        <label for="textarea1">About The Tour</label>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="ckeditor" name="abouttour">@if(isset($packages_data[0]->abouttour))@php echo $packages_data[0]->abouttour@endphp@endif</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <br>
                        <label for="textarea1">Detailed Day Wise Itinerary</label>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="ckeditor" name="daydetail">@if(isset($packages_data[0]->daydetail))@php echo $packages_data[0]->daydetail@endphp@endif</textarea>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input id="list-title" type="text" class="form-control" name="duration" value="@if(isset($packages_data[0]->duration))@php echo $packages_data[0]->duration@endphp@endif">
                        <label for="list-title">Duration</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="" type="text" name="discount" class="validate" value="@if(isset($packages_data[0]->discount)) {{$packages_data[0]->discount}} @endif">
                            <label for="Package-auth">Package Discount</label>
                        </div>
                    </div>

                    {{--<div class="row">
                            <div class="input-field col sl2">
                                <label for="Package-auth"><span>Location</span></label>
                            </div>
                        </div><br><br>
                          <div class="row">
                              <div class="input-field col s12">

                                  <div class="alert alert-success alert-dismissible" style="  display: none;">
                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                      <strong>Success!</strong> The point has been selected successfully
                                  </div>
                                  <div id="mapid"></div>
                                  <input id="google_map" type="hidden" name="location" class="validate" value="@if(isset($packages_data[0]->loaction)) {{$packages_data[0]->location}} @endif">
            </div>
        </div>--}}

        <div class="row">
            <div class="input-field col s12">
                <input id="list-title" type="date" class="validate" name="date" value="@if(isset($packages_data[0]->date))@php echo $packages_data[0]->date@endphp@endif">
                <label for="list-title">Date</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="" type="text" name="price" class="validate" value="@if(isset($packages_data[0]->price)) {{$packages_data[0]->price}} @endif">
                <label for="Package-auth">Package Price</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="" class="materialize-textarea" name="code">@if(isset($packages_data[0]->code)){{$packages_data[0]->code}} @endif</textarea>
                <label for="textarea1">Code:</label>
            </div>
        </div>

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

{{--<script>

        var mymap = L.map('mapid').setView([32.4945, 73.5229], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mymap);

        L.marker([32.4945,74.5229]).addTo(mymap)
            .bindPopup("<b>TAHSIL</b><br />I am a popup.").openPopup();

        L.circle([51.508, -0.11], 500, {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5
        }).addTo(mymap).bindPopup("I am a circle.");

        L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(mymap).bindPopup("I am a polygon.");


        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(mymap);
            document.getElementById('google_map').value = e.latlng.toString();
            document.getElementsByClassName('alert-success').display = visible;
        }

        mymap.on('click', onMapClick);

    </script>--}}
@endsection