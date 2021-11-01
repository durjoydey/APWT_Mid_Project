@extends('layouts.app')
@section('content')

@if(Session::get('user_id')) 

<h3>Welcome  {{Session::get('user_name')}}  </h3>
<h1>Select Your Options from here!</h1>

        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif

@endsection