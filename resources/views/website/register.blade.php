@extends('layouts.website')
<!--DASHBOARD-->
@section('content')
<section>
    <div class="tr-register">
        <div class="tr-regi-form">
            <h4>Create an Account</h4>
            <p>It's free and always will be.</p>
            <form class="col s12" action="{{url('auth/signup')}}" method="post">
                @csrf
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input name="name" type="text" class="validate">
                        <label>Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" name="email" class="validate">
                        <label>Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" name="password" class="validate">
                        <label>Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" id="password_confrim" class="validate">
                        <label>Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
                </div>
            </form>
            <p>Are you a already member ? <a href="{{route('signin')}}">Click to Login</a>
            </p>
        </div>
    </div>
</section>
<!--END DASHBOARD-->
<!--====== TIPS BEFORE TRAVEL ==========-->
    @endsection
