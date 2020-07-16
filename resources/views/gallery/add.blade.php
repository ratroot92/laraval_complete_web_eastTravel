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
                  <b>  Add Gallery Videos</b>
                </a>
            </li>
              <li class="active-bre">
                <a href="{{route('gallery..videos.all')}}">
                    All  Gallery Videos
                </a>
            </li>
             <li class="active-bre ">
                <a class="active" href="{{route('gallery.add.traveller.review')}}">
                   Add Traveller Review
                </a>
            </li>

             <li class="active-bre">
                <a href="{{route('gallery.all.traveller.review')}}">
                    All Traveller Review
                </a>
            </li>
            <li class="active-bre ">
                <a href="{{route('gallery.addphotos')}}">
                   Add  Gallery Photos
                </a>
            </li>
               <li class="active-bre ">
                <a href="{{route('gallery.all_photos')}}">
                   All Gallery Photos
                </a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>
                   Add  Gallery Video
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
                            <small class="font-weight-bold text-info"style="font-size: 13px;">Paste  only embedded youtube urls example "https://www.youtube.com/<span class="text-danger">embed</span>/QJiVgB16mEw"></iframe></small>
                            <p>
  <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   <i class="fa fa-info-circle "style="margin-right:5px;"></i>How to
  </a>

</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body text-info p-2">
    How to get the Embed URL/Link of a Youtube Video ? <br>  Simply click on the “share” link while on the youtube video page then click on “embed”. Now you can grab the correct url/link from the code which is everything inside the src attribute...
    <a class="nav-link" href="https://wpexplorer-themes.com/total/docs/get-embed-urllink-youtube-video/#:~:text=Simply%20click%20on%20the%20%E2%80%9Cshare,everything%20inside%20the%20src%20attribute." target="_blank">click here </a>
  </div>
</div>

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
<script>
    $(document).ready(function(){
console.log("ready");

    })
</script>
@endsection
