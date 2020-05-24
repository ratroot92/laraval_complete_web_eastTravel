@extends('layouts.admin')

@section('content')
<style>
td,th{
    font-size: 12px;
}
th{
    color:red;
    font-weight: bold;

}

</style>
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Activity Inquiries</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-1">
            <h2>All Activity Inquiries</h2>
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
                    <th>Min Price</th>
                    <th>Max Price</th>
                 
                </tr>
                </thead>
                <tbody>
                @foreach($packages ?? '' as $key=>$item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->number_of_travelers}}</td>
                        <td>{{$item->travelers_description}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->max_price}}</td>
                        <td>{{$item->min_price}}</td>
             
                    </tr>
                @endforeach
                 <tr>
                    <th></th>
                    <th>Flight From</th>
                    <th>Flight To</th>
                    <th>Flight Time</th>
                    <th>Airport Arrival</th>
                    <th>Airport Departure </th>
                    <th>Flight Number</th>
                    <th>Transport Preffered</th>
                    <th>Accomodation City</th>
                 </tr>
                  @foreach($packages ?? '' as $key=>$item)
                    <tr>
                        <td></td>
                        <td>{{$item->flight_from}}</td>
                        <td>{{$item->flight_to}}</td>
                        <td>{{$item->flight_time}}</td>
                        <td>{{$item->airport_from}}</td>
                        <td>{{$item->airport_to}}</td>
                        <td>{{$item->flight_number}}</td>
                        <td>{{$item->airport_transport}}</td>
                        <td>{{$item->accomodation_city}}</td>
                    </tr>
                @endforeach


                <tr>
                    <th></th>
                   
                    <th>Airport Arrival</th>
                    <th>Airport Departure </th>
                    <th>Flight Number</th>
                    <th>Transport Preffered</th>
                    <th>Accomodation City</th>
                    <th>Trip From</th>
                    <th>Trip To</th>
                    <th>Trip Type</th>
                 </tr>
                  @foreach($packages ?? '' as $key=>$item)
                    <tr>
                        <td></td>
                       
                        <td>{{$item->airport_from}}</td>
                        <td>{{$item->airport_to}}</td>
                        <td>{{$item->flight_number}}</td>
                        <td>{{$item->airport_transport}}</td>
                        <td>{{$item->accomodation_city}}</td> 
                        <td>{{$item->trip_from}}</td>
                        <td>{{$item->trip_to}}</td>
                        <td>{{$item->trip_type}}</td>   
             
                    </tr>
                @endforeach

                
				
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirm_delete(id,val) {
            let c = confirm("Do you want to delete this blog?");
            if(c === true){
                window.location.href ="{{url('inquiry/updatef/')}}/"+id+"/"+val;
            }
        }
    </script>

@endsection

