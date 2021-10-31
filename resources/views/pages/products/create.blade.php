@extends('layouts.app')
@section('content')
    <form action="{{route('product.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <h1>Add Products</h1>
        
        <div class="col-md-4 form-group">
            <span>Product ID</span>
            <input type="text" name="P_id" value="{{old('P_id')}}" class="form-control">
            @error('P_id')
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
        <div>
            <span>Category ID</span>
            <input type="text" name="Cat_id" value="{{old('Cat_id')}}" class="form-control">
            @error('Cat_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Quantity</span>
            <input type="number" name="P_quantity" value="{{old('P_quantity')}}" class="form-control">
            @error('P_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Product Details</span>
            <input type="text" name="P_details" value="{{old('P_details')}}"  class="form-control">
            @error('P_details')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
      
            <span>Product Image 1</span>
            <input type="hidden" name="P_img1" value="A.jpg"  class="form-control">
            @error('P_img1')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
      
      <span>Product Image 2</span>
      <input type="hidden" name="P_img2" value="A.jpg"  class="form-control">
      @error('P_img2')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
  <div>
      
      <span>Product Image 3</span>
      <input type="hidden" name="P_img3" value="A.jpg"   class="form-control">
      @error('P_img3')
          <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
        <input type="submit" class="btn btn-success" value="Add Product" >
    </form>
@endsection