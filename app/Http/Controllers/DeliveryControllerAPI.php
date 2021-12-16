<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery;

use App\Models\Myorder;

class DeliveryControllerAPI extends Controller
{
    

    public function Create(){
        $myorders =Myorder::all();
        return view('pages.deliverycons.create')->with('myorders',$myorders);
        
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'Ord_id'=>'required',
                'Pay_price'=>'required',
                'D_username'=>'required',
                'D_Status'=>'required',
                'D_time'=>'required',
            ],
            [
                'Ord_id.required'=>'Please put Order ID!',
                'Pay_price.required'=>'Please put Payment Price!',
                'D_username.required'=>'Please put username!',
                'D_Status.required'=>'Please put Delivery Status!',
                'D_time.required'=>'Please put Delivery Time!',
            ]
        );

        $var = new Delivery();
        $var->Ord_id= $request->Ord_id;
        $var->Pay_price= $request->Pay_price;
        $var->D_username = $request->D_username;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();


        return redirect()->route('deliverycon.list');     
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
        $var->Ord_id= $request->Ord_id;
        $var->Pay_price= $request->Pay_price;
        $var->D_username = $request->D_username;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();
        return redirect()->route('deliverycon.list');

    }
    public function delete(Request $request){
        $var = Delivery::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('deliverycon.list');

    }
    public function APIList(){
        return Delivery::all();
    }
    public function APIPost(Request $req){
        $var = new Delivery();
       
        $var->Ord_id= $request->Ord_id;
        $var->Pay_price= $request->Pay_price;
        $var->D_username = $request->D_username;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();

        return $req;
    }
}
