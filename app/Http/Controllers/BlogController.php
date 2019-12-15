<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Redirect;

class BlogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function blog(){
        $blog_row = DB::table('user_posts')->where(['approve'=>"1"])->orderByDesc('id')->get();
        return view('app.blog_display')->with(['blog_row'=>$blog_row]);
    }

    public function blog_approve_get(){
        if(Auth::user()->id == "100001" or "100033" or "100034"){
            $blog_row = DB::table('user_posts')->where(['approve'=>null])->get();
            return view('2019.admin.blog_approve')->with(['blog_row'=>$blog_row]);
        }
        else return redirect('/blog');

    }

    public function blog_approve(Request $data){
        if($data->approve == "1"){
            DB::table('user_posts')->where(['id'=>$data->id])->update(['approve'=>"1"]);
        }
        if($data->approve == "0"){
            DB::table('user_posts')->where(['id'=>$data->id])->update(['approve'=>"0"]);
        }
        else return redirect('/admin/blog');
    }
}
