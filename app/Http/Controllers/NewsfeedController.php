<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
use Storage;

class NewsfeedController extends Controller
{
    //
    public function newsfeed(){
        $news_row = DB::table('newsfeed')->orderByDesc('id')->get();
        return view('2019.newsfeed.newsfeed')->with(['news_rowabc'=>$news_row]);
    }

    public function news_insert(Request $data){
        $data->validate([
            'file'=>'required',
        ]);
        $file = Storage::put('news_images', $data->file);
        DB::table('newsfeed')->insert([
            'title'=>$data->title,
            'description'=>$data->description,
            'link'=>$data->link,
            'image'=>$file,
            'social_media'=>$data->social_media,
            'time'=>Carbon::now()->addHours(5)->addMinutes(30),
        ]);
        return redirect('/newsfeed');
    }
}
