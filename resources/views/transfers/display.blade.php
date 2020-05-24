    @if(count($transfers)>0)
    @foreach($transfers as $key=>$item)
                                               <div class="row" style="border:1px solid #e9ecef;background-color: white!important;margin-bottom: 10px;">
                                                   
<div class="col-md-3 img-thumbnail  " style="padding:0px; margin:0px;border-radius:0px;">
   <img src="{{$item->banner}}" width="100%" height="150px"  alt="" style="padding:0px; margin:0px;"> 
</div>
                                                <div class="col-md-6" >
                                                <div class="trav-list-bod">
                                                <a href="tour-details.html"><h3 style="color:#f4364f;font-family: 'Quicksand', sans-serif;
    font-weight: 700;">{{$item->name}}</h3></a>
                                                <p>{{substr($item->desc,0,150)}}....</p>
                                                </div>
                                                </div>
                                                <div class="col-md-3">
                                                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                <div class="hot-page2-alp-r-hot-page-rat pull">{{$item->disc}}%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">${{$item->price}}</span><span class="hot-list-p3-4">
                                                <a href="tour-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
                                                </span> </div>
                                                </div>
                                                <div>
                                                <div class="trav-ami" >
                                                <h4>Detail and Includes</h4>
                                                <ul>
                                                <li><img src="{{asset('public/images/icon/a14.png')}}" alt=""> <span>Sightseeing</span></li>
                                                <li><img src="{{asset('public/images/icon/a15.png')}}" alt=""> <span>Hotel</span></li>
                                                <li><img src="{{asset('public/images/icon/a16.png')}}"alt=""> <span>Transfer</span></li>
                                                <li><img src="{{asset('public/images/icon/a18.png')}}"alt=""> <span>{{$item->duration}}</span></li>
                                                <li><img src="{{asset('public/images/icon/a19.png')}}" alt=""> <span>{{$item->country}}</span></li>
                                                </ul>
                                                </div>  
                                                </div>
                                               </div>
                                               @endforeach
                                      
   
{{$transfers->links()}}

<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center alert-warning  " style="margin: 0px;padding: 0px;">
<p style="font-size: 20px;" class="text-danger font-weight-bold" >No search results </p>
</div>                                                    
</div>                                                
</div>
@endif                                     
 