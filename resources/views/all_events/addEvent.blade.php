@extends('layouts.admin')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@section('content')
<link" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{asset('/admin/dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{route('activity.view')}}"> All Activities</a>
            </li>
            <li class="active-bre"><a href="{{route('activity.add')}}"> Add New Activity</a></li>

            <li class="active-bre"><a href="{{route('activity.category')}}">All Activity Categories</a>
            <li class="active-bre"><a href="{{route('activity.addcategory')}}">Add Activity Categories</a>
            <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <br />
                <div id="app">
                    @include('flash-message')
                    @yield('content')


                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
            @if(isset($action))
            @if($action=='addEvent')
                <h4>Add  Event</h4>

            @else
            <h4>Update  Event</h4>


            @endif
            @endif
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
            </div>



@if($action == 'updateEvent')
{{ session()->get('Event') }}
@endif

            <div class="bor">

            @if($action == 'updateEvent')
            <form method="post" enctype="multipart/form-data" action="{{route('view.add.event.post')}}">
            @else
            <form method="post" enctype="multipart/form-data" action="{{route('view.add.event.post')}}">
            @endif
                    {{csrf_field()}}


                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <select  name="event_type" id="event_type" required="required">
                                <option  value="">Choose Event Type</option>
                                @foreach($event_types as $events)
                                <option value="{{$events}}">{{$events}}</option>
                                @endforeach
                            </select>
                            <label>Select Event Type</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <input id="name" name="name" type="text" class="validate" required />
                            <label for="name">Event Name</label>
                        </div>
                    </div>








                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <select multiple name="country[]" id="country" required>
                                <option disabled>Choose Country</option>
                                @foreach($country_list as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label>Select Country</label>
                        </div>
                    </div>







                    <div class="row">
                        <span class="alert-info pull-right">Seperate cities name by ", comma"</span>
                        <div class="input-field col s12 font-weight-bold">
                            <input id="city" name="city" type="text" class="validate" required />
                            <label for="city">City Name</label>
                        </div>
                    </div>


                    {{--
<div class="row" id="mycities">

        </div> --}}


                    <br>

                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <select multiple name="cat[]" id="cat" required>
                                <option disabled>Choose Category</option>
                                @foreach($packagecat as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label>Select Category</label>
                        </div>
                    </div>

















                    <div id="list_file"></div>


                    <div class="row">
                        <span class="alert-warning  pull-right ">only upload files </span>
                        <div class="input-field col s12 font-weight-bold">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File <i class="fa fa-file-image-o"></i></span>
                                    <input type="file" name="file[]" id="file"   accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" multiple="multiple" />
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" placeholder="Upload Package Banner" />
                                </div>
                            </div>
                        </div>













                        <div class="input-field col s12 font-weight-bold">
                            <span class="alert-warning  pull-right ">only upload images </span>
                            <div class="file-field">
                                <div class="btn">
                                    <span>Gallery Images <i class="fa fa-file-image-o"></i></span>
                                    <input type="file"  name="img[]" id="img" accept="image/gif,image/jpeg,image/png" multiple="multiple" />
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload img_1" />
                                </div>

                            </div>
                        </div>
                    </div>

                    <div>
                    <div id="preview"></div>














                    <div class="row">

                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" name="duration" id="duration" placeholder="5 Days" required />
                            <span></span>
                            <label for="duration">Duration</label>
                        </div>
                    </div>






                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" name="disc" id="disc" class="validate" required />
                            <label for="disc">Activity Discount</label>
                        </div>
                    </div>







                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <input id="" type="number" name="price" id="price" class="validate" required />
                            <label for="price">Package Price</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" name="grpsize" id="grpsize" class="validate" placeholder="Min:2 / Max:16" min="2" max="16" name="grpsize" value="" required="required" />
                            <label for="grpsize">Group Size</label>
                        </div>
                    </div>





                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" placeholder="Vienna  " id="startloc" name="startloc" required="required" />
                            <label for="startloc">Start In /End In</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" placeholder="Vienna / Vienna " id="endloc" name="endloc" required="required" />
                            <label for="endloc">Start In /End In</label>
                        </div>
                    </div>






                    <div class="row">

                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" id="tranportdetails" name="tranportdetails" required="required" placeholder="Van" />
                            <label for="tranportdetails">Transport Details </label>
                        </div>
                    </div>














                    <div class="row">

                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" id="tourlanguage" name="tourlanguage" placeholder="English" value="" required="required" />
                            <label for="tourlanguage">Tour Languages </label>
                        </div>
                    </div>









                    <div class="row">

                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" id="accomodationdetails" name="accomodationdetails" placeholder="Included / Not included " required="required" />
                            <label for="accomodationdetails">Accomodation Details </label>
                        </div>
                    </div>











                    <div class="row">

                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" id="mealdetails" name="mealdetails" placeholder="Included / Not included " required="required" />
                            <label for="mealdetails">Meals Detils </label>
                        </div>
                    </div>











                    <div class="row">

                        <div class="input-field col s12 font-weight-bold">
                            <input type="text" class="validate" id="guidedetails" name="guidedetails" required="required" placeholder="Including English Speaker" />
                            <label for="guidedetails">Tour Guide</label>
                        </div>
                    </div>





























                    <div class="row">
                        <br>
                        <label for="textarea1">Tour Code </label>
                        <div class="input-field col s12 font-weight-bold">
                            <!--<textarea id="tourcode" class="ckeditor" name="tourcode" required="required"></textarea>-->
                            <input type="text" class="validate" id="tourcode" name="tourcode" placeholder="Tour Code" value="" required="required" />
                        </div>
                    </div>














                    <div class="row">
                        <br>
                        <label for="textarea1">Tour Style Details </label>
                        <div class="input-field col s12 font-weight-bold">
                            <!--<textarea id="tourstyle" class="ckeditor" name="tourstyle" required="required"></textarea>-->
                            <input type="text" class="validate" id="tourstyle" name="tourstyle" placeholder="Tour Style" value="" required="required" />
                        </div>
                    </div>

















                    <div class="row">
                        <br>
                        <label for="textarea1">Availibility Date Details </label>
                        <div class="input-field col s12 font-weight-bold">
                            <!--<textarea id="avalibilitydetails" class="ckeditor" name="avalibilitydetails" required="required"></textarea>-->
                            <input type="text" class="validate" id="avalibilitydetails" name="avalibilitydetails" placeholder="Availablity Details" value="" required="required" />
                        </div>
                    </div>














                    <div class="row">
                        <br>
                        <label for="textarea1">Description</label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="desc" class="ckeditor" name="desc" required="required"></textarea>
                        </div>
                    </div>





                    <!--<div class="row">-->
                    <!--            <br>-->
                    <!--            <label for="textarea1">About The Tour</label>-->
                    <!--            <div class="input-field col s12 font-weight-bold">-->
                    <!--                <textarea id="about" class="ckeditor" name="about" required="required" ></textarea>-->
                    <!--            </div>-->
                    <!--        </div>-->


                    <div class="row">
                        <br>
                        <label for="textarea1">Destinations</label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="destinations" class="ckeditor" name="destinations" required="required"></textarea>
                        </div>
                    </div>











                    <div class="row">
                        <br>
                        <label for="textarea1"> Itinerary</label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="itinerary" class="ckeditor" name="itinerary" required="required"></textarea>
                        </div>
                    </div>






                    <div class="row">
                        <br>
                        <label for="textarea1"> Exclusion</label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="exclusion" class="ckeditor" name="exclusion" required="required"></textarea>
                        </div>
                    </div>



                    <div class="row">
                        <br>
                        <label for="textarea1"> Inclusion</label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="inclusion" class="ckeditor" name="inclusion" required="required"></textarea>
                        </div>
                    </div>















                    <div class="row">
                        <br>
                        <label for="textarea1">Terms and Conditions </label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="terms" class="ckeditor" name="terms" required="required"></textarea>
                        </div>
                    </div>










                    <div class="row">
                        <br>
                        <label for="textarea1">Payment Policy </label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="payment_policy" class="ckeditor" name="payment_policy" required="required"></textarea>
                        </div>
                    </div>












                    <div class="row">
                        <br>
                        <label for="textarea1">Payment Methods </label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="payment_methods" class="ckeditor" name="payment_methods" required="required"></textarea>
                        </div>
                    </div>











                    <div class="row">
                        <br>
                        <label for="textarea1">Cancellation Policy </label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="cancellation_policy" class="ckeditor" name="cancellation_policy" required="required"></textarea>
                        </div>
                    </div>








                    <div class="row">
                        <br>
                        <label for="textarea1">Visa Information </label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="visa_info" class="ckeditor" name="visa_info" required="required"></textarea>
                        </div>
                    </div>









                    <div class="row">
                        <br>
                        <label for="textarea1">Important Notes </label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="notes" class="ckeditor" name="notes" required="required"></textarea>
                        </div>
                    </div>












                    <div class="row">
                        <br>
                        <label for="textarea1">Ask A Question </label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="questions" class="ckeditor" name="questions" required="required"></textarea>
                        </div>
                    </div>









                    <div class="row">
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="" class="materialize-textarea" name="code" id="code" placeholder='<iframe id="regiondo-booking-widget" data-width="338px" data-url="https://eastravels.regiondo.com/bookingwidget/vendor/23641/id/94437" data-title="Berlin in 7 Days" style="margin: 0px; padding: 0px; overflow: hidden; vertical-align: top; border: 0px; background: transparent; width: 338px; height: 455px;" data-processed="1" frameborder="0" src="https://eastravels.regiondo.com/bookingwidget/vendor/23641/id/94437?bookingwidget=1&amp;secure=1" data-id="1"></iframe>' /required> </textarea> <label for="textarea1">Code:</label>
            </div>
        </div>


 <div class="row">
    <span class="alert alert-info ">select which icons should be visible in list view  </span>
            <div class="input-field col s12 font-weight-bold">
                <select  multiple name="icons[]" id="icons" required>
                    <option  disabled>Choose Icons</option>
                    @foreach($icons as $item)
                    <option  value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                </select>

            </div>
        </div>




        <div class="row">
            <div class="input-field col s12 font-weight-bold">
              <select name="status" id="status" class="validate" required="required" >
                <option value="">Select Status</option>
                <option value="0">In-active</option>
                <option value="1">Active</option>
              </select>
                <label for="status">Activity Status  </label>
            </div>
        </div>




        <div class="row">
            <div class="input-field col s12 font-weight-bold">
                <button type="submit" class="waves-effect waves-light btn-large">Create Activity<i class="fa fa-paper-plane"></i></button>
            </div>
        </div>
    </form>







</div>
</div>
</div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script>
function previewImages() {

var preview = document.querySelector('#preview');

if (this.files) {
  [].forEach.call(this.files, readAndPreview);
}

function readAndPreview(file) {

  // Make sure `file.name` matches our extensions criteria
  if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
    return alert(file.name + " is not an image");
  } // else...

  var reader = new FileReader();

  reader.addEventListener("load", function() {
    var image = new Image();
    image.height = 150;
    image.title  = file.name;
    image.src    = this.result;
    preview.appendChild(image);
  });

  reader.readAsDataURL(file);

}

}

document.querySelector('#img').addEventListener("change", previewImages);
</script>

<script>
var fileInput = document.getElementById('file');
var listFile = document.getElementById('list_file');

fileInput.onchange = function () {
  var files = Array.from(this.files);
  files = files.map(file => file.name);
  listFile.innerHTML = files.join('<br/>');
}</script>
@endsection

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>


$(document).ready(function(){
        $('#country').on('change',function(){
              var country=$("#country option:selected").val();
              var str = '';
        $.get('/cityByCountry/'+country,function(data){
          // $('#citybox').empty().append(data);
          $.each(data,function(i,item) {
              var html = '<option>'+item.name+'</option>';
              str+=html;
          });
          console.log(str);
$('#mycities').html('<div class="input-field col s12 font-weight-bold"><select  class="form-control" multiple name="city[]" required>'+str+'</select><label>Select City</label></div>');
            });
        });
}); -->





</script>