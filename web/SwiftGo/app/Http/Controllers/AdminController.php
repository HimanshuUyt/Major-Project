<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function open_login(){
        return view('login');
    }

    public function login(Request $request) {
        
        $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
        $data=User1::where("email",$request->email)->where("password",md5($request->password))->first();

        if(strcasecmp($request->email,"admin")==0 && strcasecmp($request->password,"admin")==0){
            return redirect('admin');
        }
        else if($data!=null){
            session()->put("user",$data);
            return redirect('/');
        }else{
            return back()->withSuccess("Invalid Username/Password");
        }
    }


    public function open_register() {
        return view('register');
    }

    public function register(Request $request) {
        
        $request->validate([
            "fullname"=> "required",
            "username"=> "required | unique:user",
            "password"=>"required | min:8 | max:12",
            "con_password"=>"required | same:password",
            "email"=>"required | email",
            "mobileno"=>"required |numeric | digits:10",
            "address"=>"required"
        ]);

        $table = new User1();
        $table->fullname = $request->fullname;
        $table->email = $request->email;
        $table->username = $request->username;
        $table->mobileno = $request->mobileno;
        $table->address = $request->address;
        $table->password = md5($request->password);
        $table->save();


        return redirect('login')->withSuccess("Registered Success");
    }
}
