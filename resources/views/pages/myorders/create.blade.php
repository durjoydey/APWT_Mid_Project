@extends('layouts.app')
@section('content')
    <form action="{{route('myorder.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Order ID</span>
            <input type="text" name="O_id" value="{{old('O_id')}}" class="form-control">
            @error('O_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
            <span>User ID</span>
            <input type="text" name="user_id" value="{{old('user_id')}}" class="form-control">
            @error('user_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
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
            <input type="text" name="O_status" value="{{old('O_status')}}" class="form-control">
            @error('O_status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Order Now" >
    </form>
@endsection