@extends('auth.layout')
@section('content')
<div class="blog-login">
    <div class="blog-login-in">
        <center>
            <h3>Login - East Travelers</h3>
        </center>
        <form method="post" action="{{asset('auth/signin')}}">
            @csrf
            <img src="{{asset('theme/admin')}}/images/logo.png" alt="" />
            <div class="row">
                <div class="input-field col s12">
                    <input type="email" name="email" placeholder="email" required autofocus class="validate">
                    <label for="first_name1">User Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" name="password" placeholder="Password" required class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="waves-effect waves-light btn-large btn-log-in" type="submit">Login</button>
                </div>
            </div>
            <div class="row">
                @if(Session::has("message"))
                <div class="alert alert-danger text-center">
                    {{Session::get('message')}}
                </div>
                @endif

                @if(Session::has("verified"))
                <div class="alert alert-success text-center">
                    {{Session::get('verified')}}
                </div>
                @endif
            </div>
            {{-- <a href="forgot.html" class="for-pass">Forgot Password?</a>--}}
        </form>
    </div>
</div>
@endsection