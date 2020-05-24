@extends('auth.layout')
@section('content')
    <div class="login-box">
        <div class="card">
            <div class="body">
                <h3 class="text text-center">
                    Please verify your email by clicking the link we send you, if you do not recieve email in inbox, check spam folder
                </h3>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="{{route('signin')}}">Login Again</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="">Forgot Password?</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
