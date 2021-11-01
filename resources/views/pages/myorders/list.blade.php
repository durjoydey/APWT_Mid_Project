
@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<h1>See Your Deliveries so far</h1>
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
            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif
@endsection

