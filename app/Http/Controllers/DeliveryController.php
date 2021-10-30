<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    
    public function Create(){
        return view('pages.deliverycons.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'Dman_id'=>'required',
                'Order_id'=>'required',
                'D_Status'=>'required',
                'D_time'=>'required',
            ],
            [
                'Dman_id.required'=>'Please put Delivery man ID!',
                'Order_id.required'=>'Please put Order ID!',
                'D_Status.required'=>'Please put Delivery Status!',
                'D_time.required'=>'Please put Delivery Time!',
            ]
        );

        $var = new Delivery();
        $var->Dman_id= $request->Dman_id;
        $var->Order_id = $request->Order_id;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();


        return "Delivery Added";      
    }
    public function list(){

        $deliverycons = Delivery::all();
        return view('pages.deliverycons.list')->with('deliverycons',$deliverycons);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $deliverycon = Delivery::where('id',$id)->first();
        return view('pages.deliverycons.edit')->with('deliverycon', $deliverycon);

    }

    public function editSubmit(Request $request){
        $var = Delivery::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->dob = $request->dob;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->save();
        return redirect()->route('deliverycon.list');

    }
    public function delete(Request $request){
        $var = Delivery::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('deliverycon.list');

    }

}
