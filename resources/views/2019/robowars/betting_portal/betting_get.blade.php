<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-81222017-1');
    </script>
    <style>
        .range {
            position: relative;
        }
        .range input[type=range] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 0;
            width: 100%;
            height: 22px;
            cursor: pointer;
            display: block;
        }
        .range input[type=range]:focus {
            outline: none;
        }
        .range input[type=range][disabled] {
            opacity: .3;
            cursor: default;
        }
        .range .rangeslider {
            position: relative;
            height: 22px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .range .rangeslider:before {
            box-sizing: border-box;
            width: 100%;
            height: 4px;
            background: #e6e6e6;
            border-radius: 100px;
            content: "";
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .range input::-webkit-slider-runnable-track {
            box-sizing: border-box;
            width: 100%;
            height: 4px;
            background: #e6e6e6;
            border-radius: 100px;
            margin: 11px 0;
        }
        .range input::-moz-range-track {
            box-sizing: border-box;
            width: 100%;
            height: 4px;
            background: #e6e6e6;
            border-radius: 100px;
            margin: 11px 0;
        }
        .range input::-ms-track {
            box-sizing: border-box;
            width: 100%;
            height: 4px;
            background: #e6e6e6;
            border-radius: 100px;
            color: transparent;
            padding: 11px 0;
            background: transparent;
            border-color: transparent;
        }
        .range input::-ms-fill-lower,
        .range input::-ms-fill-upper {
            box-sizing: border-box;
            width: 100%;
            height: 4px;
            background: #e6e6e6;
            border-radius: 100px;
        }
        .range input::-ms-fill-lower {
            background: #60cd18;
        }
        .range .rangeslider-fill-lower {
            background-color: #60cd18;
            border-radius: 100px;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 4px;
            will-change: width;
        }
        .range input::-webkit-slider-thumb {
            box-sizing: border-box;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.5);
            border: 6px solid #fff;
            height: 24px;
            width: 24px;
            border-radius: 100px;
            background: #333940;
            cursor: pointer;
            -webkit-appearance: none;
            appearance: none;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin-top: 2px;
        }
        .range input::-moz-range-thumb {
            box-sizing: border-box;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.5);
            border: 6px solid #fff;
            height: 24px;
            width: 24px;
            border-radius: 100px;
            background: #333940;
            cursor: pointer;
        }
        .range input::-ms-thumb {
            box-sizing: border-box;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.5);
            border: 6px solid #fff;
            height: 24px;
            width: 24px;
            border-radius: 100px;
            background: #333940;
            cursor: pointer;
        }
        .range .rangeslider-thumb {
            box-sizing: border-box;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.5);
            border: 6px solid #fff;
            height: 24px;
            width: 24px;
            border-radius: 100px;
            background: #333940;
            cursor: pointer;
            position: absolute;
            touch-action: pan-x;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            will-change: left;
        }
        .range .range-output {
            position: absolute;
            left: 6px;
            top: 6px;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            transition: -webkit-transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), -webkit-transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .range .range-output .output {
            display: block;
            position: absolute;
            height: 60px;
            line-height: 60px;
            min-width: 32px;
            padding: 0 20px;
            top: -26px;
            -webkit-transform: translate(-50%, -100%);
            transform: translate(-50%, -100%);
            background: #383c42;
            color: #fff;
            border-radius: 100px;
            white-space: nowrap;
            font-weight: bold;
            font-size: 1.2em;
            text-align: center;
        }
        .range .range-output .output:before {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            border: 10px solid #383c42;
            border-bottom: none;
            border-left-color: transparent;
            border-right-color: transparent;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body {
            font-family: Helvetica Neue, Helvetica, Arial;
            font-weight: 300;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        form {
            max-width: 500px;
            min-width: 320px;
        }

        h2 {
            font-weight: 300;
            text-align: center;
            margin-bottom: 30px;
        }

    </style>
    <style>
        div.polaroid {
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }

        div.container {
            padding: 10px;
        }
    </style>
    <style>
        body {
            background-color: #f0f7ef;
        }

        .container {
            display: flex;
            width: 100%;
            height: auto;
            text-alignt: center;
        }

        .slider {
            width: 100%;
        }

        input[type="range"] {
            -webkit-appearance: none !important;
            width: 100%;
            height: 15px;
            background-color: #A3CD99;
            border: 1px solid #97c68b;
            border-radius: 10px;
            margin: auto;
            transition: all 0.3s ease;
        }
        input[type="range"]:hover {
            background-color: #b2d5aa;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            width: 20px;
            height: 20px;
            background-color: #579E81;
            border-radius: 30px;
            box-shadow: 0px 0px 3px #3c6d59;
            transition: all 0.5s ease;
        }
        input[type="range"]::-webkit-slider-thumb:hover {
            background-color: #457d66;
        }
        input[type="range"]::-webkit-slider-thumb:active {
            box-shadow: 0px 0px 1px #3c6d59;
        }

        #rangevalue {
            text-align: center;
            font-family: "Quantico", sans-serif;
            font-size: 18px;
            display: block;
            margin: auto;
            padding: 10px 0px;
            width: 100%;
            color: #579E81;
        }

    </style>
    <style>
        .radios input[type=radio] {
            display:none
        }
        .row h3 h5 {
            text-align: center;
        }
        .row{
            margin: 0px;
        }
    </style>
</head>


<body>
@include('2019.header.header')

<form action="/robowars/betting/set_bet" method="post" style="width: 100%;max-width: 100vw">
@csrf

<div class="row">
    @foreach($bot_list as $i)
    <label for="select_bot{{$i->id}}"  style="width: 50%">
        <div style="padding: 4%">
            <div class="col-12">
                <div class="row">
                    <div class="col-12" style="background-image:url('https://www.w3schools.com/css/rock600x400.jpg');background-size: cover; background-position: center; height: 40vw "></div>
                    <div class="col-12">
                        <p><b>Bot Name</b> - <br>{{$i->Bot_name}}</p>
                        <p><b>Bot Id</b> {{$i->id}}</p>
                        <p><b>Main Weapon</b> <br> {{$i->Weapon}}</p>
                        <p><b>Weight</b> {{$i->weight}}Kg</p>
                        <p><b>Strength </b> <br>{{$i->Strength_1}}</p>
                    </div>
                </div>
                <input id="select_bot{{$i->id}}" name="bot_id" type="radio" value="{{$i->id}}" required>Select
            </div>
        </div>

    </label>
    @endforeach
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif
</div>
    <div class="container">
        <div class="slider">
            <input name="amount" type = "range" min="1" max="{{$user_xps->xps}}" onchange="rangevalue.value=value"/>
            <output id="rangevalue">{{$user_xps->xps/2}}</output>
        </div>
    </div>
    <label for="betting_button" style="width: 80%;border: 2px solid blue;border-radius: 7px;text-align: center;margin-left: 10%;">
    <input class="btn" type="submit" id="betting_button" value="Start Betting">
    </label>
</form>
</body>
