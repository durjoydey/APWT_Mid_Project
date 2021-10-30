@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post">
	
{{@csrf_field()}}

</div>
		<span>Username</span>
		<input type="text" name="U_username" value="{{old('U_username')}}" class="form-control">
		@error('U_username')
			<span class="text-danger">{{$message}}</span>
		@enderror
	</div>

	<div>
		<span>Password</span>
		<input type="password" name="U_password" value="{{old('U_password')}}" class="form-control">
		@error('U_password')
			<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
<input type="submit" name="" value="Login">
</form>
@endsection