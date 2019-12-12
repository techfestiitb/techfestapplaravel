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
@include('layouts.preloader')
@include('2019.header.header')
@foreach($news_rowabc as $i)
    <div style="padding-top: 0.5em;">
        <a href="{!! $i->link !!}" style="color: black!important;text-decoration: none;">
            <div class="row" style="display: flex;padding: 0% 5%;height: 25vw;">
                <div class="col-8" style="    overflow: scroll;height: 100%;">
                    <h5>{!! $i->title !!}</h5>
                    <p style="font-size: 11px">{!! $i->description !!}</p>
                </div>
                <div class="col-4" style="background-image: url('{!! $i->image !!}');background-size: cover;background-position: center;border-radius: 20px">
                </div>
            </div>
        </a>
        <div class="row" style="display: flex;padding: 0% 5%;">
            <div class="col-8">
                <p style="font-size: 10px">{!! $i->time  !!}</p>
            </div>
            <div class="col-4" style="text-align: right;">
                ....
            </div>
        </div>
        <hr style="margin: 0; width: 90%; margin-left: 5%">
    </div>

@endforeach
</body>
</html>
