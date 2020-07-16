{{--for client portal--}}
@extends('layouts.admin')
{{----}}
@section('content')
    <div class="sb2-2">
        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card" style="padding: 5%">
                <div class="card-header">
                    Password Settings
                </div>
                <br>
                <div class="card-body">
                    <form action="{{url('auth/user/change/password')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Current Password</label>
                            <input type="password" class="form-control" name="current" required>
                        </div>
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" class="form-control" name="new" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confrim New Password</label>
                            <input type="password" class="form-control" name="confrim" required>
                        </div>
                            <input type="submit" class="btn btn-success btn-lg btn-block">
                        <br>
                        @if(Session::has('message'))
                            @php
                            $message = explode('-',Session::get('message'));
                                    @endphp
                            <div class="alert alert-{{$message[0]}}">
                                {{$message[1]}}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection
