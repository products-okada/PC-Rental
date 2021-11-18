<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function setusername(Request $request){
        $request->session()->put('user',$request->input('username'));
        return redirect('/list');
    }
}
