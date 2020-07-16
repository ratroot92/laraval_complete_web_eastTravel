<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
    public function index($eventId){
        return view('booking.index');
    }
}
