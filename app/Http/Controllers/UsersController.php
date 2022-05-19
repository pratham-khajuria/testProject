<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\view;

class UsersController extends Controller
{
    //

    function checkLogin(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $req->email;
        $password = $req->password;

        $isValidUser = DB::table('views')
            ->where('email','=', $email)
            ->where('password','=', $password)
            ->exists();

        if($isValidUser){
            $role = DB::table('views')
                ->where('email','=', $email)
                ->where('password','=', $password)
                ->pluck('role');

            return "Logged in as ".$role;
        }
        else{
            return "Invalid Credentials";
        }
    }

    function newData(Request $req)
    {
        $req->validate([
           "name" => "required",
            "email" => "required",
            "mobile" => "required"
        ]);
       $view = new view;
       $view->name=$req->name;
       $view->email=$req->email;
       $view->mobile=$req->mobile;
       $view->role=$req->role;
       $view->password=$req->password;
       $view->created_at=Carbon::now();
       $view->save();
       return redirect("create");

    }

    public function showLoginPage(){
        return view('index');
    }

}


