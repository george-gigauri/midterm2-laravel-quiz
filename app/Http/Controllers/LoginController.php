<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function doLogin(Request $request) {
        $username = $request->input("email");
        $password = $request->input("password");

        $checkLogin = DB::table('users')->where(['email'=>$username, 'password'=>$password])->get();
        if(count($checkLogin) > 0) {
            $permission = DB::table('users')->where(['email'=>$username, 'password'=>$password])->value('permissions');
            if ($permission==1) {
                return view('student');
            }else{
               return view('admin');
            }
        } else {
            echo "Login Failed!";
        }
    }
}
