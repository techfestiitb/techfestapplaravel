<!DOCTYPE HTML>
<html>
<head>
    <title>{!! $competition_info->name !!} | Techfest, IIT Bombay</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/icomoon.css">
    <!-- Bootstrap  -->
{{--    <link rel="stylesheet" href="/2019/compi/cozmo/css/bootstrap.css">--}}
    <!-- Flexslider  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/style.css">

    {{--    <!-- Modernizr JS -->--}}
{{--    <script src="/2019/compi/cozmo/js/modernizr-2.6.2.min.js"></script>--}}
    {{--    <!-- FOR IE9 below -->--}}
<!--[if lt IE 9]>-->
{{--    <script src="/2019/compi/cozmo/js/respond.min.js"></script>--}}
    {{--    <![endif]-->--}}
    <style>
        #toast {
            visibility: hidden;
            max-width: 50px;
            height: 50px;
            /*margin-left: -125px;*/
            margin: auto;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;

            position: fixed;
            z-index: 1;
            left: 0;right:0;
            bottom: 30px;
            font-size: 17px;
            white-space: nowrap;
        }
        #toast #img{
            width: 50px;
            height: 50px;

            float: left;

            padding-top: 16px;
            padding-bottom: 16px;

            box-sizing: border-box;


            background-color: #111;
            color: #fff;
        }
        #toast #desc{


            color: #fff;

            padding: 16px;

            overflow: hidden;
            white-space: nowrap;
        }

        #toast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }

        @keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }
        @-webkit-keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }

        @keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }
        @-webkit-keyframes shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @keyframes shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }

    </style>
    <style>
        .bg_1 {
            position: fixed;
            top: 00vw;
            height: calc(200vw + 4px);
            overflow: hidden;
        }
        body{
            font-family: Lato;
            background-color: #275E80; /* For browsers that do not support gradients */
            background-image: linear-gradient(to right, #5F4A85 , #70427D);
        }
        .border {
            scrollbar-width: none;
        }



        scroll_inside{
            width: 90%;
            display:block;
            border-radius: 20px;
            background-color: #fff;
            margin-bottom: 1%;
            overflow-y: scroll;
            height:20%;
            border: 1px solid #000000;
            font-size: 17px;
            font-family: Lato;

        }

        /*@media (min-width:992px) {*/

            .mobile_hide{
                /*background-color: transparent;*/

                background-size: 100% 100%;
                background-image: url({!! $competition_info->image !!}) ;
                box-shadow: 3px 3px 8px black;
                /*border: solid 2.5px;*/
                /*border-radius: 5px;*/

            }

        /*}*/
        /*@media (max-width:992px) {*/

            /*.mobile_hide{*/
            /*    height: 0px;*/
            /*}*/

        /*}*/

        h3  {
            color: white;
        }

    </style>
    <style>

        @-webkit-keyframes rotation {
            from {
                -webkit-transform: rotateZ(0deg);
            }
            to {
                -webkit-transform: rotateZ(359deg);
            }
        }
        .mandala1 {
            position: fixed;
            top: calc(30% - 140px);
            left: calc(2% - 330px);
            height: 900px;
            /*width: 680px;*/
            z-index:0;
            overflow-x: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            /*animation: rotation 30s infinite linear;*/
            /*rotation: 20deg;*/
        }
        .mandala2 {
            position: fixed;
            top: calc(15% - 140px);
            left: calc(90% - 330px);
            height: 300px;
            z-index:0;
            overflow-x: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            animation: rotation 10s infinite linear;
            /*rotation: 20deg;*/
        }
        .mandala3 {
            position: fixed;
            top: calc(75% - 140px);
            left: calc(102% - 330px);
            height: 450px;
            /*width: 680px;*/
            z-index:0;
            overflow-x: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            animation: rotation reverse 15s infinite linear;
            /*rotation: 20deg;*/
        }

    </style>
    <style>

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 4px;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 4px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: black;
        }
    </style>
    <style>
        .sign_in{
            /*margin: 0%;*/
            float: right;
        }
        .mandala1 {
            position: absolute;
            top: calc(30% - 140px);
            left: calc(32% - 330px);
            height: 600px;
            z-index:0;
            overflow: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            /*animation: rotation 30s infinite linear;*/
            /*rotation: 20deg;*/
        }
    </style>
    <style>
        #snackbar {
            visibility: hidden;
            width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>
</head>

<body>
@include('2019.header.header')
<?php
        $competition_info_link = $competition_info->link;
        $competition_info_team = $competition_info_link."_team";
        $competition_info_team_id = $competition_info_link."_team_id";
?>
<div id="colorlib-page">
    @include('2019.competitions.layouts.left_panel')
    @include('2019.competitions.layouts.all_competitions')

    <div id="colorlib-main">
        <div class="colorlib-about" style="margin-top: -20px;padding-top: 0px;">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-4 " style="width: 100%; height: 100%">
                        <div class="about-img animate-box mobile_hide" data-animate-effect="fadeInLeft" style="margin-top: 30px"></div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft" style="margin-right:-1%; padding-left:2.5% ;padding-right: -50%">
                        <div class="about-desc" style="margin-right: 0%; padding: 0px" >
                            {{--                            <span class="heading-meta">Welcome &amp; Introduce</span>--}}
                            <h2 style="color: white; font-weight: bold;margin-top: 20px;margin-bottom: 10px;">{!! $competition_info->name !!}</h2>
                            <hr style="color: white; border: 1px solid white">
                            <h3 style="color: white">{!! $competition_info->prize_money !!}</h3>

                            <p style="font-size: 15px;padding: 3%;width: 100%;font-family: Lato;color: white;text-align: justify;margin-bottom: .5em;">{!! $competition_info->task !!}<br><br><strong>THERE IS NO REGISTRATION FEES</strong></p>

                            @if(!empty($user_row->email))
                                <?php

                                $team =  DB::table('tf_reg')->where(["$competition_info_team" => $user_row->$competition_info_team])->get();
                                $team_leader_row = DB::table('tf_reg')->where(['email' => $team[0]->$competition_info_team])->first();
                                if($user_row->$competition_info_team == $user_row->email ){
                                    $team_leader = $user_row->name;
                                }
                                ?>
                            @endif

                            <a href="{!! $competition_info->ps_pdf !!}" target="_blank" class="btn btn-primary btn-learn" style="margin-left: 5%">Problem Statement</a>

{{--                            @if(!empty($user_row->email))--}}
{{--                                @if($user_row->$competition_info_link == 0 or empty($user_row->$competition_info_link))--}}
{{--                                    --}}{{--                                        if he is not registered--}}
{{--                                    <a href="/competitions/{!! $competition_info->link !!}/reg" class="btn btn-primary btn-learn " >Register</a>--}}
{{--                                @endif--}}
{{--                                @if($user_row->$competition_info_link == 1 and empty($user_row->$competition_info_team))--}}
{{--                                    <div class="dropdown ">--}}
{{--                                        <button class=" btn btn-primary btn-learn"><b>Team</b></button>--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="/competitions/{!! $competition_info->link !!}/createteam">Create Team</a>--}}
{{--                                            <a href="/competitions/{!! $competition_info->link !!}/jointeam">Join Team</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endif--}}

{{--                                @if(!empty($user_row->$competition_info_team))--}}
{{--                                    @if($user_row->$competition_info_team != $user_row->email )--}}
{{--                                        <a href="/competitions/{!! $competition_info->link !!}/leaveteam" class="btn btn-primary btn-learn" >Leave current Team</a>--}}
{{--                                    @endif--}}
{{--                                    @if($user_row->$competition_info_team == $user_row->email )--}}
{{--                                        <a href="/competitions/{!! $competition_info->link !!}/dissolveteam" class="btn btn-primary btn-learn" >Dissolve the team</a>--}}
{{--                                        <div class="dropdown ">--}}
{{--                                            @if(!empty($team[0]->name))--}}
{{--                                                <button class=" btn btn-primary btn-learn">Remove a Member</button>--}}
{{--                                            @endif--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                @if(!empty($team[0]->email) and ($team[0]->email != $team_leader_row->email))--}}
{{--                                                    <a href="/competitions/{!! $competition_info->link !!}/remove/{{$team[0]->id}}">{{$team[0]->name}}</a>--}}
{{--                                                @endif--}}
{{--                                                @if(!empty($team[1]->name) and ($team[1]->email != $team_leader_row->email))--}}
{{--                                                    <a href="/competitions/{!! $competition_info->link !!}/remove/{{$team[1]->id}}">{{$team[1]->name}}</a>--}}
{{--                                                @endif--}}
{{--                                                @if(!empty($team[2]->name) and ($team[2]->email != $team_leader_row->email))--}}
{{--                                                    <a href="/competitions/{!! $competition_info->link !!}/remove/{{$team[2]->id}}">{{$team[2]->name}}</a>--}}
{{--                                                @endif--}}
{{--                                                @if(!empty($team[3]->name) and ($team[3]->email != $team_leader_row->email))--}}
{{--                                                    <a href="/competitions/{!! $competition_info->link !!}/remove/{{$team[2]->id}}">{{$team[3]->name}}</a>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                @endif--}}
{{--                            @endif--}}
{{--                            @if(empty($user_row->email))--}}
{{--                                <button class="btn btn-primary btn-learn " id="signinButton">Register ()</button>--}}
{{--                            @endif--}}
                            @if(!empty($user_row))
{{--                                @if($user_row->$competition_info_link > 0 and empty($user_row->$competition_info_team))--}}
{{--                                    <div class="alert alert-warning">--}}
{{--                                        <p><strong>Hi {{$user_row->name}} <br> Now create a team for Cozmo Clench with <b>{{$user_row->email}}</b> as your Registered email id , now you must create/join a team.</strong></p>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                @if($user_row->$competition_info_link > 0 and !empty($user_row->$competition_info_team))
                                    <div class="" style="border: solid 2px white;border-radius: 6px;padding: 2%;width: 90%;margin-left: 5%;">
                                        <p style="color: white;margin-bottom: 0em;">
                                            Team Leader : {{$team_leader_row->name}}<br>
                                            Team ID :{!! $competition_info->coeff !!}- {{$team_leader_row->$competition_info_team_id}}
                                            @if(!empty($team[0]->name) )<br>
                                            Member1 : {{$team[0]->name}}
                                            @endif
                                            @if(!empty($team[1]->name) )
                                               | Member2 : {{$team[1]->name}}
                                            @endif
                                        </p>
                                        <p style="color: white; margin-bottom: 0px;">
                                            @if(!empty($team[2]->name))
                                                Member3 : {{$team[2]->name}}
                                            @endif
                                            @if(!empty($team[3]->name))
                                                | Member4 : {{$team[3]->name}}
                                            @endif
                                        </p>
                                    </div>
                                    <br>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="text_change" class="col-md-12 animate-box scroll_inside" data-animate-effect="fadeInLeft" style="
            width: 86%;
    display: block;
    border-radius: 5px;
    height: 20%;
    margin-left: 7%;
    color: white;
    border: 1px solid white;
    font-size: 17px;
    margin-top: 8px;
    font-family: Lato;
    padding: 0% 3%;">
            <p id="text_change" style="margin-bottom: 0px; color: white">{!! $competition_info->structure !!}</p>
        </div>
        <div id="snackbar" style="z-index: 10;">You must be SIGNED IN to register</div>
    </div>
</div>

<!-- jQuery -->
{{--<script src="/2019/compi/cozmo/js/jquery.min.js"></script>--}}
{{--<script src="/2019/compi/cozmo/js/jquery.waypoints.min.js"></script>--}}
{{--<script src="/2019/compi/cozmo/js/main.js"></script>--}}

<script>
    function launch_toast() {
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
</script>
<script>
    function myFunction1() {
        document.getElementById("text_change").innerHTML = "<br><h3>Structure</h3>  {!! $competition_info->structure !!}<br><br>";
        document.body.click("body");
        window.scrollBy(00, 200);
        }
</script>

<script>
    function myFunction2() {
        document.getElementById("text_change").innerHTML = "<br><h3>FAQs</h3> {!! $competition_info->faqs !!}<br><br>";
        document.body.click("body");
        window.scrollBy(00, 200);

    }
</script>
<script>
    function myFunction3() {
        document.getElementById("text_change").innerHTML = " <br> <h3>Timeline</h3>{!! $competition_info->timeline !!}<br><br>";
        document.body.click("body");
        window.scrollBy(00, 200);
    }
</script>
<script>
    function myFunction4() {
        document.getElementById("text_change").innerHTML = " <br><h3>Resources</h3>{!! $competition_info->resources !!}<br><br>";
        document.body.click("body");
        window.scrollBy(00, 200);

    }
</script>
<script>
    function myFunction5() {
        document.getElementById("text_change").innerHTML = "<br> <h3>Contact Us</h3>{!! $competition_info->contact_us !!}<br><br> ";
        document.body.click("body");
        window.scrollBy(00, 200);

    }
</script>
<script>
    function myFunction6() {
        document.getElementById("text_change").innerHTML = "<br> <h3>Rules</h3>{!! $competition_info->rules !!}<br><br> ";
        document.body.click("body");
        window.scrollBy(00, 200);

    }
</script>
</body>
</html>
