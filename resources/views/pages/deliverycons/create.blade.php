@extends('layouts.app')
@section('content')
@if(Session::get('user_id'))
    <form action="{{route('deliverycon.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        <h1>Add Your Delivery</h1>
        {{csrf_field()}}
        
        <div>
        <div class="col-md-4 form-group">
            <span>Order ID</span>

           <select name="Ord_id">
            <option value="0" disable="true" selected="true">Select</option>
            @foreach($myorders as $myorder)
            <option value="{{$myorder->id}}">{{$myorder->O_id}}</option>
            @endforeach
           </select>
          
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
        <div>
            <span>Delivery Status</span>
        <select name="D_Status" id="">
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
<a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection