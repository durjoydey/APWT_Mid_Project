@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <form action="{{route('myorder.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        <h1>Order Now</h1>
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Order ID</span>
            <input type="text" name="O_id" value="{{old('O_id')}}" class="form-control">
            @error('O_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>User ID</span>

           <select name="user_id">
            <option value="0" disable="true" selected="true">Select</option>
            @foreach($systemusers as $systemuser)
            <option value="{{$systemuser->id}}">{{$systemuser->id}}</option>
            @endforeach
            </select>
            @error('user_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Username</span>
            <input type="text" name="U_username" value="{{old('U_username')}}" class="form-control">
            @error('U_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Price</span>
            <input type="text" name="P_tprice" value="{{old('P_tprice')}}" class="form-control">
            @error('P_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Payment Type</span>
            <input type="text" name="Paymenttype" value="{{old('Paymenttype')}}" class="form-control">
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
        <input type="submit" class="btn btn-success" value="Order Now" >
    </form>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection