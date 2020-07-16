<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
class Auth extends Controller
{
    public function signinPage()
    {
        $data['title'] = "Sign in";
        return view('auth.signin',$data);
    }

    public function signupPage()
    {
        $data['title'] = "Sign Up";
        return view('website.register',$data);
    }

    public function signin()
    {
$md5password = md5($_POST['password']);
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $isValid = DB::table('users')->where('email', $_POST['email'])->where('password', $md5password)->exists();
            $isVerified = true;//if we are using email verification, we have assign the value to the live commented below
//                DB::table('users')->where('email', $_POST['email'])->where('password', $md5password)->value('email_verified');
            if ($isValid) {
                Session::put('id', DB::table('users')->where('email', $_POST['email'])->where('password', $md5password)->value('id'));
                Session::put('name', DB::table('users')->where('email', $_POST['email'])->where('password', $md5password)->value('name'));
                Session::put('role', DB::table('users')->where('email', $_POST['email'])->where('password', $md5password)->value('role'));
                Session::put('email', DB::table('users')->where('email', $_POST['email'])->where('password', $md5password)->value('email'));
                Session::put('islogin', true);
                if($isVerified)
                {
                    if(Session::get('role') == "1")
                    return redirect('/');
                    if(Session::get('role') == "0")
                        return redirect('/admin/dashboard');

                }
                else
                    // return redirect('auth/verification/page');
                     return redirect('/admin/dashboard');
            } else {
                // return redirect('/auth/signin')->with('message', 'Wrong Credentials');
                 return redirect('/admin/dashboard');
            }
        } else {
            // return redirect('/auth/signin')->with('message', 'Fill all the fields');
             return redirect('/admin/dashboard');
        }
    }


    public function signup()
    {
        $token = md5(time());
        $id = DB::table('users')->insertGetId([
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'password'=>md5($_POST['password']),
            'role'=>'1',
            'email_verified'=>'0',
            'email_verify_token'=>$token
        ]);
        echo "Should Redirect";
//        return redirect("/send/email/verify?email=".$_POST['email']."&u_id=".$id."&token=".$token);
        return redirect('/auth/signup')->with('success','Login to your account');
    }

    public function signout(){
        Session::flush();
        return redirect('/')->with('message','You have been logged out successfully');
    }

    public function verifyEmail($token, $id){
        DB::table('users')->where('email_verify_token',$token)->where('id',$id)->update(['email_verified'=>'1']);
        return redirect('/')->with('verified','You Account has been successfully verified');


    }
    public function reset_password(){
        $current = md5($_POST['current']);
        $new = md5($_POST['new']);
        $confirm = md5($_POST['confrim']);


        if(DB::table('users')->where('id',Session::get('id'))->where('password',$current)->exists()){
            if($new == $confirm){
                DB::table('users')->where('id',Session::get('id'))->update(['password'=>$new]);
                return back()->with('message','success-Password Successfully Changed');
            }
            else{
                return back()->with('message','danger-Confirm new password correctly');
            }
        }
        else{
            return back()->with('message','danger-Wrong Password');
        }
    }

    public function user_settings(){
        $data['title'] = "Profile Setting";
        return view('auth.userprofile',$data);

    }
    public function verificationPage(){
        $data['title'] = "Verify your email";
        return view('auth.verificationPage',$data);
    }
}
