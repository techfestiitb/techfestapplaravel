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
    public function view_home(){
        return view('2019.robowars.betting_portal.betting_interface');
    }

    public function view_leaderboard(){
        return view('2019.robowars.betting_portal.leaderboard');
    }

    public function view_bet(){
        return view('2019.robowars.betting_portal.bet');
    }
}