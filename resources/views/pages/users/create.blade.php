@extends('layouts.app')
@section('content')
    <form action="{{route('user.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="U_Name" value="{{old('U_Name')}}" class="form-control">
            @error('U_Name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
            <span>Phone</span>
            <input type="text" name="U_phone" value="{{old('U_phone')}}" class="form-control">
            @error('U_phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Address</span>
            <input type="text" name="U_address" value="{{old('U_address')}}" class="form-control">
            @error('U_address')
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
        </div>
            <span>Email</span>
            <input type="email" name="U_email" value="{{old('U_email')}}" class="form-control">
            @error('U_email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
            <span>Password</span>
            <input type="password" name="U_password" value="{{old('U_password')}}" class="form-control">
            @error('U_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
      
            <span>Usertype</span>
            <input type="text" name="Usertype" value="{{old('Usertype')}}" class="form-control">
            @error('Usertype')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
      
      <span>Profile Picture</span>
      <input type="select" name="U_profileimg" value="{{old('U_profileimg')}}" class="form-control">
      @error('U_profileimg')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
        <input type="submit" class="btn btn-success" value="Sign Up" >
    </form>
@endsection