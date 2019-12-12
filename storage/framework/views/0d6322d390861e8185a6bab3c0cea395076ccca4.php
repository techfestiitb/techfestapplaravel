<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $competition_info->name; ?> | Techfest, IIT Bombay</title>

    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />

    <meta name="viewport" content= "width=device-width, user-scalable=no">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/style.css">

    
    <script src="/2019/compi/cozmo/js/modernizr-2.6.2.min.js"></script>
    
<!--[if lt IE 9]>-->
    <script src="/2019/compi/cozmo/js/respond.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    
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

        @keyframes  fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }

        @keyframes  expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }
        @-webkit-keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }

        @keyframes  stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }
        @-webkit-keyframes shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @keyframes  shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }

        @keyframes  fadeout {
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
                background-image: url(<?php echo $competition_info->image; ?>) ;
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

        @keyframes  fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes  fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>
</head>

<body>


<img class="mandala1" src="/2019/homepage/images/b_mandala.png" >
<?php
        $competition_info_link = $competition_info->link;
        $competition_info_team = $competition_info_link."_team";
        $competition_info_team_id = $competition_info_link."_team_id";
?>
<div id="colorlib-page"  >
    <?php echo $__env->make('2019.competitions.layouts.left_panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="colorlib-main">
        <?php echo $__env->make('2019.competitions.layouts.all_competitions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="colorlib-about" style="margin-top: -20px;padding-top: 0px;">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-4 " style="width: 100%; height: 100%">
                        <div class="about-img animate-box mobile_hide" data-animate-effect="fadeInLeft" style="margin-top: 30px"></div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft" style="margin-right:-1%; padding-left:2.5% ;padding-right: -50%">
                        <div class="about-desc" style="margin-right: 0%; padding: 0px" >
                            
                            <h2 style="color: white; font-weight: bold;margin-top: 20px;margin-bottom: 10px;"><?php echo $competition_info->name; ?></h2>
                            <hr style="color: white; border: 1px solid white">
                            <h3 style="color: white"><?php echo $competition_info->prize_money; ?></h3>

                            <p style="font-size: 15px;padding: 3%;width: 100%;font-family: Lato;color: white;text-align: justify;margin-bottom: .5em;"><?php echo $competition_info->task; ?><br><br><strong>THERE IS NO REGISTRATION FEES</strong></p>

                            <?php if(!empty($user_row->email)): ?>
                                <?php

                                $team =  DB::table('tf_reg')->where(["$competition_info_team" => $user_row->$competition_info_team])->get();
                                $team_leader_row = DB::table('tf_reg')->where(['email' => $team[0]->$competition_info_team])->first();
                                if($user_row->$competition_info_team == $user_row->email ){
                                    $team_leader = $user_row->name;
                                }
                                ?>
                            <?php endif; ?>

                            <a href="<?php echo $competition_info->ps_pdf; ?>" target="_blank" class="btn btn-primary btn-learn" style="margin-left: 5%">Problem Statement</a>















































                            <?php if(!empty($user_row)): ?>





                                <?php if($user_row->$competition_info_link > 0 and !empty($user_row->$competition_info_team)): ?>
                                    <div class="" style="border: solid 2px white;border-radius: 6px;padding: 2%;width: 90%;margin-left: 5%;">
                                        <p style="color: white;margin-bottom: 0em;">
                                            Team Leader : <?php echo e($team_leader_row->name); ?><br>
                                            Team ID :<?php echo $competition_info->coeff; ?>- <?php echo e($team_leader_row->$competition_info_team_id); ?>

                                            <?php if(!empty($team[0]->name) ): ?><br>
                                            Member1 : <?php echo e($team[0]->name); ?>

                                            <?php endif; ?>
                                            <?php if(!empty($team[1]->name) ): ?>
                                               | Member2 : <?php echo e($team[1]->name); ?>

                                            <?php endif; ?>
                                        </p>
                                        <p style="color: white; margin-bottom: 0px;">
                                            <?php if(!empty($team[2]->name)): ?>
                                                Member3 : <?php echo e($team[2]->name); ?>

                                            <?php endif; ?>
                                            <?php if(!empty($team[3]->name)): ?>
                                                | Member4 : <?php echo e($team[3]->name); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <br>
                                <?php endif; ?>
                            <?php endif; ?>
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
            <p id="text_change" style="margin-bottom: 0px; color: white"><?php echo $competition_info->structure; ?></p>
        </div>
        <div id="snackbar" style="z-index: 10;">You must be SIGNED IN to register</div>
    </div>
</div>






<!-- jQuery -->
<script src="/2019/compi/cozmo/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/2019/compi/cozmo/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/2019/compi/cozmo/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/2019/compi/cozmo/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="/2019/compi/cozmo/js/jquery.flexslider-min.js"></script>
<!-- Sticky Kit -->
<script src="/2019/compi/cozmo/js/sticky-kit.min.js"></script>


<!-- MAIN JS -->
<script src="/2019/compi/cozmo/js/main.js"></script>

<script>
    function launch_toast() {
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
</script>
<script>
    function myFunction1() {
        document.getElementById("text_change").innerHTML = "<br><?php echo $competition_info->structure; ?><br><br>";
        document.body.click("body");
    }
</script>

<script>
    function myFunction2() {
        document.getElementById("text_change").innerHTML = "<br><?php echo $competition_info->faqs; ?><br><br>";
        document.body.click("body");
    }
</script>
<script>
    function myFunction3() {
        document.getElementById("text_change").innerHTML = " <br><?php echo $competition_info->timeline; ?><br><br>";
        document.body.click("body");
    }
</script>
<script>
    function myFunction4() {
        document.getElementById("text_change").innerHTML = " <br><?php echo $competition_info->resources; ?><br><br>";
        document.body.click("body");
    }
</script>
<script>
    function myFunction5() {
        document.getElementById("text_change").innerHTML = "<br><?php echo $competition_info->contact_us; ?><br><br> ";
        document.body.click("body");
    }
</script>
</body>
</html>
<?php /**PATH /var/app/current/blog/resources/views/2019/competitions/layouts/competitionGet.blade.php ENDPATH**/ ?>