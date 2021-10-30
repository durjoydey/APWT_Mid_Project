<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $user = User::where('phone',$request->phone)
                            ->where('password',md5($request->password))
                            ->first();
        if($user){
            $request->session()->put('user',$user->name);
            return redirect()->route('userdash');
        }

        return back();

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}