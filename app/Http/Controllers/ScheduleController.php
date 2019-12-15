<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ScheduleController extends Controller
{
    public function schedule(){
        $shcedule_day1 = DB::table('schedule')->where(['day'=>"1"])->get();
        $shcedule_day2 = DB::table('schedule')->where(['day'=>"2"])->get();
        $shcedule_day3 = DB::table('schedule')->where(['day'=>"3"])->get();
        return view('app.schedule.schedule')->with(['shcedule_day1'=>$shcedule_day1,'shcedule_day2'=>$shcedule_day2,'shcedule_day3'=>$shcedule_day3]);
    }
}
