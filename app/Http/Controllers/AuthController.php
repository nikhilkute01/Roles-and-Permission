<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
      //  dd(Hash::make('1234567'));
        return view('login-page');
    }

    public function auth_login(Request $request){
        $remember=!empty($request->remember) ? true:false;

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$remember))
        {
            return view('dashboard');
        }
        else{
            return redirect()->back()->with('error','please enter correct  email and password');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }


}
