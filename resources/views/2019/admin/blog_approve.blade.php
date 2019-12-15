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
{{--@include('2019.header.header')--}}
<div class="row">

@foreach($blog_row as $i)
    <div class="col-md-3">
        <img src="/{{$i->image}}" alt="" style="max-width: 100%">
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
</body>
</html>