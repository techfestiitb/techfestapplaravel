<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use Carbon\Carbon;
use Hash;
use Redirect;


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
        $user_xps = DB::table('xps_user')->where(['user_id'=>Auth::user()->id])->first();
        $bot_list = DB::table('Bot_details')->where(['active_bot'=>"1"])->get();
        return view('2019.robowars.betting_portal.betting_get')->with(['user_row'=>$user_row, 'user_xps'=>$user_xps,'bot_list'=>$bot_list ]);

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

    public function set_bet(Request $data){
        $user_id = Auth::user()->id;
        $current_bet_amount = $data->amount;
        $bet_on =$data->bot_id;
        $xps_row = DB::table('xps_user')->where(['user_id'=>$user_id])->first();
        if($xps_row->robowars_betting_status != "1"){
            return Redirect::back()->withErrors(['Sorry, The Betting time os over. Please try text time.']);
        }
        else{
            if(!empty($xps_row)){
                DB::table('xps_user')->where(['user_id'=>$user_id])->update(['current_bet_amount'=>$current_bet_amount, 'bet_on'=>$bet_on]);
            }
            else{
                DB::table('xps_user')->insert(['user_id'=>$user_id,'current_bet_amount'=>$current_bet_amount, 'bet_on'=>$bet_on]);
            }
            return Redirect::back()->withErrors(["Your Betting XPS$current_bet_amount on Bot id $bet_on."]);
        }

    }

    public function admin_result(Request $data){
        $winner = $data->bot;
        $xps_user = DB::table('xps_user')->get();
        foreach($xps_user as $i){
            if($i->bet_on != null){
                if( $i->bet_on == $winner){
                    DB::table('xps_user')->where(['user_id'=>$i->user_id])->update(['xps'=>$i->xps + $i->current_bet_amount,'current_bet_amount'=>null ,'bet_on'=>null]);
                }
                else{
                    DB::table('xps_user')->where(['user_id'=>$i->user_id])->update(['xps'=>$i->xps - 0.5*$i->current_bet_amount,'current_bet_amount'=>null ,'bet_on'=>null]);
                }
            }
        }
        return Redirect::back()->withErrors(["Result declared"]);
    }
    public function betting_status(Request $data){
        $xps_user = DB::table('xps_user')->get();
        foreach($xps_user as $i){
            if($data->status == 1){
                DB::table('xps_user')->where(['user_id'=>$i->user_id])->update(['robowars_betting_status'=>"1"]);
            }
            if($data->status == 0){
                DB::table('xps_user')->where(['user_id'=>$i->user_id])->update(['robowars_betting_status'=>null]);
            }
        }
        if($data->status == 1) {
            return Redirect::back()->withErrors(["Betting Started"]);
        }
        if($data->status == 0) {
            return Redirect::back()->withErrors(["Betting Ended"]);
        }
    }

    public function admin_get(){
        return view('2019.robowars.admin.admin');
    }
    public function all_bots(){
        $bot_list = DB::table('Bot_details')->get();
        return view('2019.robowars.betting_portal.all_bots')->with(['bot_list'=>$bot_list ]);;
    }
}