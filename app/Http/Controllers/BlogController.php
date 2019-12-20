<?php

namespace App\Http\Controllers;

use Cassandra\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use DB;
use Auth;
use Carbon\Carbon;
use Redirect;

class BlogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function blog(){

        $blog_row = DB::table('user_posts')->where(['approve'=>"1"])->orderByDesc('user_posts.id')->join('users', 'user_posts.user_id', '=', 'users.id')->join('user_profile_images', 'user_posts.user_id', '=', 'user_profile_images.user_id')->select('user_posts.*','users.name as name','user_profile_images.image as profile_img')->where(['user_profile_images.profile_image'=>'1'])->get();
        $likes_count=collect();$liked=collect();
        $profile_img=DB::table('user_profile_images')->where(['user_id'=>Auth::user()->id,'profile_image'=>"1"])->get()->last();
            foreach ($blog_row as $blog) {

                $var = (DB::table('BlogUpvotes')->where(['blog_id' => $blog->id])->count());


                $likes_count=$likes_count->concat([DB::table('BlogUpvotes')->where(['blog_id' => $blog->id])->count()]);

                $liked=$liked->concat([DB::table('BlogUpvotes')->where(['blog_id' => $blog->id, 'user_who_upvoted' => Auth::user()->id])->get()]);

            }

        return view('app.blog_display')->with(['blog_row'=>$blog_row,'likes_count'=>$likes_count,'liked'=>$liked,'profile_img'=>$profile_img]);
    }

    public function blog_approve_get(){
        if(Auth::user()->id == "100001" or "100033" or "100034" or "100040"){
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

    public function post_blog(Request $data){
        echo $data->image; echo $data->description;
        if($data->image !=''){
            $file = Storage::put('blog_images', $data->image);
            DB::table('user_posts')->insert(['user_id'=>Auth::user()->id,'image'=>$file,'approve'=>NULL,'description'=>$data->description,'date_uploaded'=> Carbon::now()]);
        }
        else{
            DB::table('user_posts')->insert(['user_id'=>Auth::user()->id,'approve'=>NULL,'description'=>$data->description,'date_uploaded'=> Carbon::now()]);
        }
        return redirect('/blog');
    }

    public function update_likes(Request $data){

        if($data->like=='true') {
            DB::table('BlogUpvotes')->insert(['blog_id'=>$data->blog_id,'user_who_upvoted'=>$data->user_id]);
            }
        else{
            DB::table('BlogUpvotes')->where(['blog_id'=>$data->blog_id,'user_who_upvoted'=>$data->user_id])->delete();
        }
    }
}
