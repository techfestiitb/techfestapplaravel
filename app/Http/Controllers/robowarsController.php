<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use Carbon\Carbon;
use Hash;


class robowarsController extends Controller

{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function view_home(){
        return view('2019.robowars.betting_portal.betting_interface');
    }

    public function view_leaderboard(){
        return view('2019.robowars.betting_portal.leaderboard');
    }

    public function view_bet(){
        $user_row = DB::table('users')->where(['id'=>Auth::user()->id])->first();
        $user_xps = DB::table('users')->where(['id'=>Auth::user()->id])->first();
        return view('2019.robowars.betting_portal.bet')->with(['user_row'=>$user_row, 'xps'=>$user_xps]);

    }

//    public function bet(){
//        $user_row = DB::table('users')->where(['id'=>Auth::user()->id])->first();
//
////        $user_image = DB::table('user_profile_images')->where(['user_id'=>Auth::user()->id])->orderByDesc('date_uploaded')->get();
////        $profile_image = DB::table('user_profile_images')->where(['user_id'=>Auth::user()->id,'profile_image'=>"1"])->get()->last();
//
//        $user_xps = DB::table('users')->where(['id'=>Auth::user()->id])->first();
//        return view('2019.robowars.betting_portal.bet')->with(['user_row'=>$user_row, 'xps'=>$user_xps]);
//    }

    public function set_bet($user_id, $current_bet_amount, $bet_on){
        DB::table('xps_user')->where(['user_id=>$user_id'])->update(['current_bet_amount'=>$current_bet_amount,'bet_on'=>$bet_on]);

        $user_xps = DB::table('users')->where(['id'=>Auth::user()->id])->first();
        return view(' ')->with(['user_row'=>$user_row, 'xps'=>$user_xps - $amount]);
    }

    public function declare_result($bot_won){
        $xps_user = DB::table('xps_user')->get();
        foreach($xps_user as $i){
            if($bot_won == 1){
                $won_lost =1;
            }
            return $this->$this->result($i->id, $i->current_bet_amount, $won_lost);
        }
        return "success";
    }


    public function result($user_id, $amount, $won_lost){
        if($won_lost = 1){
            $amount = 0.5*$amount;
            DB::table('xps_user')->where(['user_id=>$user_id'])->increment('xps',$amount);
        }
        else{
            $amount = 0.5*$amount;
            DB::table('xps_user')->where(['user_id=>$user_id'])->decrement('xps',$amount);
        }
    }
}