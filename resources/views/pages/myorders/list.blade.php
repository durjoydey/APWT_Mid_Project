

@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Product Price</th>
            <th>Payment Type</th>
            <th>Order Status</th>
        </tr>
        @foreach($myorders as $myorder)
            <tr>
                <td>{{$myorder->O_id}}</td>
                <td>{{$myorder->user_id}}</td>
                <td>{{$myorder->U_username}}</td>
                <td>{{$myorder->P_tprice}}</td>
                <td>{{$myorder->Paymenttype}}</td>
                <td>{{$myorder->O_status}}</td>
                <td><a href="/myorder/edit/{{$myorder->id}}/{{$myorder->name}}">Edit</a></td>
                <td><a href="/myorder/delete/{{$myorder->id}}/{{$myorder->name}}">Cancel Order</a></td>
            </tr>
        @endforeach
    </table>
@endsection

