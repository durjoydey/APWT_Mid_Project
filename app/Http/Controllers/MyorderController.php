<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyorderController extends Controller
{
    
    public function Create(){
        return view('pages.myorders.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'O_id'=>'required',
                'user_id'=>'required',
                'U_username'=>'required',
                'P_tprice'=>'required',
                'Paymenttype'=>'required',
                'O_status'=>'required',
            ],
            [
                'O_id.required'=>'Please put Order ID!',
                'user_id.required'=>'Please put User ID!',
                'U_username.required'=>'Please put Username!',
                'P_tprice.required'=>'Please put Price!',
                'Paymenttype.required'=>'Please put Payment!',
                'O_status.required'=>'Please put Order!',
            ]
        );

        $var = new Delivery();
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymenttype = $request->Paymenttype;
        $var->O_status=$request->O_status;
        $var->save();


        return "Order Done";      
    }
    public function list(){

        $myorders = Myorder::all();
        return view('pages.myorders.list')->with('myorders',$myorders);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $myorder = Myorder::where('id',$id)->first();
        return view('pages.myorders.edit')->with('myorder', $myorder);

    }

    public function editSubmit(Request $request){
        $var = Myorder::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->dob = $request->dob;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->save();
        return redirect()->route('myorder.list');

    }
    public function delete(Request $request){
        $var = Myorder::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('myorder.list');

    }

}