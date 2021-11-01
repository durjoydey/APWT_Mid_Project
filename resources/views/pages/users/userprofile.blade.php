@extends('layouts.app')
@section('content')
@if(Session::has('user_id')) 
<form action="{{route('userprofile')}}" class="col-md-6" method="post">
<h1>Edit Your Imformation</h1>
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="U_Name" value="{{$user->U_Name}}" class="form-control">
            @error('U_Name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="date" name="U_phone" value="{{$user->U_phone}}" class="form-control">
            @error('U_phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="col-md-4 form-group">
            <span>Address</span>
            <input type="text" name="U_address" value="{{$user->U_address}}" class="form-control">
            @error('U_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="col-md-4 form-group">
            <span>Username</span>
            <input type="text" name="U_username" value="{{$user->U_username}}" class="form-control">
            @error('U_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="U_email" value="{{$user->U_email}}" class="form-control">
            @error('U_email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="U_password" value="{{$user->U_password}}" class="form-control">
            @error('U_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Usertype</span>
            <input type="text" name="Usertype" value="{{$user->Usertype}}" class="form-control">
            @error('Usertype')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Profile Picture</span>
            <input type="text" name="U_profileimg" value="{{$user->U_profileimg}}" class="form-control">
            @error('U_profileimg')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection
<a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
