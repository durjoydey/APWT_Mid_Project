<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DmanController extends Controller
{
   
    public function Create(){
        return view('pages.users.create');
    }
    public function createSubmit(Request $request){
       
        $this->validate(
            $request,
            [
                'id'=>'required',
                'U_Name'=>'required|min:5',
                'U_phone'=>'required|min:5|regex:/^([0-9\s\-\+\(\)]*)$/',
                'U_address'=>'required',
                'U_username'=>'required|min:5',
                'U_email'=>'required',
                'U_password'=>'required|min:5',
                'Usertype'=>'required',
                'U_profileimg'=>'required',
            ],
            [
                'U_Name.required'=>'Name Required!',
                'U_Name.min'=>'Name must have minimum 5 charcters',
                'U_phone.required'=>'Phone Number Required!',
                'U_phone.regex'=>'Phone number must be numeric',
                'U_address.required'=>'Address Required!',
                'U_username.required'=>'Username Required!',
                'U_email.required'=>'Email Required!',
                'U_email.email'=>'Email is not valid!',
                'U_password.required'=>'Passsword Required!',
                'U_password.min'=>'Password must have minimum 5 charcters',
                'Usertype.required'=>'Usertype Required!',
                'U_profileimg'=>'Profile Picture Required!',
        
            ]
        );
        $var = new User();
       
        $var->U_Name= $request->U_Name;
        $var->U_phone= $request->U_phone;
        $var->U_address= $request->U_address;
        $var->U_username= $request->U_username;
        $var->U_email= $request->U_email;
        $var->U_password= $request->U_password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->U_profileimg;
        $var->save();


        return "Account was Created Successfully";
    }
}