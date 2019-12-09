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
    public function index(){
        if(Auth::user()){
            if(!empty(Auth::user()->email_verified_at)){
                $user_row = DB::table('users')->where(['id'=>Auth::user()->id])->first();
                $user_image = DB::table('user_profile_images')->where(['user_id'=>Auth::user()->id])->orderByDesc('date_uploaded')->get();
                $profile_image = DB::table('user_profile_images')->where(['user_id'=>Auth::user()->id,'profile_image'=>"1"])->get()->last();
                $user_xps = DB::table('xps_user')->where(['user_id'=>Auth::user()->id])->first();
                return view('2019.profile.profileGet')->with(['user_row'=>$user_row, 'user_image'=>$user_image,'profile_image'=>$profile_image, 'xps'=>$user_xps]);
            }
            return redirect('/email/verify');
        }
        return redirect('/login');
    }
//    public function image_upload(){
//        return view('2019.profile.profile_edit');
//    }
//    public function dp_upload(){
//        return view('2019.profile.dp_edit');
//    }

    public function profile_edit(Request $request){
        if(Auth::user()){
            $request->validate([
                'file'=>'required',
            ]);
            $file = Storage::put('profile_images', $request->file);
            DB::table('user_profile_images')->insert(['user_id'=>Auth::user()->id,'image'=>$file,'date_uploaded'=> Carbon::now()]);
            return redirect('/profile');
        }
        return redirect('/');
    }
    public function dp_edit(Request $request){
//        return "Enter";
        if(Auth::user()){
            $request->validate([
                'file'=>'required',
            ]);
//            return "Enter";
            $file = Storage::put('profile_images', $request->file);
//            return "BCDD";
            DB::table('user_profile_images')->insert(['user_id'=>Auth::user()->id,'image'=>$file,'profile_image'=>"1",'date_uploaded'=> Carbon::now()]);
            return redirect('/profile');
        }
        return redirect('/');
    }
}
