@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <table class="table table-borded">
        <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Categories</th>
            <th>Product Quantity</th>   
            <th>Product Total Price</th>
            <th>Product Size</th>
            <th>Username</th>     
        </tr>
        @foreach($orderdetails as $orderdetail)
            <tr>
                <td>{{$orderdetail->order_id}}</td>
                <td>{{$orderdetail->P_name}}</td>
                <td>{{$orderdetail->P_price}}</td>
                <td>{{$orderdetail->P_categories}}</td>
                <td>{{$orderdetail->P_quantity}}</td>
                <td>{{$orderdetail->P_tprice}}</td>
                <td>{{$orderdetail->P_size}}</td>
                <td>{{$orderdetail->U_username}}</td>
              
            </tr>
        @endforeach
    </table>
    </table>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection

