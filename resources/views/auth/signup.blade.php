@extends('auth.layout')
@section('content')
<div class="signup-box">
    <div class="card">
        <div class="body">
            <form id="sign_up" method="POST" action="{{asset('auth/signup')}}">
                {{csrf_field()}}
                <div class="msg">Register a new membership</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="name" placeholder="Name Surname" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>
            </form>
        </div>
    </div>
</div>
@endsection