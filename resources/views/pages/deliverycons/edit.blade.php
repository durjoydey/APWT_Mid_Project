@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
<form action="{{route('product.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="col-md-4 form-group">
            <span>Delivery man ID</span>
            <input type="text" name="Dman_id" value="{{$product->Dman_id}}" class="form-control">
            @error('Dman_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Order id</span>
            <input type="text" name="Order_id" value="{{$product->Order_id}}" class="form-control">
            @error('Order_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Delivery Status</span>
            <input type="text" name="D_Status" value="{{$product->D_Status}}" class="form-control">
            @error('D_Status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Delivery Time</span>
            <input type="time" name="D_time" value="{{$product->D_time}}" class="form-control">
            @error('D_time')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection

@endif