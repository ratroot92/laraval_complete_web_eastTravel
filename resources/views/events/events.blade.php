@extends('layouts.admin')

@section('content')
    <style>
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add Event</a>
                </li>
                <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <div class="box-inn-sp">
                <div class="bor">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Description</th>
                            <th>About Tour</th>
                            <th>day Detail</th>
                            <th>Price</th>
                            {{--<th>Code</th>--}}
                            <th>Code</th>

                            <th style="width: 200px;">Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $key=>$event)
                            <tr>
                                <th>{{++$key}}</th>
                                <td>{{$event->name}}</td>
                                <td>{{$event->country}}</td>
                                <td>{{$event->city}}</td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->time}}</td>
                                <td>{{substr($event->description,0,50)}} ...</td>
                                <td>{{$event->abouttour}}</td>
                                <td>{{$event->daydetail}}</td>
                                <td>{{$event->price}}</td>

                                {{--<td>{{$event->code}}</td>--}}

                                <td>{{$event->code}}</td>
                                <td>
                                    <div class="col-sm-12">
                                    <img src="{{url('/').App\StoragePath::path()}}/storage/events/{{$event->banner}}"style="height: 100%;width: 100%">
                                    </div>
                                </td>
                                <td><a href="{{route('events.update',['action'=>'edit','id'=>$event->id])}}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="{{route('events.delete',['id'=>$event->id])}}" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
