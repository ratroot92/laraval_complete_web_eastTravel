@extends('layouts.website')
@section('content')

@foreach($data as $city)
{{ $city[0]->getcity->name }}


@endforeach







@endsection