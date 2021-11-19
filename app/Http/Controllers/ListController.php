<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;

class ListController extends Controller
{
    public function index(Request $request){
//        dd($request->session()->get('user')); 
        $pcLists = \DB::table('mobile_pc')->get();
        return view('list', ['user' => $request->session()->get('user')],['pcLists' => $pcLists]);
    }

    public function status_change(Request $request , $pcid){
        
        //ステータスの変更
        $change_record = Mobile::where('pcid', $pcid)->first();
        $status = $change_record->status;


        //ステータスの変更
        if($status == 0){
            $status = 1;
        }elseif($change_record->status == 1){
            $status = 0;
        }
        $change_record->status = $status;
        $change_record->user = $request->session()->get('user');
        $change_record->update = now();
        $change_record->update();

        //レコードの追加

        \DB::table('rental_log')->insert([
            'pcid' => $pcid,
            'status' => $status,
            'user' => $request->session()->get('user'),
            'update' => now(),
        ]);


        return (redirect()->route('list'));


    }
}
