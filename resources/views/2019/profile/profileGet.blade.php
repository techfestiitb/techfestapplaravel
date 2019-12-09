<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <style>
        html{
            font-family: 'Roboto', sans-serif;
        }
        .row{
            width: 100%;
            margin: 0px;
        }
        .image_grid{
            max-height: 33.33vw;
        }
        .dp_form{
            bottom: 0px;
            position: absolute;
            right: 0;
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
        /*.popup{*/
        /*    width: 900px;*/
        /*    margin: auto;*/
        /*    text-align: center*/
        /*}*/
        /*.popup img{*/
        /*    width: 200px;*/
        /*    height: 200px;*/
        /*    cursor: pointer*/
        /*}*/




        .show2{
            z-index: 999;
            display: none;
        }
        .show2 .overlay{
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.66);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
        }
        .show2 .img-show2{
            width: 85vw;
            height: auto;
            max-height: 100vh;
            max-width: 100vw;
            background: #FFF;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            overflow: hidden;
            z-index: 1;
        }
        .img-show2 span{
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 99;
            cursor: pointer;
        }
        .img-show2 img{
            width: 100%;
            height: 100%;
            /*position: absolute;*/
            top: 0;
            left: 0;
        }
        /*End style*/

    </style>
</head>
<body style=" margin: 0px">
@include('2019.header.header_profile')
<div style="position: sticky;top: 0;background-color: white;z-index: 1;box-shadow: 0px 10px 10px 1px rgba(0, 0, 0, .2)">
    <div class="row" >
        <div class="col-4" style="margin: auto;">
            <?php
            if(empty($profile_image->image)){
                $image = "http://getdrawings.com/free-icon/person-png-icon-75.png";
            }else{
                $image =$profile_image->image;
            }
            ?>

            <div style="background-image: url('{!! $image !!}');background-size: cover;background-position: center;border-radius: 25vw;height: 25vw;width: 25vw">
                <form class="dp_form" id="dp_form" enctype="multipart/form-data" action="{{ route('dp_image_upload') }}"  method="post">
                    {{csrf_field()}}
                    <label for="file_dp">
                        <img src="/2019/profile/svg/pen-solid.svg" alt="" style="width: 25px; height: 25px;border: 1px solid red; border-radius: 10%;padding: 10%">
                    </label>
                    <input id="file_dp" name="file" type="file" multiple accept="*image*" style="width:0px;height: 0px" />
                </form>
            </div>
        </div>
        <hr>
        <div class="col-8">
            <p style="font-size: 1.4em;margin-top: 5px;margin-bottom: 0;">{!! $user_row->name !!}</p>
            <p style="font-size: 1em;margin: 0px;">{!! $user_row->email !!}</p>
            <p style="font-size: 1em;margin: 0px">TF{!! $user_row->id !!}</p>
            <p style="font-size: 1em;margin: 0px">{!! $user_row->phone !!}</p>
            <p style="font-size: 1em;margin: 0px">${{ $xps->xps }}</p>

            <div class="popup" style="position: absolute; right: 0px; top: 10px">
                <img style="max-width: 100px;" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->color(0,0,0)->merge('http://beta.techfest.org/2019/profile/tf_logo_qr.png', 0.15, true)->size(1000)->generate("$user_row->name,$user_row->email,TF$user_row->id,$user_row->phone")) !!} ">
{{--                {!! QrCode::size(100)->generate(" $user_row->name, $user_row->email, TF$user_row->id"); !!}--}}
            </div>
        </div>
    </div>
{{--    <div class="row" >--}}
{{--        <div class="col-1"></div>--}}
{{--        <a href="/profile/edit">--}}
{{--            <div class="col-10" style="border: 1px solid;border-radius: 6px;text-align: center;">--}}
{{--                <a href="/profile/edit" style="text-align: center;width: 100%;">Upload Image</a>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}
    <br>
    <hr style="margin: 0% 2%">
</div>
<div class="row popup">
    @foreach($user_image as $user_image)
        {{--        <div class="col-4 image_grid">--}}
        <div class="col-4 image_grid" style="background-image: url('{!! $user_image->image !!}'); max-height: 33.33vw;background-size: cover;background-position: center;">
            <img  src="{!! $user_image->image !!}" alt="" style="opacity: 0; width: 100%">
        </div>
    @endforeach
</div>

<div class="show2">
    <div class="overlay"></div>
    <div class="img-show2">
        {{--        <span>X</span>--}}
        <img src="">
    </div>
</div>
<div style="position: fixed;bottom: 20px;right: 20px;">
    <form class="" id="image_form" enctype="multipart/form-data" action="{{ route('image_upload') }}"  method="post">
        {{csrf_field()}}
        <label for="file_image">
            <img src="/2019/profile/icons8-camera-50.png" alt="" style="width: 70px; height: 70px;">
        </label>
        <input id="file_image" name="file" type="file" multiple accept="*image*" style="width:0px;height: 0px" />
    </form>
</div>
<!--End image popup-->
<!--End image popup-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(function () {
        "use strict";

        $(".popup img").click(function () {
            var $src = $(this).attr("src");
            $(".show2").fadeIn();
            $(".img-show2 img").attr("src", $src);
        });

        $(".img-show2, .overlay").click(function () {
            $(".show2").fadeOut();
        });

    });
</script>
<script>
    var uploadField = document.getElementById("file_image");

    uploadField.onchange = function() {
        if(this.files[0].size > 1048576*2){
            alert("File is bigger than 2Mb!");
            this.value = "";
        }
        else{
            document.getElementById("image_form").submit();
        }
        ;
    };

    var uploadField = document.getElementById("file_dp");

    uploadField.onchange = function() {
        if(this.files[0].size > 1048576*2){
            alert("File is bigger than 2Mb!");
            this.value = "";
        }
        else{
            document.getElementById("dp_form").submit();
        }
        ;
    };
</script>
</body>
</html>