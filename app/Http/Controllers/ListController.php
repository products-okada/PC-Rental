<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(Request $request){
//        dd($request->session()->get('user')); 
        return view('list', ['user' => $request->session()->get('user')]);
    }
}
