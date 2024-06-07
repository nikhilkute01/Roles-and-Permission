<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rolemodel;
class DashboardController extends Controller
{
    public function dashboard(Request $request){
        return view('dashboard');
    }
    public function userview(){
        $data=Rolemodel::all();
        return view('user')->with(compact('data'));
    }
   
}
