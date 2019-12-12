<!DOCTYPE html>
<html lang="en">
<head>
    <title>Workshops | Techfest, IIT Bombay</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta property="og:image" content="http://techfest.org/2019/workshops/images/thumbnail.png" />

    <link rel="shortcut icon" type="image/x-icon" href="http://techfest.org/2019/ca/images/favicon_logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="http://techfest.org/2019/workshops/js/hexit.js"></script>
    <style>
        body {
            margin: 0;
        }
        .hexit {
            background-color: #003270;
            position: absolute;
            width: 100vw;
            height: 100vh;
            border: 0;
            margin: 0;
        }
        ::-webkit-scrollbar { width: 0 !important }

    </style>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
    <link rel="stylesheet" href="https://anandchowdhary.github.io/ionicons-3-cdn/icons.css" integrity="sha384-+iqgM+tGle5wS+uPwXzIjZS5v6VkqCUV7YQ/e/clzRHAxYbzpUJ+nldylmtBWCP0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            font-family: Lato;
            background-color: #275E80; /* For browsers that do not support gradients */
            background-image: linear-gradient(#275E80 , #2C2F7A);
        }
        @import url("https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700|Work+Sans:100,200,300,400,500,600");
        :root {
            --headlinesFont: 'Josefin Sans', sans-serif;
            --bodyFont: 'Work Sans', sans-serif;
            --wildWatermelon: #7d277e;
            --fuelYellow: #f0a035;
            --textColor: #323232;
            --bodyBg: #d6d6d6;
            --white: #fff;
            --black: #000;
        }

        html {
            box-sizing: border-box;
        }

        body {
            font-family: var(--bodyFont);
            color: var(--textColor);
            line-height: 1.5;
        }

        * {
            box-sizing: inherit;
        }

        img {
            vertical-align: text-bottom;
        }

        a {
            color: inherit;
            /*text-decoration: none;*/
        }

        .ft-recipe {
            width: 100%;
            background: var(--white);
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 88px 0 rgba(0, 0, 0, 0.1607843137);
            overflow: hidden;
            top: 50%;
            right: 50%;
            bottom: 50%;
            left: 50%;
            border-radius: 11px;

        }
        .ft-recipe .ft-recipe__thumb {
            position: relative;
            box-shadow: 0px 0px 130px 0 rgba(0, 0, 0, 0.38);
        }
        .ft-recipe .ft-recipe__thumb #close-modal {
            position: absolute;
            top: 0;
            right: 0;
            width: 36px;
            height: 36px;
            background: #000;
            color: var(--white);
            text-align: center;
            line-height: 36px;
            font-size: 22px;
            cursor: pointer;
            z-index: 1;
            transition: all 200ms ease;
        }
        .ft-recipe .ft-recipe__thumb #close-modal:hover {
            background: transparent;
            color: var(--black);
        }
        .ft-recipe .ft-recipe__thumb h3 {
            text-align: center;
            position: absolute;
            margin: 0;
            width: 100%;
            color: var(--white);
            font-family: var(--headlinesFont);
            font-size: 25px;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), transparent);
            padding: 2.4rem 0 0;
        }
        .ft-recipe .ft-recipe__thumb img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: 50% 50%;
            object-position: 50% 50%;
        }
        .ft-recipe .ft-recipe__content {
            flex: 1;
            padding: 0 0em 1em;
        }
        .ft-recipe .ft-recipe__content .content__header .row-wrapper {
            display: flex;
            padding: .55em 0 .3em;
            border-bottom: 1px solid #d8d8d8;
        }
        .ft-recipe .ft-recipe__content .content__header .row-wrapper .recipe-title {
            font-family: var(--headlinesFont);
            font-weight: 600;
        }
        .ft-recipe .ft-recipe__content .content__header .recipe-details {
            display: flex;
            list-style: none;
            margin: 0;
            justify-content: space-between;
        }
        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item {
            flex: 1;
        }
        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item i {
            font-size: 30px;
        }
        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item .value {
            color: #ff4f87;
            margin-left: .35em;
            vertical-align: bottom;
            font-size: 24px;
            font-weight: 600;
        }
        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item .title {
            display: block;
            margin-top: -4px;
            font-family: var(--headlinesFont);
            font-size: 21px;
            font-weight: 300;
        }

        .ft-recipe .ft-recipe__content .content__footer {
            text-align: center;
            margin: 0 3rem;
        }
        .ft-recipe .ft-recipe__content .content__footer a {
            font-family: var(--headlinesFont);
            display: inline-block;
            background: var(--wildWatermelon);
            background: var(--wildWatermelon);
            padding: 0px;
            /*width: 100%;*/
            text-align: center;
            border-radius: 5px;
            color: #fff;
            font-weight: 500;
            letter-spacing: .2px;
            font-size: 17px;
            transition: box-shadow 250ms ease, -webkit-transform 250ms ease;
            transition: transform 250ms ease, box-shadow 250ms ease;
            transition: transform 250ms ease, box-shadow 250ms ease, -webkit-transform 250ms ease;
        }
        .ft-recipe .ft-recipe__content .content__footer a:hover {
            -webkit-transform: translateY(-3px);
            transform: translateY(-3px);
            box-shadow: 0 10px 34px 0 rgba(255, 79, 135, 0.32);
        }
        .description{
            text-align: center;
            font-size: 13px;
            line-height: 17px;
            min-height: 2em;
            overflow: scroll;
        }

    </style>
    <style>
        .row{
            width: 100%;margin-right: 0px; margin-left: 0px;
        }
    </style>
    <!--   Core JS Files   -->
    <script src="http://techfest.org/2019/workshops/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="http://techfest.org/2019/workshops/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://techfest.org/2019/workshops/assets/js/jquery.bootstrap.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="http://techfest.org/2019/workshops/assets/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="http://techfest.org/2019/workshops/assets/js/jquery.validate.min.js"></script>



    <script>
        function loadScript( url, callback ){
            script = document.createElement("script");
            script.type = "text/javascript";
            if(script.readyState) {
                script.onreadystatechange = function() {
                    if ( script.readyState === "loaded" || script.readyState === "complete" ) {
                        script.onreadystatechange = null;
                        callback();
                    }
                };
            } else {
                script.onload = function() {
                    callback();
                };
            }
            script.src = url;
        }
        function start() {
            gapi.load('auth2', function() {
                auth2 = gapi.auth2.init({
                    client_id: '218886856483-4lnh6s9mvguid18098antfdltvosd7ln.apps.googleusercontent.com',
                });
            });

        }
        function authCheck(){
            console.log('called');
            auth2.grantOfflineAccess().then(response => {
                $('#name2').val(response.code);
                $("#h-form").submit();
            });

        }
        loadScript("https://apis.google.com/js/client:platform.js",function(){
            start();
            $('#signinButton, #googleLogin').click(function(){

                authCheck();
            });

        });
        document.getElementsByTagName( "head" )[0].appendChild( script );

        // $("#h-form").submit();
        // document.getElementById("h-form").submit();// Form submission


    </script>
    <link href="http://techfest.org/2019/workshops/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

</head>
<body style="margin: 0px; overflow-x: hidden">
<div class="row" style="position: absolute; margin-top: 16vw;overflow-y: scroll; ">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="wizard-container">
            <div class="card wizard-card" data-color="purple" id="wizard" style="min-height: 73vh;">
                <div class="wizard-header">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left" style="float: left"></i></a>
                            <h3 class="wizard-title" style="display: inline">{{$workshops_info->name}}
                                {{--                            <img src="{{$workshops_info->image}}" alt="" style="height: 1em; border-radius: 5%;">--}}
                            </h3>

                            <h5>{!! $workshops_info->description !!}</h5>
                        </div>
                        <div class="col-12">
                            @if(!empty(Auth::user()))
                                {{--        Hi {{session()->get('user')->name}}--}}
                                <?php
                                $leader_row = DB::table('tf_workshops_participants_2019')->where(['registered_by'=>Auth::user()->email, 'workshop'=>$workshops_info->link])->first();
                                $workshop_link = $workshops_info->link;
                                if(!empty($leader_row)){
                                    $team_members = DB::table('tf_workshops_participants_2019')->where(['registered_by'=>Auth::user()->email, 'workshop'=>$workshops_info->link])->get();
                                    $payment_row = DB::table('payment_log_2019')->where(['email'=>Auth::user()->email, 'subProgramName'=>$workshops_info->name])->first();
                                }
                                ?>
                                @if(!empty($team_members))
                                    @if(!empty($team_members[0]))
                                        <br>You are already registered
                                        <br>Team ID-{{$workshops_info->coeff}}{{$team_members[0]->id}}
                                        @if(!empty($payment_row->ticketId))
                                            <br>Payment Done
                                            <br>Ticket ID-{{$payment_row->ticketId}}
                                        @endif
                                        @if(empty($payment_row->ticketId))
                                            {{$payment_row}}
                                            <br>Payment Not Done Yet
                                            <button><a href="{{$workshops_info->payment_link}}">Pay Now</a></button>
                                        @endif
                                    @endif
                                    @foreach($team_members as $member)
                                        @if(!empty($member->name))
                                            <br>Member - {{$member->name}}
                                        @endif
                                    @endforeach
                                @endif
                                @if(empty($leader_row))
                                    <a href="/workshops_reg/{{$workshops_info->link}}" class='btn btn-primary btn-wd' >Register123</a>
                                @endif
                            @endif

                        </div>

                    </div>
                </div>
                <div class="wizard-navigation">
                    <ul>
                        <li><a href="#register" data-toggle="tab">Register</a></li>
                    </ul>
                </div>
                <div class="tab-content" style="min-height: 33vh;">
                    <div class="tab-pane" id="register">
                        @if(!empty(Auth::user()->email))
                            <?php
                            $user_row = DB::table('tf_workshops_participants_2019')->where(['registered_by'=>Auth::user()->email, 'workshop'=>$workshops_info->link])->first();
                            $workshop_link = $workshops_info->link;
                            if(!empty($user_row)){
                                $team_members = DB::table('tf_workshops_participants_2019')->where(['registered_by'=>Auth::user()->email, 'workshop'=>$workshops_info->link])->get();
                            }
                            ?>
                        @endif

                    </div>
                </div>
                </form>
            </div>
        </div> <!-- wizard container -->
    </div>

</div>
</body>