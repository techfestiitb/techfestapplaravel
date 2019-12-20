<!DOCTYPE html>
<html>
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
</head>
<body>
</body>
<body>
{{--@include('2019.header.header')--}}
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
<div class="row">
@foreach($blog_row as $i)
    <div class="col-md-3">
        <img src="/{{$i->image}}" alt="" style="max-width: 100%">
        <p>{{$i->id}}</p>
        <p>{{$i->description}}</p>
        <form action="/admin/blog_approve" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$i->id}}">
            <input type="hidden" name="approve" value="1">
            <input type="submit" value="appove">
        </form>
        <form action="/admin/blog_approve" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$i->id}}">
            <input type="hidden" name="approve" value="0">
            <input type="submit" value="delete">
        </form>
    </div>
@endforeach
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>

<script>
    var textarea = document.querySelector('textarea');
    textarea.addEventListener('keydown', autosize);
    function autosize(){
        var el = this;
        setTimeout(function(){
            el.style.cssText = 'height:auto;';
            el.style.cssText = 'padding-left:2%;width: 100%; margin: auto;border-radius: 15px;border: 1px solid blue;height:' + el.scrollHeight + 'px';
        },0);
    }
</script>
</body>
</html>
