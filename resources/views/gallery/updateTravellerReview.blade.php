@extends('layouts.admin')



@section('content')

    <div class="sb2-2">

        <div class="sb2-2-2">

               <ul>

              <li><a href="{{url('/admin/dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

              </li>

              <li class="active-bre"><a href="{{route('gallery.add')}}"> Add Videos </a>

              </li>

              <li class="active-bre"><a href="{{route('gallery..videos.all')}}"> All Videos</a></li>




              </ul>

        </div>

        <div class="sb2-2-add-blog sb2-2-1">

            <div class="box-inn-sp">

                <div class="inn-title">

                    <h4>Update Traveller Video Review</h4>

                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>

                </div>

                <div class="bor">

                    <form method="post"  action="{{route('gallery.update.traveller.review')}}">

                        {{csrf_field()}}

                        <div class="row">
                        	    <div class="input-field col s12">
                                <input type="hidden" value="{{$video->id}}" name="id" id="id" />
                                <input  name="name" id="name" type="text" value="{{$video->name}}" class="validate" required/>

                                <label for="name">Video  Name</label>

                            </div>

                            <div class="input-field col s12">

                                <input  name="url" id="url" type="url" value="{{$video->url}}" class="validate" required/>

                                <label for="url">Video  URL</label>

                            </div>



                        </div>

                        <div class="row">

                            <div class="input-field col s12">

                                <button type="submit" class="waves-effect waves-light btn-large">Update Gallery Video  <i class="fa fa-paper-plane"></i></button>

                            </div>

                        </div>





                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection

