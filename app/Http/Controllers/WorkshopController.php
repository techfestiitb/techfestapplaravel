<?php

namespace App\Http\Controllers;

use App\Event;
use App\Participant;
use App\Teams;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Mail;
use App\User;
use Google_Client;
use Google_Service_Oauth2;
use Illuminate\Session;
use Illuminate\Support\Facades\Storage;
use test\Mockery\TraitWithAbstractMethod;
use Image;
use Redirect;
use Auth;

class WorkshopController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function Get(){
        $all_workshops_info = DB::table('tf_workshops_2019')->take(25)->get();
        return view('2019.workshops.workshops')->with(['all_workshops_info' => $all_workshops_info]);
    } //returns all workshop page

    public function get_workshop($workshop){
        $workshops_info = DB::table('tf_workshops_2019')->where(['link'=>$workshop])->get()->first();
        if(!empty($workshops_info)) {
            return view('2019.workshops.workshop_detail')->with(['workshops_info' => $workshops_info]);
        }
        else return redirect('/workshops');
    } //returns single workshop page


    public function reg_workshop ( $workshop){
        $workshops_info = DB::table('tf_workshops_2019')->where(['link'=>$workshop])->get()->first();
        if(!empty($workshops_info)) {
                $user_row = DB::table('tf_reg')->where(['email' => Auth::user()->email])->first();// return the first row containing the user(session wala user)
                return view('2019.workshops.registerGet')->with(['workshops_info' => $workshops_info, 'user_row'=>$user_row]);
        }
        else return redirect('/workshops');
    }



    public function register_workshop($workshop,Request $data){

        $workshop_row = DB::table('tf_workshops_2019')->where(['link'=>$workshop])->get()->first();
        for( $i=0; $i< $workshop_row->no_of_team_member; $i++){
            $name = "name"; $input_name = $name.$i;
            $email = "email"; $input_email = $email.$i;
            $number = "number"; $input_number = $number.$i;
            $college = "college"; $input_college = $college.$i;
            $gender = "gender"; $input_gender = $gender.$i;
            $address = "address"; $input_address = $address.$i;
            $city = "city"; $input_city = $city.$i;
            $pincode = "pincode"; $input_pincode = $pincode.$i;
            $year = "year"; $input_year = $year.$i;
            DB::table('tf_workshops_participants_2019')->insert([
                'workshop'=>$workshop,
                'name'=>$data->$input_name,
                'email'=> $data->$input_email,
                'number'=> $data->$input_number,
                'registered_by'=> session()->get('user')->email,
                'college'=> $data->$input_college,
                'gender'=> $data->$input_gender,
                'address'=> $data->$input_address,
                'city'=> $data->$input_city,
                'pincode'=> $data->$input_pincode,
                'year'=> $data->$input_year,

            ]);
            DB::table('tf_reg')->where(['email'=> session()->get('user')->email,])->update(["$workshop"=> "1"]);
        }
                        $subject = "$workshop Registration | Techfest IIT Bombay";
                $txt = "Hey $data->name0,
Thanks for registering for the $workshop workshop. Your Team ID can be seen on dashboard. You need to pay for the workshop for successfully booking a seat in the workshop
Pay as soon as possible as limited seats are available.
Payment link- $workshop_row->payment_link
Your Registered Email ID & Phone Number are as follows:
$data->email0
$data->number0";

                mail(session()->get('user')->email, $subject, $txt, "From:workshops@techfest.org" );
//        return redirect("/workshops/$workshop");
        return view('2019.workshops.redirect')->with(['workshop_row'=>$workshop_row]);
//        return redirect("$workshop_row->payment_link");
    } // accept form data of workshop




    public function workshop_logout(){
        session()->flush();
        return redirect('/workshops19');
    }




























    public function getStatusPost($id){
        if(!session()->has('participant')) return 'unknown';
        $e = DB::table('event_participant')->where(['event_id'=>$id,'participant_id'=>session()->get('participant')->id])->first();
        if(!$e) return "known";
        else if($e->is_leader===1) return "leader";
        else return "member";
    }
    public function getTeamPost(Event $event){
        return (new Participant())->current()->team($event);
    }
    public function registerPost(Request $r){
        $count = $r->count;
        $participants = $r->participant;
        $insertedParticipants = [];
        for($x=0;$x<$count;$x+=1){
            $participant = $participants[$x];
            if(Participant::where('email',$participant['email'])->count()===0){
                $p = new Participant();
                $p->name = $participant['name'];
                $p->email = $participant['email'];
                $p->phone = $participant['phone'];
                $p->country = $participant['country'];
                $p->college = $participant['college'];
                $p->dob = Carbon::parse($participant['dob']);
                $p->pin = $participant['pin'];
                $p->address = $participant['address'];
                $p->gender = $participant['gender'];
                $p->save();
            }
            $insertedParticipants[] = Participant::whereEmail($participant['email'])->first();
        }
        $event = Event::whereId($r->event)->first();
        if($event->category!=='Workshop' && $event->category!=='WorkshopD' && !session()->has('admin')) return "Sorry, this is not a valid workshop";
        else if($count>$event->participants) return "More members than the allowed number";
        $teamId = Teams::insertGetId(['leader_id'=>$insertedParticipants[0]->id]);
        for($x=0;$x<$count;$x+=1){
            $participant = $insertedParticipants[$x];
            Mail::send('admin.mail.workshop',['participant'=>$participant,'event'=>$event,'teamId'=>$teamId],function($message) use ($participant){
                $message->from('register@techfest.org','Techfest-NoReply');
                $message->to($participant->email);
                $message->subject("User registration successful");
            });
            DB::table('event_participant')->insert(['event_id'=>$event->id,'participant_id'=>$participant->id,'team_id'=>$teamId,'is_leader'=>$x===0]);
        }
        return ["success"=>true,'id'=>$teamId];
    }
    public function workshopTransfer(){
        $teams = DB::table('event_participant')->where('event_id',51)->pluck('team_id');
        $ts = Teams::whereIn('id',$teams)->whereNull('ticket_id')->get();
        foreach($ts as $t){
            DB::table('event_participant')->where(['participant_id'=>$t->leader_id,'team_id'=>$t->id])->update(['event_id'=>84]);
        }
    }
}
