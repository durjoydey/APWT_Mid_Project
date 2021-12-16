<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Myorder;

use App\Models\Systemuser;

class MyOrderControllerAPI extends Controller
{
    
    public function Create(){
        $systemusers = Systemuser::all();

        return view('pages.myorders.create')->with('systemusers',$systemusers);
        
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
                'P_tprice.required'=>'Please put Total Price!',
                'Paymenttype.required'=>'Please put Payment Type!',
                'O_status.required'=>'Please put Order Status!',
            ]
        );

        $var = new Myorder();
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymenttype = $request->Paymenttype;
        $var->O_status=$request->O_status;
        $var->save();


        return redirect()->route('myorder.list');    
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
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymenttype = $request->Paymenttype;
        $var->O_status=$request->O_status;
        $var->save();
        return redirect()->route('myorder.list');

    }
    public function delete(Request $request){
        $var = Myorder::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('myorder.list');

    }

    public function APIList(){
        return Myorder::all();
    }
    public function APIPost(Request $req){
        $var = new Myorder();
       
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymenttype = $request->Paymenttype;
        $var->O_status=$request->O_status;
        $var->save();

        return $req;
    }
}
