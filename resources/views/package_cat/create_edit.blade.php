@extends('layouts.admin')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add New Package Category</a>
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
                    <form method="post"  action="{{url('admin/package_cat/data/'.$action."/".$id)}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="input-field col s12">
                                <input  name="name" id="" type="text" class="validate" value="@if(isset($package_cat_data[0]->name))@php echo $package_cat_data[0]->name@endphp@endif">
                                <label for="list-title">Category Name</label>
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
@endsection
