@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
<form action="{{route('myorder.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$myorder->id}}">
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="user_id" value="{{$myorder->user_id}}" class="form-control">
            @error('user_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="O_id" value="{{$myorder->O_id}}" class="form-control">
            @error('O_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="user_id" value="{{$myorder->user_id}}" class="form-control">
            @error('user_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="U_username" value="{{$myorder->U_username}}" class="form-control">
            @error('U_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="P_tprice" value="{{$myorder->P_tprice}}" class="form-control">
            @error('P_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span></span>
            <input type="hidden" name="Paymenttype" value="{{$myorder->Paymenttype}}" class="form-control">
            @error('Paymenttype')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Order Status</span>
        <select name="O_status" id="">
            <option value="" disable="true" selected="true">Select</option>
            <option value="Proccessing">Proccessing</option>
            <option value="Order has been accepted">Order has been accepted</option>
            <option value="2 days left">2 days left</option>
            <option value="1 day left">1 day left</option>
            <option value="2 hours away">2 hours away</option>
            <option value="10 minutes away">10 minutes away</option>
            <option value="2 minutes away">2 minutes away</option>
            <option value="Delivery Done">Delivery Done</option>
        </select>
            @error('O_status')
                <span class="text-danger">{{$message}}</span>
            @enderror
</div>
       
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection