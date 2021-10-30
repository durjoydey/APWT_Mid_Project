@extends('layouts.app')
@section('content')
    <h1>Home Page For Delivery man</h1>
    @if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif
@endsection