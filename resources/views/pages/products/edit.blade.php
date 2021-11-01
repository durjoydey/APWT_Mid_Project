@if(Session::get('user_id'))


@extends('layouts.app')
@section('content')
<form action="{{route('product.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="col-md-4 form-group">
            <span>Product ID</span>
            <input type="text" name="P_id" value="{{$product->P_id}}" class="form-control">
            @error('P_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="P_name" value="{{$product->P_name}}" class="form-control">
            @error('P_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="P_price" value="{{$product->P_price}}" class="form-control">
            @error('P_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Category ID</span>
            <input type="text" name="Cat_id" value="{{$product->Cat_id}}" class="form-control">
            @error('Cat_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Quantity</span>
            <input type="text" name="P_quantity" value="{{$product->P_quantity}}" class="form-control">
            @error('P_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Details</span>
            <input type="text" name="P_details" value="{{$product->P_details}}" class="form-control">
            @error('P_details')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Image 1</span>
            <input type="text" name="P_img1" value="{{$product->P_img1}}" class="form-control">
            @error('P_img1')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Image 2</span>
            <input type="text" name="P_img2" value="{{$product->P_img2}}" class="form-control">
            @error('P_img2')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Image 3</span>
            <input type="text" name="P_img3" value="{{$product->P_img3}}" class="form-control">
            @error('P_img3')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection
