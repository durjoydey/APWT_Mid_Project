<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Systemuser;

class LoginController extends Controller
{
    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $validate=$request->validate([


            'U_username'=>'required',
            'U_password'=>'required',
       ],
       [
           'U_username.required'=>'Username required!',
           'U_password.required'=>'Password required!',
           
           
       ]
       
       );

       $Systemuser = Systemuser::where('U_username',$request->U_username)
       ->where('U_password',$request->U_password)
       ->first();

        if($Systemuser){
        $request->session()->put('user_id',$Systemuser->id);
        $request->session()->put('user_name',$Systemuser->U_username);
        return redirect()->route('userdash');
       

    }
    return back();


}

        public function logout(){   
                session()->forget('user_id');
                return redirect()->route('login');
            }



            public function userdash(){

                $Systemuser=Systemuser::where('id',Session()->get('user_id'))->first();
       
                return view('pages.users.userdash')->with('Systemuser',$Systemuser);
           }
       

}