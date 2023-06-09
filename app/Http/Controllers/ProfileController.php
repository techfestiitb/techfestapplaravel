<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use Carbon\Carbon;
use Hash;




class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
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
    public function image_upload(){
        return view('2019.profile.profile_edit');
    }
    public function dp_upload(){
        return view('2019.profile.dp_edit');
    }

    public function profile_edit(Request $request){
//        if(Auth::user()){
            $request->validate([
                'file'=>'required',
            ]);
            $file = Storage::put('profile_images', $request->file);
            DB::table('user_profile_images')->insert(['user_id'=>Auth::user()->id,'image'=>$file,'date_uploaded'=> Carbon::now()]);
            return redirect('/profile');
//        }
//        return redirect('/');
    }
    public function dp_edit(Request $request){
//        if(Auth::user()){
            $request->validate([
                'file'=>'required',
            ]);
            $file = Storage::put('profile_images', $request->file);
            DB::table('user_profile_images')->insert(['user_id'=>Auth::user()->id,'image'=>$file,'profile_image'=>"1",'date_uploaded'=> Carbon::now()]);
            return redirect('/profile');
//        }
//        return redirect('/');
    }
}
