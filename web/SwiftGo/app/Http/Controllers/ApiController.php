<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class ApiController extends Controller
{
    //
    public function register(Request $request){

        if(!isset($request->username) ||
        !isset($request->password) ||
        !isset($request->email) ||
        !isset($request->mobileno)){

            return 
            [
                "status"=>false,
                "message"=>"Not Sufficient Parameter",
                "person"=>null
            ];
        }else{
            $request->validate([
                "username"=>"required",
                "mobileno"=>"required | numeric | digits:10",
                "email"=>"required | email",
                "password"=>"required | min:6 | max:10"
            ]);
            $table=new Person();
            $table->username=$request->username;
            $table->email=$request->email;
            $table->mobileno=$request->mobileno;
            $table->password=$request->password;
            $table->save();

            return
            [
                "status"=>true,
                "message"=>"Registered Successfully!!!",
                "person"=>$table
            ];

        }

    }
}
