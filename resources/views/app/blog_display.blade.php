<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


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
<span>
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
    }
</style>
<div >

</div>
<div class="third-type">
    <div class="user-details">
        <div class="user-avatar-thumbnail left-position">
            <img class="left-position" src="https://images.unsplash.com/photo-1457282367193-e3b79e38f207?dpr=1&auto=format&fit=crop&w=1500&h=995&q=80&cs=tinysrgb&crop=&bg=" alt="Avatar">
            <h5 class="left-position">"XXX"</h5>
        </div>
{{--        <div class="user-login right-position">--}}
{{--            <h5>{!! $blog->date_uploaded  !!}</h5>--}}
{{--        </div>--}}
    </div>
    <div class="content">
{{--        @if($blog->image != NULL)<div class="img-section clearfix"><img src="{!! $blog->image !!}" alt="insta"></div>--}}
{{--        @endif--}}
{{--        <p class="description" id="desc{!! $blog->id !!}">{!! $blog->description !!}</p>--}}
        <textarea rows="5" style="width:100%" placeholder="Express yourself here...."></textarea>
    </div>
    <div class="container" id="container-section">
        <div class="icon-details right-position">
{{--            <a href="#" id="likes{!! $blog->id !!}"><i class="fa fa-heart-o" id="likes-color{!! $blog->id !!}"></i></a><label id="likes-counter{!! $blog->id !!}"></label><span> likes</span>--}}
       <span><input type="file" id="imgupload">Upload Image</span> </div>
        <button type="button" class="btn btn-primary">Post</button>
    </div>

    <div class="clearfix"></div>
</div>
@foreach($blog_row as $blog)
    <div class="third-type">
        <div class="user-details">
            <div class="user-avatar-thumbnail left-position">
                <img class="left-position" src="https://images.unsplash.com/photo-1457282367193-e3b79e38f207?dpr=1&auto=format&fit=crop&w=1500&h=995&q=80&cs=tinysrgb&crop=&bg=" alt="Avatar">
                <h5 class="left-position">{!! $blog->user_id !!}</h5>
            </div>
            <div class="user-login right-position">
                <h5>{!! $blog->date_uploaded  !!}</h5>
            </div>
        </div>
        <div class="content">
        @if($blog->image != NULL)<div class="img-section clearfix"><img src="{!! $blog->image !!}" alt="insta"></div>
        @endif
        <p class="description" id="desc{!! $blog->id !!}">{!! $blog->description !!}</p>
        </div>
        <div class="container" id="container-section">
            <div class="icon-details right-position">
                <a href="#" id="likes{!! $blog->id !!}"><i class="fa fa-heart-o" id="likes-color{!! $blog->id !!}"></i></a><label id="likes-counter{!! $blog->id !!}"></label><span> likes</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script>
        //likes add and remove - increase count
        var count = 0;
        var clickCount = 0;
        var previousCount = 5;
        document.getElementById("likes-counter{!! $blog->id !!}").innerHTML = previousCount;
        document.getElementById("likes{!! $blog->id !!}").addEventListener("click", function(){
            clickCount = clickCount+1;
            if(clickCount%2==0){
                var testing1 = document.getElementsByClassName("fa-heart")[0];
                testing1.className="fa fa-heart-o"
                testing1.style.color = "black";
                document.getElementById("likes-color{!! $blog->id !!}").style.color = "black";
                document.getElementById("likes-counter{!! $blog->id !!}").innerHTML = previousCount;
            }
            else{
                var testing = document.getElementsByClassName("fa-heart-o")[0];
                testing.className="fa fa-heart"
                testing.style.color = "red";
                document.getElementById("likes-counter{!! $blog->id !!}").innerHTML = previousCount + 1;

            }
            count = count+1;
        });
        {{--document.getElementById("desc{{!!$blog->id}}").addEventListener("click",function(){--}}
        {{--    document.getElementById("desc{{!!$blog->id}}").style.overflow="visible";--}}

        {{--});--}}
    </script>
@endforeach
</body>
</html>

</html>