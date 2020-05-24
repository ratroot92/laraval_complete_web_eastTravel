<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMailForBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class SendEmail extends Controller
{
    //
    public function send_verification(){
        $data =array(
            'email'=>$_GET['email'],
            'id'=>$_GET['u_id'],
            'token'=>$_GET['token']
        );
        Mail::to($_GET['email'])->send(new SendMail($data));
        return redirect('/auth/signup')->with('message','Check your email and get verification link, if you do not recieve it in inbox, check spam folder');

    }

}
