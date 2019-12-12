<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebpagesController extends Controller
{
    //
    public function lectures(){
        $lectures_row = DB::table('lectures')->get();
        return view('2019.lectures.lectures')->with(['lectures_row'=>$lectures_row]);
    }
    public function exhibitions(){
        $exhibitions_row = DB::table('exhibitions')->get();
        return view('2019.exhibitions.exhibitions')->with(['exhibitions_row'=>$exhibitions_row]);
    }
    public function ift(){
        return view('2019.ift.ift');
    }
    public function robowars(){
        return view('2019.robowars.robowars');
    }
    public function summit(){
        return view('2019.summit.summit');
    }
    public function industrysummit(){
        return view('2019.summit.industrysummit');
    }
    public function ozone(){
        return view('2019.ozone.ozone');
    }
}
