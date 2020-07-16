@extends('layouts.admin')

@section('content')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> {{ucfirst($type)}} Inquiries</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-1">
        <h2>All {{ucfirst($type)}} Inquiries</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>No of Travelers</th>
                    <th>Teavelers' Description</th>
                    <th>City</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Min Price</th>
                    <th>Max Price</th>
                    <th>Other Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inquiries as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->number_of_travelers}}</td>
                    <td>{{$item->travelers_description}}</td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->arrival}}</td>
                    <td>{{$item->departure}}</td>
                    <td>{{$item->max_price}}</td>
                    <td>{{$item->min_price}}</td>
                    <td>{{$item->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function confirm_delete(id, val) {
        let c = confirm("Do you want to delete this blog?");
        if (c === true) {
            window.location.href = "{{asset('inquiry/updatef/')}}/" + id + "/" + val;
        }
    }
</script>

@endsection