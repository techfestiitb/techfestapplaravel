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
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
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
</head>
<body>
@include('layouts.preloader')
@include('2019.header.header')
@include('2019.workshops.all_workshop')

</body>
</html>
