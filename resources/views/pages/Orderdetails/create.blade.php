@extends('layouts.app')
@section('content')
    <form action="{{route('orderdetail.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Order ID</span>
            <input type="text" name="order_id" value="{{old('order_id')}}" class="form-control">
            @error('order_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
            <span>Product Name</span>
            <input type="text" name="P_name" value="{{old('P_name')}}" class="form-control">
            @error('P_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Product Price</span>
            <input type="text" name="P_price" value="{{old('P_price')}}" class="form-control">
            @error('P_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Product Categories</span>
            <input type="text" name="P_categories" value="{{old('P_categories')}}" class="form-control">
            @error('P_categories')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Product Quantity</span>
            <input type="text" name="P_quantity" value="{{old('P_quantity')}}" class="form-control">
            @error('P_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Total Price</span>
            <input type="text" name="P_tprice" value="{{old('P_tprice')}}" class="form-control">
            @error('P_tprice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Size</span>
            <input type="number" name="P_size" value="{{old('P_size')}}" class="form-control">
            @error('P_size')
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
        
        <input type="submit" class="btn btn-success" value="Submit" >
    </form>
@endsection