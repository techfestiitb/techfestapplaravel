<?php
namespace App\Http\Controllers;
use App\Event;
use App\Participant;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Oauth2;
//use DB;
use Mail;
use Auth;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\DB;
use Redirect;

class MainController extends Controller
{
    public function competition_name_Get($competition_name){
        $competition_info = DB::table('competitions')->where(['link'=>$competition_name])->first();
        if(!empty($competition_info)){
            if(!Auth::user()){
                return view('2019.competitions.layouts.competitionGet')->with(['competition_info' => $competition_info]);
            }
            if(Auth::user()){
                $user_row = DB::table('tf_reg')->where(['email' => Auth::user()->email])->first();
                return view('2019.competitions.layouts.competitionGet')->with(['competition_info' => $competition_info, 'user_row' => $user_row]);
            }
        }else  return redirect("/competitions/");
    }
    public function competition_name_reg(Request $request, $competition_name){
        $competition_info = DB::table('competitions')->where(['link'=>$competition_name])->first();

        $user_row = DB::table('tf_reg')->where(['email' => Auth::user()->email])->first();// return the first row containing the user(session wala user)
        DB::table('tf_reg')->where(['email'=>Auth::user()->email])->update(["$competition_name"=>'1']);
        $subject = "Welcome to $competition_info->name - Techfest, IIT Bombay";
        $txt = "Dear $user_row->name,

Greetings! 
You have successfully registered in $competition_info->name with $user_row->email as your registered mail Id. Now you must either Create a Team or Join a Team to complete the procedure.

Carefully read the FAQ’s of competitions carefully to know more.

Regards";

        mail($user_row->email, $subject, $txt, "From:competitions@techfest.org" );
        return redirect("/competitions/{$competition_name}/");
    }
    public function competition_name_create_team_form($competition_name){
        $current_user_data = DB::table('tf_reg')->where(['email'=>Auth::user()->email])->first();
        return view("2019.competitions.create_teamform")->with(['current_user_data'=>$current_user_data, 'form'=>"$competition_name"]);
    }
    public function competition_name_join_team_form($competition_name){
        $current_user_data = DB::table('tf_reg')->where(['email'=>Auth::user()->email])->first();
        return view("2019.competitions.join_teamform")->with(['current_user_data'=>$current_user_data,'form'=>"$competition_name"]);
    }
    public function competition_name_leave_team($competition_name){
        if(Auth::user()) {
            $competition_info_team = $competition_name."_team";
            $current_team =  DB::table('tf_reg')->where(['email'=>Auth::user()->email])->first();
            if(!empty($current_team->$competition_info_team)){
                DB::table('tf_reg')->where(['email'=>Auth::user()->email])->update(["$competition_info_team"=>'']);
                return redirect("/competitions/{$competition_name}");
            }
            else return "you are not in a team";
        }
    }
    public function competition_name_create_team_reg(Request $data,$competition_name){
        if (Auth::user()) {
            $competition_info = DB::table('competitions')->where(['link'=>$competition_name])->first();
            $competition_info_team = $competition_name."_team";
            $competition_info_team_id = $competition_name."_team_id";
            $current_user_data = DB::table('tf_reg')->where(['email' => Auth::user()->email])->first();
            $a = 190000;
            $b = $current_user_data->id;
            $team_id = $a +$b;
            DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(["$competition_info_team" => $current_user_data->email, "$competition_info_team_id"=> $team_id]);
            $p2_exist = DB::table('tf_reg')->where(['email'=>$data->email2])->first();
            if(!empty($data->email2)){if (!empty($p2_exist->email)) {
                $p2 = DB::table('tf_reg')->where(['email' => $data->email2])->first();
//                check if he is already in a team
                if (empty($p2->$competition_info_team)) {
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(["$competition_info_team" => $current_user_data->email, "$competition_info_team_id"=>$team_id]);
                    DB::table('tf_reg')->where(['email' => $data->email2])->update(["$competition_info_team" => $current_user_data->email, "$competition_info_team_id"=> $team_id]);
                    DB::table('tf_reg')->where(['email' => $data->email2])->update(["$competition_name" => '1']);
                    $subject2 = "$competition_info->name, Techfest IIT Bombay";
                    $txt2 = "Dear $p2_exist->name, you have been successfully added to $current_user_data->name's team for $competition_info->name .
Your Team ID and Registered Mail ID are very important and will be used in future.
You can leave your current team by clicking on Leave a Team. 
Regards.";
                    mail($p2_exist->email, $subject2, $txt2, "From:competitions@techfest.org" );
                    $subject0 = "$competition_info->name, Techfest IIT Bombay";
                    $txt0 = "Dear $current_user_data->name, your team is successfully created for $competition_info->name  
You are the Team Leader, you can Remove a Team member or Dissolve the existing team. Hoping to see you at Techfest  
Regards. ";
                    mail($current_user_data->email, $subject0, $txt0, "From:competitions@techfest.org" );
                } else return Redirect::back()->withErrors(["$p2->email is already in another team, he/she must leave current team first"]);
            } else return Redirect::back()->withErrors(["$data->email2 is not registered on techfest"]);}
            $p3_exist = DB::table('tf_reg')->where(['email'=>$data->email3])->first();
            if(!empty($data->email3)){if (!empty($p3_exist->email)) {
                $p3 = DB::table('tf_reg')->where(['email' => $data->email3])->first();
//                check if he is already in a team
                if (empty($p3->$competition_info_team)) {
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(["$competition_info_team" => $current_user_data->email, "$competition_info_team_id"=> $team_id]);
                    DB::table('tf_reg')->where(['email' => $data->email3])->update(["$competition_info_team" => $current_user_data->email, "$competition_info_team_id"=> $team_id]);
                    DB::table('tf_reg')->where(['email' => $data->email3])->update(["$competition_name" => '1']);
                    $subject2 = "$competition_info->name, Techfest IIT Bombay";
                    $txt1 = "Dear $p3_exist->name, you have been successfully added to $current_user_data->name's team for $competition_info->name .
Your Team ID and Registered Mail ID are very important and will be used in future.
You can leave your current team by clicking on Leave a Team. 
Regards.";
                    mail($p3_exist->email, $subject2, $txt1, "From:competitions@techfest.org" );
                } else return Redirect::back()->withErrors(["$p3->email is already in another team, he/she must leave current team first"]);
            } else return Redirect::back()->withErrors(["$data->email3 is not registered on techfest"]);}
            $p4_exist = DB::table('tf_reg')->where(['email'=>$data->email4])->first();
            if(!empty($data->email3)){if(!empty($p4_exist->email)) {
                $p4 = DB::table('tf_reg')->where(['email' => $data->email4])->first();
//                check if he is already in a team
                if (empty($p4->$competition_info_team)) {
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(["$competition_info_team" => $current_user_data->email, "$competition_info_team_id"=> $team_id]);
                    DB::table('tf_reg')->where(['email' => $data->email4])->update(["$competition_info_team" => $current_user_data->email, "$competition_info_team_id"=> $team_id]);
                    DB::table('tf_reg')->where(['email' => $data->email4])->update(["$competition_name" => '1']);
                    $subject4 = "$competition_info->name, Techfest IIT Bombay";
                    $txt4 = "Dear $p4_exist->name, you have been successfully added to $current_user_data->name's team for $competition_info->name .
Your Team ID and Registered Mail ID are very important and will be used in future.
You can leave your current team by clicking on Leave a Team. 
Regards.";
                    mail($p4_exist->email, $subject4, $txt4, "From:competitions@techfest.org" );
                } else return  Redirect::back()->withErrors(["$p4->email is already in another team, he/she must leave current team first"]);
            } else return Redirect::back()->withErrors(["$data->email4 is not registered on techfest"]);}
            return redirect("/competitions/{$competition_name}");
        } else return redirect("/competitions/{$competition_name}");
    }
    public function competition_name_join_team_reg(Request $data, $competition_name){
        if(Auth::user()) {
            $competition_info_team = $competition_name."_team";
            $current_user_data = DB::table('tf_reg')->where(['email'=>Auth::user()->email])->first();
            $team_member_row = DB::table('tf_reg')->where(['email'=>$data->email])->first();
            if(!empty($team_member_row->email)){
                $team_member_count = DB::table('tf_reg')->where(["$competition_info_team" => $team_member_row->$competition_info_team])->count();

                if(empty($current_user_data->$competition_info_team)){
                    if($team_member_count <= 4 ){
                        if(!empty($data->email)){DB::table('tf_reg')->where(['email'=>$current_user_data->email])->update(["$competition_info_team"=>$team_member_row->$competition_info_team]);}
                        return redirect("/competitions/{$competition_name}");
                    }
                    else return Redirect::back()->withErrors(["Team does not exist /Team already full"]);
                }
                else return Redirect::back()->withErrors(["you are already registered in a team, drop current team to join new one"]);
            }
            else return Redirect::back()->withErrors(["$data->email is not registered on Techfest"]);
        }
        else return Redirect::back()->withErrors(["first signin"]);
    }
    public function competition_name_remove_member($competition_name, $id){
        $competition_info = DB::table('competitions')->where(['link'=>$competition_name])->first();
        $competition_info_team = $competition_name."_team";
        $user_row = DB::table('tf_reg')->where(['id' => $id])->first();
        $subject = "$competition_info->name, Techfest IIT Bombay";
        $txt = "Dear $user_row->name, you have been removed from the $competition_info->name competition Team by your team leader, you can either join another team or create your own team as a single member if you want.";

        mail($user_row->email, $subject, $txt, "From:competitions@techfest.org" );

        DB::table('tf_reg')->where(['id' => $id])->update(["$competition_info_team"=> '']);

        return redirect("/competitions/{$competition_name}");
    }
    public function competition_name_dissolve ($competition_name){
        $competition_info_team = $competition_name."_team";
        $current_user_data = DB::table('tf_reg')->where(['email' => Auth::user()->email])->first();
        $team =  DB::table('tf_reg')->where(["$competition_info_team" => $current_user_data->$competition_info_team])->get();
        if (!empty($team[0]->id)){DB::table('tf_reg')->where(['id' => $team[0]->id])->update(["$competition_info_team"=> '']);}
        if (!empty($team[1]->id)){DB::table('tf_reg')->where(['id' => $team[1]->id])->update(["$competition_info_team"=> '']);}
        if (!empty($team[2]->id)){DB::table('tf_reg')->where(['id' => $team[2]->id])->update(["$competition_info_team"=> '']);}
        if (!empty($team[3]->id)){DB::table('tf_reg')->where(['id' => $team[3]->id])->update(["$competition_info_team"=> '']);}
        return redirect("/competitions/{$competition_name}");
    }

    //2019 controllers for links
    public function competitions(){
        if(!Auth::user()){
            return redirect('/login');
        }
        if(Auth::user()){
            $user_row = DB::table('tf_reg')->where(['email' => Auth::user()->email])->first();// return the first row containing the user(session wala user)
            return view("2019.competitions.competitions")->with(['user_row' => $user_row]);
        }
    }

    public function summit(Request $data){
        if(!empty($data->email)){
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept'=>'summit']);
            $subject = "Welcome to Techfest International Summit";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest International Summit. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Summit. For confirmation, please check your mail!']);

        }
        return view('2019.summit');

    }
    public function esports(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'esports']);
            $subject = "Welcome to Techfest ESports";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for ESports. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to ESports. For confirmation, please check your mail!']);

        }
        return view('2019.esports');

    }
    public function workshops(Request $data){
        if(!empty($data->email)) {

            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'workshops']);
            $subject = "Welcome to Techfest Workshops";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Workshops. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Workshops. For confirmation, please check your mail!']);

        }
        return view('2019.workshops');

    }
    public function hospitality(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'hospitality']);
            $subject = "Welcome to Techfest Hospitality";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest's Hospitality. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Hospitality. For confirmation, please check your mail!']);

        }
        return view('2019.hospitality');

    }
    public function schedule_extra(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'schedule']);
            $subject = "Welcome to International Full Throttle";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest International Full Throttle. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Techfest Schedule. For confirmation, please check your mail!']);

        }
        return view('2019.schedule');

    }
    public function initiative(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'initiative']);
            $subject = "Welcome to Techfest Initiatives";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest Initiatives. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Initiatives. For confirmation, please check your mail!']);

        }
        return view('2019.initiatives_2019.initiatives2019');

    }
    public function mun(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'mun']);
            $subject = "Welcome to Techfest World MUN";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest World MUN. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to TWMUN. For confirmation, please check your mail!']);

        }
        return view('2019.mun');

    }
    public function ift(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'ift']);

            $subject = "Welcome to International Full Throttle";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest International Full Throttle. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to International Full Throttle. For confirmation, please check your mail!']);
        }
        return view('2019.ift');

    }
    public function ozone____extra(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'ift']);

            $subject = "Welcome to International Full Throttle";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest International Full Throttle. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to International Full Throttle. For confirmation, please check your mail!']);
        }
        return view('2019.ozone');

    }
    public function technoholix(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'technoholix']);

            $subject = "Welcome to Technoholix";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Technoholix. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Technoholix. For confirmation, please check your mail!']);
        }
        return view('2019.technoholix');

    }
    public function exhibitions(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'exhibitions']);

            $subject = "Welcome to Techfest International Exhibitions";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest International Exhibitions. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Exhibitions. For confirmation, please check your mail!']);
        }
        return view('2019.exhibitions');

    }
    public function robowars(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'robowars']);

            $subject = "Welcome to Techfest International Robowars";
            $txt = "Dear $data->email,

Thank you for subscribing to notifications for Techfest International Robowars. We shall be updating this page soon and as soon as we do, you shall be amongst the first to know!
Regards,
Team Techfest";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Thank you for subscribing to Techfest International Robowars. For confirmation, please check your mail!']);
        }
        return view('2019.robowars');

    }




    public function error404(){
        return abort(404);
    }
    public function error404Custom($name,$score){
        return view('errors.404')->with(['name'=>base64_decode($name),'score'=>base64_decode($score)]);
    }
    public function error404Test(){
        return view('404');
    }

}
