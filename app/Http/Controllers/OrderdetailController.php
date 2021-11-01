<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orderdetail;

use App\Models\Myorder;

class OrderdetailController extends Controller
{
    
    public function Create(){
        $myorders = Myorder::all();
        return view('pages.orderdetails.create')->with('myorders',$myorders);
        
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'order_id'=>'required',
                'P_name'=>'required',
                'P_price'=>'required',
                'P_categories'=>'required',
                'P_quantity'=>'required',
                'P_tprice'=>'required',
                'P_size'=>'required',
                'U_username'=>'required',
            ],
            [
                'order_id.required'=>'Please put Order ID!',
                'P_name.required'=>'Please put Product Name!',
                'P_price.required'=>'Please put Price!',
                'P_categories.required'=>'Please put Category!',
                'P_quantity.required'=>'Please put Price!',
                'P_tprice.required'=>'Please put Total Price!',
                'P_size.required'=>'Please put Product Size!',
                'U_username.required'=>'Please put username!',
            ]
        );

        $var = new Orderdetail();
        $var->order_id= $request->order_id;
        $var->P_name = $request->P_name;
        $var->P_price = $request->P_price;
        $var->P_categories=$request->P_categories;
        $var->P_quantity = $request->P_quantity;
        $var->P_tprice = $request->P_tprice;
        $var->P_size=$request->P_size;
        $var->U_username = $request->U_username;
        $var->save();


        return redirect()->route('orderdetail.list');     
    }
    public function list(){

        $orderdetails = Orderdetail::all();
        return view('pages.orderdetails.list')->with('orderdetails',$orderdetails);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $orderdetail = Orderdetail::where('id',$id)->first();
        return view('pages.orderdetails.edit')->with('orderdetail', $orderdetail);

    }

    public function editSubmit(Request $request){
        $var = Orderdetail::where('id',$request->id)->first();
        $var->order_id= $request->order_id;
        $var->P_name = $request->P_name;
        $var->P_price = $request->P_price;
        $var->P_categories=$request->P_categories;
        $var->P_tprice = $request->P_tprice;
        $var->P_size=$request->P_size;
        $var->U_username = $request->U_username;
        $var->save();
        return redirect()->route('orderdetail.list');

    }
    public function delete(Request $request){
        $var = Orderdetail::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('orderdetail.list');

    }

}