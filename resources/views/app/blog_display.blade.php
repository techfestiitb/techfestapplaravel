<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
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
</head>

@include('layouts.preloader')
@include('2019.header.header')
{{--<h4>Blog will be coming soon</h4>--}}
<style>
    .clearfix {
        clear: both;
    }
    

    /* truncate text*/
    .DescriptionExcerpt {
        background: #FFFFFF;
        display: block;
        /* Fallback for non-webkit */
        display: -webkit-box;
        max-height: 5.07rem;
        /* Fallback for non-webkit */
        line-height: 1.3;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 0;
    }

    /* learn this*/
    @-moz-document url-prefix() {
        .DescriptionExcerpt {
            overflow: hidden;
            position: relative;
        }

        .DescriptionExcerpt:before {
            background: #FFFFFF;
            bottom: 0;
            position: absolute;
            right: 0;
            float: right;
            content: '\2026';
            margin-left: -3rem;
            width: 3rem;
        }

        .DescriptionExcerpt:after {
            content: '';
            background: #FFFFFF;
            position: absolute;
            height: 50px;
            width: 100%;
            z-index: 1;
        }
    }
    a {
        color: #000;
        text-decoration: none;
    }

    .add-comments {
        padding: 20px 0px 20px 0px;
    }

    #comment-section {
        display: none;
    }

    .user-avatar-thumbnail {
        padding-bottom: 10px;
        padding-top: 10px;
        border-bottom: dashed 0.25px #bfbfbf;
        width: 100%;
    }

    .user-details .user-avatar-thumbnail {
        width: auto;
    }

    .user-avatar-thumbnail:last-child, .user-details .user-avatar-thumbnail {
        border-bottom: none;
    }

    .user-avatar-thumbnail h5 {
        padding-top: 15px;
    }

    .user-login {
        padding-top: 10px;
    }

    .user-avatar-thumbnail p, .user-avatar-thumbnail textarea {
        margin-top: 10px;
        clear: both;
    }

    .user-avatar-thumbnail textarea {
        width: 100%;
    }

    .fa-comments-o, .fa-heart-o, .fa-heart {
        font-size: 20px;
    }

    button {
        border: solid 0.25px #43819e;
        background-color: #127dd4;
        padding: 5px 20px;
        margin-right: 15px;
        margin-top: 10px;
        border-radius: 5px;
        color: white;
    }

    .fa-pencil-square-o, .fa-close {
        margin-top: 10px;
    }

    * {
        font-family: Open Sans;
        margin: 0;
        padding: 0;
        font-size: 14px;
    }

    .left-position {
        float: left;
    }

    .right-position {
        float: right;
    }

    .card, .second-type {
        width: 300px;
        margin: 0 auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .card .img-section, .second-type .img-section {
        height: 400px;
        overflow: hidden;
    }
    .card .img-section img, .second-type .img-section img {
        width: 100%;
    }
    .card .container, .second-type .container {
        padding: 10px 16px;
    }
    .card .avatar-details, .second-type .avatar-details {
        padding: 10px 0px;
    }
    .card .avatar-details h4, .second-type .avatar-details h4 {
        font-size: 18px;
        font-weight: bold;
        color: #232323;
        line-height: 1.5em;
    }
    .card .avatar-details h5, .second-type .avatar-details h5 {
        color: #b4b4b4;
        font-weight: normal;
    }
    .card .avatar-details p, .second-type .avatar-details p {
        color: #232323;
        padding-top: 5px;
    }
    .card .icon-details, .second-type .icon-details {
        color: #b4b4b4;
        padding-top: 10px;
    }
    .card .icon-details .fa, .second-type .icon-details .fa {
        margin-right: 10px;
    }

    .second-type .icon-details h5 {
        color: #b4b4b4;
        font-weight: normal;
        float: right;
    }

    .third-type {
        width: 300px;
        margin: 0 auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 1px 0 2px 0 rgba(0, 0, 0, 0.2), -1px -1px 2px 0 rgba(0, 0, 0, 0.2);
    }
    .third-type .fa {
        margin-right: 10px;
    }
    .third-type .user-details {
        color: #232323;
        padding: 10px 16px;
    }
    .third-type .user-details h5 {
        font-weight: normal;
        color: #b4b4b4;
        padding-top: 10px;
    }
    .third-type .user-avatar-thumbnail img {
        height: 50px;
        width: 50px;
        border-radius: 50% 50%;
        margin-right: 10px;
    }
    .third-type { /*.img-section*/
        height: 250px;
        overflow: hidden;
        margin-top: 50px;
    }
    .third-type .img-section img {
        height: auto;
        width: 100%;
    }
    .third-type .container {
        padding: 10px 16px;
    }
    .third-type .container .icon-details:last-child {
        padding-top: 10px;
    }
    .third-type .newpost {
        padding: 0 16px;
    }
    .approve-decline-request {
        width: 300px;
        margin: 0 auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .approve-decline-request .user-avatar-thumbnail img {
        height: 50px;
        width: 50px;
        border-radius: 50% 50%;
        margin-right: 10px;
    }
    .content{
        max-height: 40em;
    }
    .description{
        overflow:hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    span #imgupload{
       height:2 em;
        width:100%;
        float:left;
    }
    .newpost .upload-details{
        width:30px;
        height:30px;
    }

    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        top: 100px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {top: 0; opacity: 0;}
        to {top: 100px; opacity: 1;}
    }

    @keyframes fadein {
        from {top: 0; opacity: 0;}
        to {top: 100px; opacity: 1;}
    }

    @-webkit-keyframes fadeout {
        from {top: 100px; opacity: 1;}
        to {top: 0; opacity: 0;}
    }

    @keyframes fadeout {
        from {
            top: 100px;
            opacity: 1;
        }
        to {
            top: 0;
            opacity: 0;
        }
    }
    .nowrap {
        white-space: nowrap ;
    }

</style>
<script>
    function change_page_view(btn){
        if(document.body.style.filter == "invert(0)") {
            document.body.style.filter = "invert(1)";
            btn.innerHTML="Day View";
        }
        else{
            document.body.style.filter = "invert(0)";
            btn.innerHTML="Night View";
        }
    }
</script>
<body >
<?php
if(empty($profile_img->image)){
    $image = "http://getdrawings.com/free-icon/person-png-icon-75.png";
}else{
    $image =$profile_img->image;
}
?>
<br><br><br>
<button  onclick="change_page_view(this)">Night View</button>
<div style="width: 80%; margin: auto">
    <div class="row" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 1px 0 2px 0 rgba(0, 0, 0, 0.2), -1px -1px 2px 0 rgba(0, 0, 0, 0.2);">
        <div class="col-12" style="padding: 7px"></div>
        <div class="col-3">
            <div style="margin: auto; border-radius: 25px;width: 50px; height: 50px;background-image: url('/{!! $image !!}');background-size: cover;background-position: center ">            </div>
        </div>
        <div class="col-9">
            <h5 style="margin: auto">{!!Auth::user()->name!!}</h5>
            <p style="margin: auto">TF{!!Auth::user()->id!!}</p>
        </div>
        <div class="col-12" style="padding: 7px"></div>

        <div class="col-12">
            <textarea rows="5" style="width:100%;padding-bottom: 0;" name='description' id="desc" placeholder="Express yourself here...."></textarea>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <label for="imgupload">
                        <img style="height:2.5em;margin-top:2px;float: left" src="/2019/profile/photo-camera.svg"/>
                    </label>
                    <span><input type="file" id="imgupload" name='image' accept=".png, .jpg, .jpeg" style="display:none;"></span>
                </div>
                <div class="col-4">
                    <a id="remove" aria-label="Close Account Info Modal Box" style="cursor:pointer;position:relative;top:1em;right:1em;">&times;</a>

                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary" id="submitpost" style="float:right;">Post</button>
                </div>
                <div class="newpost" id="container-section">
                    <div  class="upload-details" style="position:absolute;display:flex;" >
                        <div class="upload-details" style="position:relative;display:flex; width: 2em;">
                            <output id="list">
                            </output>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="border-radius: 30px;border: 1px solid blue;margin: auto;height: 40px">
    <div class="" style="height: 30px; margin: auto" >
        <div style="background-image: url('https://sm.mashable.com/t/mashable_sea/photo/default/man-fakes-death-cat-q6u_2z9w.960.png'); border-radius: 50%; height: 30px;width: 30px;background-size: cover;background-position: center;">

        </div>
    </div>
    <div class="" style=" width: 60%;height: 30px; margin: auto">
        <textarea name="" id=""  rows="1" style="width: 100%!important; border-radius: 25px;max-height: 100px!important; " placeholder="Express your feelings here"></textarea>
    </div>

    <div class="" style="width: 30px; margin: auto">
        <div style="background-image: url('/2019/profile/photo-camera.svg'); background-size:cover ;height: 30px"></div>
    </div>
    <div class="" style="margin: auto; width: 30px">
        <div style="background-image: url('/2019/profile/paper-plane.svg'); background-size:cover ;height: 30px"></div>
    </div>
</div>
<div class="third-type">
    <div class="user-details">

        <div class="user-avatar-thumbnail left-position">

            <img class="left-position" src="{!! $image !!}" alt="Avatar">
            <h5 class="left-position">{!!Auth::user()->name!!}</h5>
        </div>
    </div>
    <form method="post" id="blog_post" enctype="multipart/form-data" action="{{route('blog_post')}}">
        {{csrf_field()}}
    <div class="content">
        <textarea rows="5" style="width:100%;padding-bottom: 0;" name='description' id="desc" placeholder="Express yourself here...."></textarea>
    </div>
    <div class="newpost" id="container-section">
        <div  class="upload-details" style="position:absolute;display:flex;" >
            <div class="upload-details" style="position:relative;display:flex; width: 2em;">
                <label for="imgupload">
                <img style="height:3em;margin-top:2px;float: left" src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
                </label>
                <span><input type="file" id="imgupload" name='image' accept=".png, .jpg, .jpeg" style="display:none;">
                </span>
                <output id="list">
                    <a id="remove" aria-label="Close Account Info Modal Box" style="cursor:pointer;position:relative;top:1em;right:1em;">&times;</a>
                </output>
            </div>
        <button type="button" class="btn btn-primary" id="submitpost" style="float:right;">Post</button>
        </div>
    </div>
    </form>
    <div id="snackbar">Your post will be approved soon..</div>

    <div class="clearfix"></div>
</div>

@foreach($blog_row as $index => $blog)
    <div class="third-type">
        <div class="user-details">
            <div class="user-avatar-thumbnail left-position">
                <img class="left-position" src="{!! $blog->profile_img !!}" alt="Avatar">
                <div style="width:100%">
                <h5 class="left-position">{!! $blog->name !!}</h5><br>
               <span class=" nowrap"><h6>{!! $blog->date_uploaded  !!}</h6></span>
                </div>
            </div>

        </div>
        <div class="content">
        @if($blog->image != NULL)<div class="img-section clearfix"><img src="{!! $blog->image !!}" alt="insta"></div>
        @endif
        <p class="description" id="desc{!! $blog->id !!}">{!! $blog->description !!}</p>
        </div>
        <div class="container" id="container-section">
            <div class="icon-details right-position">
                @if($liked[$index]=='[]')
                <a href="#" onclick="like(this,{!! $blog->id !!},{!! Auth::user()->id !!})" class="fa fa-heart-o" id="likes{!! $blog->id !!}"></a>
                @else
                <a href="#" style="color:red" class="fa fa-heart" onclick="dislike(this,{!! $blog->id !!} ,{!! Auth::user()->id !!})" id="likes{!! $blog->id !!}"></a>
                @endif
                <span id="likes-counter{!! $blog->id !!}">{!! $likes_count[$index] !!} likes</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script>
        function like(icon, blog_id, user_id){
            icon.style.color="red";
            icon.className="fa fa-heart";
            document.getElementById('likes-counter'+blog_id).innerHTML=(parseInt(document.getElementById('likes-counter'+blog_id).innerHTML.toString().charAt(0))+1).toString()+" likes";
            icon.setAttribute('onclick','dislike(this,'+blog_id+')');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content'),
                },
                url: "/blog/update",
                type: "POST",
                data: {"blog_id":blog_id,
                    "user_id":user_id,
                    "like":'true',

                },
            });


        }
        function dislike(icon, blog_id, user_id){
            icon.style.color="";
            icon.className="fa fa-heart-o";


            document.getElementById('likes-counter'+blog_id).innerHTML=(parseInt(document.getElementById('likes-counter'+blog_id).innerHTML.toString().charAt(0))-1).toString()+" likes";
            icon.setAttribute('onclick','like(this,'+blog_id+')');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content'),
                },
                url: "/blog/update",
                type: "POST",
                data: {"blog_id":blog_id,
                    "user_id":user_id,
                    "like":'false',

                },
            });
        }
        window.onload= reload;
            function reload() {
            if (sessionStorage.getItem('clicked')) {
                var x = document.getElementById("snackbar");
                x.className = "show";
                setTimeout(function () {
                    x.className = x.className.replace("show", "");
                }, 3000);
                sessionStorage.removeItem('clicked');
            }
        }
        //likes add and remove - increase count
        document.getElementById("imgupload").onchange=function() {
            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = function (e) {

                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML =
                        [
                            '<img style="height: 40px; width:30px; border: 1px solid #000; margin: 5px" src="',
                            e.target.result,
                            '"/>'
                        ].join('');
                    span.id="imageuploaded";
                    document.getElementById('list').insertBefore(span, null);
                    document.getElementById('remove').style.display="block";
            };

            // Read in the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };
        document.getElementById("remove").onclick=function(){
            //alert("OK Remove");
            var element = document.getElementById("imageuploaded");
            element.parentNode.removeChild(element);
            document.getElementById('remove').style.display="none";
            document.getElementById('imgupload').value='';
        };

        document.getElementById('submitpost').onclick=function(){

            if(document.getElementById('desc').value=='' && document.getElementById('imgupload').value==''){
                alert('Description and Image both can\'t be empty');
            }
                else
            {
                sessionStorage.setItem('clicked', 'true');
                document.getElementById('blog_post').submit();
                // window.setTimeout(function(){ window.location.replace("/blog"); },0);




            }
        }

    </script>
@endforeach
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript">
</script>
</body>
</html>
