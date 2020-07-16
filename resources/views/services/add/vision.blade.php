@extends('layouts.admin')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@section('content')
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

    </div>

    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>{{ucfirst($action ?? '' )}} Activity</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
            </div>

            <div class="bor">
                <form method="post" enctype="multipart/form-data" action="{{asset('admin/services/update/vision')}}">
                    {{csrf_field()}}





                    <div class="row">
                        <br>
                        <label for="textarea1">Vision</label>
                        <div class="input-field col s12 font-weight-bold">
                            <textarea id="vision" class="ckeditor" name="vision" required="required"></textarea>
                        </div>
                    </div>



                </form>












            </div>
        </div>
    </div>
</div>

@endsection

{{--
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
});






</script> --}}