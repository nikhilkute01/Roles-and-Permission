<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        return view('dashboard');
    }
    public function userview(){
        return view('user');
    }
}
