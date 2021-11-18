<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(){
        $logItems = \DB::table('rental_log')->get();
        return ( view('log',['logItems' => $logItems]) );
    }
}
