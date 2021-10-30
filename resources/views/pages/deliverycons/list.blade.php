@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Delivery man ID</th>
            <th>Order id</th>
            <th>Delivery Status</th>
            <th>Delivery Time</th>
        </tr>
        @foreach($deliverycons as $deliverycon)
            <tr>
                <td>{{$deliverycon->Dman_id}}</td>
                <td>{{$deliverycon->Order_id}}</td>
                <td>{{$deliverycon->D_Status}}</td>
                <td>{{$deliverycon->D_time}}</td>
                <td><a href="/deliverycon/edit/{{$deliverycon->id}}/{{$deliverycon->name}}">Edit</a></td>
                <td><a href="/deliverycon/delete/{{$deliverycon->id}}/{{$deliverycon->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@endif