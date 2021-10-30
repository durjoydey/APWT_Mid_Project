@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
<form action="{{route('product.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$myorders->id}}">
        <div class="col-md-4 form-group">
            <span>Order Status</span>
            <input type="text" name="O_status" value="{{$myorders->O_status}}" class="form-control">
            @error('O_status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
      
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection

@endif