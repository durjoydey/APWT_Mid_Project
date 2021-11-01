
@if(Session::get('user_name'))
<a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
<form action="{{route('orderdetail.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$orderdetail->id}}">
        <div class="col-md-4 form-group">
            <span>Order ID</span>
            <input type="text" name="order_id" value="{{$orderdetail->order_id}}" class="form-control">
            @error('order_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="P_name" value="{{$orderdetail->P_name}}" class="form-control">
            @error('P_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="P_price" value="{{$orderdetail->P_price}}" class="form-control">
            @error('P_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Categories</span>
            <input type="text" name="P_categories" value="{{$orderdetail->P_categories}}" class="form-control">
            @error('P_categories')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Quantity</span>
            <input type="text" name="P_quantity" value="{{$orderdetail->P_quantity}}" class="form-control">
            @error('P_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="P_tprice" value="{{$orderdetail->P_tprice}}" class="form-control">
            @error('P_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Size</span>
            <input type="time" name="P_size" value="{{$orderdetail->P_size}}" class="form-control">
            @error('P_size')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Username</span>
            <input type="time" name="U_username" value="{{$orderdetail->U_username}}" class="form-control">
            @error('U_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection

@endif