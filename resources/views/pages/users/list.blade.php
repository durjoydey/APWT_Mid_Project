@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>User Type</th>
            <th>User Profile Picture</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->U_Name}}</td>
                <td>{{$user->U_phone}}</td>
                <td>{{$user->U_address}}</td>
                <td>{{$user->U_username}}</td>
                <td>{{$user->U_email}}</td>
                <td>{{$user->U_password}}</td>
                <td>{{$user->Usertype}}</td>
                <td>{{$user->U_profileimg}}</td>
                <td><a href="/user/edit/{{$user->id}}/{{$user->U_Name}}">Edit</a></td>
              

            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection