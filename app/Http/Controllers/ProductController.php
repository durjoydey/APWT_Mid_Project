<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function Create(){
        return view('pages.products.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'P_id'=>'required',
                'P_name'=>'required',
                'P_price'=>'required',
                'P_categories'=>'required',
                'P_quantity'=>'required',
                'P_details'=>'required',
                'P_img1'=>'required',
                'P_img2'=>'required',
                'P_img3'=>'required',
            ],
            [
                'P_id.required'=>'Please put Product ID!',
                'P_name.required'=>'Please put Product Name!',
                'P_price.required'=>'Please put Product Price!',
                'P_categories.required'=>'Please put Product Category!',
                'P_quantity.required'=>'Please put Product Quantity',
                'P_details.required'=>'Please put Product Details!',
                'P_img1.required'=>'Please put Product Image 1!',
                'P_img2.required'=>'Please put Product Image 2!',
                'P_img3.required'=>'Please put Product Image 3!',
            ]
        );

        $var = new Product();
        $var->P_id= $request->P_id;
        $var->P_name = $request->P_name;
        $var->P_price = $request->P_price;
        $var->P_categories=$request->P_categories;
        $var->P_quantity = $request->P_quantity;
        $var->P_details = $request->P_details;
        $var->P_img1=$request->P_img1;
        $var->P_img2=$request->P_img2;
        $var->P_img3=$request->P_img3;
        $var->save();


        return "Product Added";      
    }
    public function list(){

        $products = Product::all();
        return view('pages.products.list')->with('products',$products);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $product= Product::where('id',$id)->first();
        return view('pages.products.edit')->with('product', $product);

    }

    public function editSubmit(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->dob = $request->dob;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->save();
        return redirect()->route('product.list');

    }
    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('product.list');

    }

}
