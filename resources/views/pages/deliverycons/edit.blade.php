@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<form action="{{route('deliverycon.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$deliverycon->id}}">
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="Ord_id" value="{{$deliverycon->Ord_id}}" class="form-control">
            @error('Ord_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="Pay_price" value="{{$deliverycon->Pay_price}}" class="form-control">
            @error('Pay_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="D_username" value="{{$deliverycon->D_username}}" class="form-control">
            @error('D_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Delivery Status</span>
            <input type="text" name="D_Status" value="{{$deliverycon->D_Status}}" class="form-control">
            @error('D_Status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="D_time" value="{{$deliverycon->D_time}}" class="form-control">
            @error('D_time')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection
