<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news_row = DB::table('newsfeed')->orderByDesc('id')->get();
        $user_row = DB::table('users')->where(['id'=>Auth::user()->id])->first();
        $user_image = DB::table('user_profile_images')->where(['user_id'=>Auth::user()->id])->orderByDesc('date_uploaded')->get();
        $profile_image = DB::table('user_profile_images')->where(['user_id'=>Auth::user()->id,'profile_image'=>"1"])->get()->last();
        $user_xps = DB::table('xps_user')->where(['user_id'=>Auth::user()->id])->first();
        if(empty($user_xps)){
            DB::table('xps_user')->insert(['user_id'=>Auth::user()->id,'xps'=>"50000"]);
        }
        return view('app.profileGet')->with(['user_row'=>$user_row, 'user_image'=>$user_image,'profile_image'=>$profile_image, 'user_xps'=>$user_xps,'news_rowabc'=>$news_row]);

    }

}
