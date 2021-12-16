<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Systemuser;

use App\Models\Token;

use Illuminate\Support\Str;
use DateTime;

class LoginControllerAPI extends Controller
{
    public function  login(Request $req){
        
        $user = Systemuser::where('U_username',$req->U_username)->where('U_password',$req->U_password)->first();
        if($user){
            $api_token = Str::random(64);
            $token = new Token();
            $token->userid = $user->id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "No user found";

    }
    


}