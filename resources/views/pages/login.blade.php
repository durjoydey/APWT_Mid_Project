@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post">
	
	{{@csrf_field()}}
	<input type="text" name="phone" placeholder="Enter Phone Number"><br>
	<input type="password" name="password" placeholder="Enter Password"><br>
	<input type="checkbox" name="remember"> Remember Me<br>
	<input type="submit" name="" value="Login">
</form>
@endsection