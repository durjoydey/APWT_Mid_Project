@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<h1>Delivery Approval</h1>
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>Payment Price</th>
            <th>Username</th>
            <th>Delivery Status</th>
            <th>Delivery Time</th>
        </tr>
        @foreach($deliverycons as $deliverycon)
            <tr>
                <td>{{$deliverycon->Ord_id}}</td>
                <td>{{$deliverycon->Pay_price}}</td>
                <td>{{$deliverycon->D_username}}</td>
                <td>{{$deliverycon->D_Status}}</td>
                <td>{{$deliverycon->D_time}}</td>
                <td><a href="/deliverycon/edit/{{$deliverycon->id}}/{{$deliverycon->Ord_id}}">Edit</a></td>
                <td><a href="/deliverycon/delete/{{$deliverycon->id}}/{{$deliverycon->Ord_id}}">Cancel Order</a></td>
            </tr>
         @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection
