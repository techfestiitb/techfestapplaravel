<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog(){
        $blog_row = DB::table('user_posts')->orderByDesc('id')->get();
        return view('2019.blog.blog_display')->with(['blog_row'=>$blog_row]);
    }
}
