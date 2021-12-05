<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Systemuser;

class DmanController extends Controller
{
   
    public function Create(){
        return view('pages.users.create');
    }
    public function createSubmit(Request $request){
       
        $this->validate(
            $request,
            [
                'U_Name'=>'required|min:5|max:20',
                'U_phone'=>'required|min:11||max:15||unique:systemusers,U_phone|regex:/^([0-9\s\-\+\(\)]*)$/',
                'U_address'=>'required',
                'U_username'=>'required|min:6|max:12',
                'U_email'=>'required|regex:/(.+)@(.+)\.(.+)/i|unique:systemusers,U_email',
                'U_password'=>'required|min:7|max:15',
                'Usertype'=>'required',
              
            ],
            [
                'U_Name.required'=>'Name Required!',
                'U_Name.min'=>'Name must have minimum 5 charcters',
                'U_name.max'=>'Name must have maximum 20 charcaters!',
                'U_phone.required'=>'Phone Number Required!',
                'U_phone.regex'=>'Phone number must be numeric',
                'U_phone.min'=>'Phone Number must have minimum 11 charcters',
                'U_phone.max'=>'Name must have maximum 15 charcaters!',
                'U_address.required'=>'Address Required!',
                'U_username.required'=>'Username Required!',
                'U_username.min'=>'Username must have minimum 6 charcaters!',
                'U_username.max'=>'Username must have maximum 12 charcaters!',
                'U_email.required'=>'Email Required!',
                'U_email.email'=>'Email is not valid!',
                'U_password.required'=>'Passsword Required!',
                'U_password.min'=>'Password must have minimum 7 charcters',
                'U_password.max'=>'Password must have maximum 15 charcters',
                'Usertype.required'=>'Usertype Required!',
               
        
            ]
        );
        $var = new Systemuser();
       
        $var->U_Name= $request->U_Name;
        $var->U_phone= $request->U_phone;
        $var->U_address= $request->U_address;
        $var->U_username= $request->U_username;
        $var->U_email= $request->U_email;
        $var->U_password= $request->U_password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->U_profileimg;
        $var->save();


        return redirect()->route('login');
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $users = Systemuser::where('id',$id)->first();
        return view('pages.users.edit')->with('users', $users);

    }
    public function editSubmit(Request $request){
        $var = Systemuser::where('id',$request->id)->first();
        $var->U_Name= $request->U_Name;
        $var->U_phone = $request->U_phone;
        $var->U_address = $request->U_address;
        $var->U_username=$request->U_username;
        $var->U_email= $request->U_email;
        $var->U_password= $request->U_password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->U_profileimg;
        $var->save();
      
        return redirect()->route('user.list');

    }
    public function list(){

        $users = Systemuser::all();
        return view('pages.users.list')->with('users',$users);
    }
    public function delete(Request $request){
        $var = Systemuser::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('user.list');

    }

    public function APIList(){
        return Systemuser::all();
    }
    public function APIPost(Request $req){
        $var = new Systemuser();
       
        $var->U_Name= $request->U_Name;
        $var->U_phone = $request->U_phone;
        $var->U_address = $request->U_address;
        $var->U_username=$request->U_username;
        $var->U_email= $request->U_email;
        $var->U_password= $request->U_password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->U_profileimg;
        $var->save();

        return $req;
    }
  
}
