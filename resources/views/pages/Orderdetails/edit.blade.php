@if(Session::get('user')) {{Session::get('user')}} 
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
            <span>Delivery Time</span>
            <input type="time" name="D_time" value="{{$orderdetail->D_time}}" class="form-control">
            @error('D_time')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection

@endif