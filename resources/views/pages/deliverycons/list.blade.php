@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>Payment Price</th>
            <th>Delivery Status</th>
            <th>Username</th>
            <th>Delivery Status</th>
            <th>Delivery Time</th>
        </tr>
        @foreach($deliverycons as $deliverycon)
            <tr>
                <td>{{$deliverycon->Ord_id}}</td>
                <td>{{$deliverycon->Pay_price}}</td>
                <td>{{$deliverycon->D_username}}</td>
                <td>{{$deliverycon->Username}}</td>
                <td>{{$deliverycon->D_Status}}</td>
                <td>{{$deliverycon->D_time}}</td>
                <td><a href="/deliverycon/edit/{{$deliverycon->id}}/{{$deliverycon->name}}">Edit</a></td>
                <td><a href="/deliverycon/delete/{{$deliverycon->id}}/{{$deliverycon->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

