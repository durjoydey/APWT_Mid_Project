<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Systemuser;

class DmanControllerAPI extends Controller
{

    public function APIList(){
        return Systemuser::all();
    }
    public function APIPost(Request $request){
        $var = new Systemuser();
        $var->U_Name= $request->Name;
        $var->U_phone= $request->Phone;
        $var->U_address= $request->Address;
        $var->U_username= $request->Username;
        $var->U_email= $request->Email;
        $var->U_password= $request->Password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->Profileimg;
        $var->save();

        return $request;
    }
    function edit($id)
    {
        return Systemuser::find($id);
    }

    public function update(Request $request){

        $var = Systemuser::where('id',$request->id)->first();
        $var->U_Name= $request->U_Name;
        $var->U_phone= $request->U_phone;
        $var->U_address= $request->U_address;
        $var->U_username= $request->U_username;
        $var->U_email= $request->U_email;
        $var->U_password= $request->U_password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->U_profileimg;
        $var->save();

        return $request;
    }
}