<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style>
        html{
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-81222017-1');
    </script>
    <style>
        .row{
            width: 100%;
            margin: 0px;
        }
    </style>
    <link href="http://techfest.org/2019/workshops/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
    <style>
        body{
            background-color: #275E80; /* For browsers that do not support gradients */
            background-image: linear-gradient(#275E80 , #2C2F7A);
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
        .btn{
            padding: 12px 20px;
        }
    </style>

</head>
<body style="margin: 0px; overflow-x: hidden">
@include('2019.header.header')

<div class="row" style="position: absolute; margin-top: 6vw;height: 100vh;overflow-y: scroll; ">
    <div class="col-md-10">
        <div class="wizard-container">
            <div class="card wizard-card" data-color="purple" id="wizard" style="min-height: 73vh;">
                <form action="" method="">
                    <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->
                    <div class="wizard-header">
                        <div class="row">
                            <div class="col-12">
                                <a href="/workshops"><i class="fas fa-arrow-left" style="float: left"></i></a>
                                <h3 class="wizard-title" style="display: inline">{{$workshops_info->name}}
                                    {{--                                    <img src="{{$workshops_info->image}}" alt="" style="height: 1em; border-radius: 5%;">--}}
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
{{--                                                <br>You are already registered--}}
                                                <br>Team ID-{{$workshops_info->coeff}}{{$team_members[0]->id}}
                                                @if(!empty($payment_row->ticketId))
                                                    <br>Payment Done
                                                    <br>Ticket ID-{{$payment_row->ticketId}}
                                                @endif
                                                @if(empty($payment_row->ticketId))
                                                    {{$payment_row}}
                                                    <br>Payment Not Done Yet
{{--                                                    <button><a href="{{$workshops_info->payment_link}}">Pay Now</a></button>--}}
                                                @endif
                                            @endif
                                            @foreach($team_members as $member)
                                                @if(!empty($member->name))
                                                    <br>Member - {{$member->name}}
                                                @endif
                                            @endforeach
                                        @endif
                                    @if(empty($leader_row))
{{--                                        <a href="/workshops_reg/{{$workshops_info->link}}" class='btn btn-primary btn-wd' >Register123</a>--}}
                                    @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="wizard-navigation" style="text-align: center;">
                            @if(!empty($workshops_info->about))
                                <a class='btn btn-fill btn-primary btn-wd' href="#location" data-toggle="tab">About</a>
                            @endif
                            <a class='btn btn-fill btn-primary btn-wd' href="#type" data-toggle="tab">Details</a>
                            <a class='btn btn-fill btn-primary btn-wd' href="#facilities" data-toggle="tab">Rules</a>
                            <a class='btn btn-fill btn-primary btn-wd' href="#description" data-toggle="tab">Contact Us</a>

                    </div>
                    <div class="tab-content" style="min-height: 33vh;">
                        <div class="tab-pane active" id="location">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="http://techfest.org{{$workshops_info->image}}" alt="" style="width: 100%; border-radius: 10px;">
                                </div>
                                <div class="col-sm-9" style="">
                                    <div>
                                        <p class="description">{{$workshops_info->about}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="type">
                            {{--                                                <h4 class="info-text">What type of location do you have? </h4>--}}
                            <div class="row" >
                                <div class="col-sm-3">
                                    <h6>Duration Of Workshop</h6>
                                    <h6>{{$workshops_info->details_duration}}</h6>
                                    <hr>
                                </div>

                                <div class="col-sm-3 ">
                                    <h6>Venue</h6>
                                    <h6>{{$workshops_info->details_venue}}</h6>
                                    <hr>
                                </div>

                                <div class="col-sm-3 ">
                                    <h6>Team Members Required</h6>
                                    <h6>{{$workshops_info->no_of_team_member}}</h6>
                                    <hr>
                                </div>
                                <div class="col-sm-3 ">
                                    <h6>Total cost of Workshop</h6>
                                    <h6>INR-{{$workshops_info->details_cost}} per team</h6>
                                    <hr>
                                </div>
                                <div class="col-sm-6 ">
                                    <h6>Date of Workshop</h6>
                                    <h6>{{$workshops_info->date}}</h6>
                                    <hr>
                                </div>
                                @if(!empty($workshops_info->pdfs))
                                    <div class="col-sm-6 ">
                                        <a href="{{$workshops_info->pdfs}}" target="_blank" class='btn btn-fill btn-primary btn-wd'>Content of the Workshop</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="facilities">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    {!! $workshops_info->eligibility !!}

                                    <br>
                                    <br>
                                    <br>
                                    {!! $workshops_info->extra_detail !!}

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="description">
                            <div class="row" style="display: block">
                                <h4 class="info-text"> Feel Free to contact us </h4>
                                <br><p class="description">{{$workshops_info->contact_us_name}}</p>
                                <br><p class="description">{{$workshops_info->contact_us_email}}</p>
                                <br><p class="description">{{$workshops_info->contact_us_number}}</p>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- wizard container -->
    </div>
</div>
<!--   Core JS Files   -->
{{--<script src="http://techfest.org/2019/workshops/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>--}}
{{--<script src="http://techfest.org/2019/workshops/assets/js/bootstrap.min.js" type="text/javascript"></script>--}}
{{--<script src="http://techfest.org/2019/workshops/assets/js/jquery.bootstrap.js" type="text/javascript"></script>--}}
{{--<script src="/2019/workshops/validate.js"></script>--}}
{{--<script src="http://techfest.org/2019/workshops/assets/js/jquery.validate.min.js"></script>--}}
</body>
<!--   Core JS Files   -->

</html>