<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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
       return redirect()->route('home');

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}