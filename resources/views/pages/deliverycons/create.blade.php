@extends('layouts.app')
@section('content')
    <form action="{{route('deliverycon.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div>
        <div class="col-md-4 form-group">
            <span>Order ID</span>

           <select name="Ord_id">
            <option value="0" disable="true" selected="true">Select</option>
            @foreach($myorders as $myorder)
            <option value="{{$myorder->id}}">{{$myorder->O_id}}</option>
           </select>
           @endforeach
            @error('Ord_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span> Payment Price</span>
            <input type="text" name="Pay_price" value="{{old('Pay_price')}}" class="form-control">
            @error('Pay_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Username</span>
            <input type="text" name="D_username" value="{{old('D_username')}}" class="form-control">
            @error('D_username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Delivary Status</span>
            <input type="text" name="D_Status" value="{{old('D_Status')}}" class="form-control">
            @error('D_Status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Delivery Time</span>
            <input type="time" name="D_time" value="{{old('D_time')}}" class="form-control">
            @error('D_time')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Done" >
    </form>
</div>
@endsection