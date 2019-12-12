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
    <style>
        @import  "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
        /* colors */
        /* tab setting */
        /* breakpoints */
        /* selectors relative to radio inputs */
        html {
            width: 100%;
            height: 100%;
        }

        body {
            background: #efefef;
            color: #333;
            font-family: "Raleway";
            height: 100%;
        }
        body h1 {
            text-align: center;
            color: #428BFF;
            font-weight: 300;
            padding: 40px 0 20px 0;
            margin: 0;
        }

        .tabs {
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            position: relative;
            background: white;
            padding: 50px;
            padding-bottom: 80px;
            /*width: 70%;*/
            /*height: 250px;*/
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            border-radius: 5px;
            min-width: 240px;
        }
        .tabs input[name="tab-control"] {
            display: none;
        }
        .tabs .content section h2,
        .tabs ul li label {
            font-family: "Montserrat";
            font-weight: bold;
            font-size: 18px;
            color: #428BFF;
        }
        .tabs ul {
            list-style-type: none;
            padding-left: 0;
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
        }
        .tabs ul li {
            box-sizing: border-box;
            flex: 1;
            width: 25%;
            padding: 0 10px;
            text-align: center;
        }
        .tabs ul li label {
            transition: all 0.3s ease-in-out;
            color: #929daf;
            padding: 5px auto;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            white-space: nowrap;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .tabs ul li label br {
            display: none;
        }
        .tabs ul li label svg {
            fill: #929daf;
            height: 1.2em;
            vertical-align: bottom;
            margin-right: 0.2em;
            transition: all 0.2s ease-in-out;
        }
        .tabs ul li label:hover, .tabs ul li label:focus, .tabs ul li label:active {
            outline: 0;
            color: #bec5cf;
        }
        .tabs ul li label:hover svg, .tabs ul li label:focus svg, .tabs ul li label:active svg {
            fill: #bec5cf;
        }
        .tabs .slider {
            position: relative;
            width: 33.33%;
            transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
        }
        .tabs .slider .indicator {
            position: relative;
            width: 50px;
            max-width: 100%;
            margin: 0 auto;
            height: 4px;
            background: #428BFF;
            border-radius: 1px;
        }
        .tabs .content {
            margin-top: 30px;
        }
        .tabs .content section {
            display: none;
            -webkit-animation-name: content;
            animation-name: content;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            line-height: 1.4;
        }
        .tabs .content section h2 {
            color: #428BFF;
            display: none;
        }
        .tabs .content section h2::after {
            content: "";
            position: relative;
            display: block;
            width: 30px;
            height: 3px;
            background: #428BFF;
            margin-top: 5px;
            left: 1px;
        }
        .tabs input[name="tab-control"]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
            cursor: default;
            color: #428BFF;
        }
        .tabs input[name="tab-control"]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label svg {
            fill: #428BFF;
        }
        @media (max-width: 600px) {
            .tabs input[name="tab-control"]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
                background: rgba(0, 0, 0, 0.08);
            }
        }
        .tabs input[name="tab-control"]:nth-of-type(1):checked ~ .slider {
            -webkit-transform: translateX(0%);
            transform: translateX(0%);
        }
        .tabs input[name="tab-control"]:nth-of-type(1):checked ~ .content > section:nth-child(1) {
            display: block;
        }
        .tabs input[name="tab-control"]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
            cursor: default;
            color: #428BFF;
        }
        .tabs input[name="tab-control"]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label svg {
            fill: #428BFF;
        }
        @media (max-width: 600px) {
            .tabs input[name="tab-control"]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
                background: rgba(0, 0, 0, 0.08);
            }
        }
        .tabs input[name="tab-control"]:nth-of-type(2):checked ~ .slider {
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }
        .tabs input[name="tab-control"]:nth-of-type(2):checked ~ .content > section:nth-child(2) {
            display: block;
        }
        .tabs input[name="tab-control"]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
            cursor: default;
            color: #428BFF;
        }
        .tabs input[name="tab-control"]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label svg {
            fill: #428BFF;
        }
        @media (max-width: 600px) {
            .tabs input[name="tab-control"]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
                background: rgba(0, 0, 0, 0.08);
            }
        }
        .tabs input[name="tab-control"]:nth-of-type(3):checked ~ .slider {
            -webkit-transform: translateX(200%);
            transform: translateX(200%);
        }
        .tabs input[name="tab-control"]:nth-of-type(3):checked ~ .content > section:nth-child(3) {
            display: block;
        }
        .tabs input[name="tab-control"]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
            cursor: default;
            color: #428BFF;
        }
        .tabs input[name="tab-control"]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label svg {
            fill: #428BFF;
        }
        @media (max-width: 600px) {
            .tabs input[name="tab-control"]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
                background: rgba(0, 0, 0, 0.08);
            }
        }
        .tabs input[name="tab-control"]:nth-of-type(4):checked ~ .slider {
            -webkit-transform: translateX(300%);
            transform: translateX(300%);
        }
        .tabs input[name="tab-control"]:nth-of-type(4):checked ~ .content > section:nth-child(4) {
            display: block;
        }
        @-webkit-keyframes content {
            from {
                opacity: 0;
                -webkit-transform: translateY(5%);
                transform: translateY(5%);
            }
            to {
                opacity: 1;
                -webkit-transform: translateY(0%);
                transform: translateY(0%);
            }
        }
        @keyframes  content {
            from {
                opacity: 0;
                -webkit-transform: translateY(5%);
                transform: translateY(5%);
            }
            to {
                opacity: 1;
                -webkit-transform: translateY(0%);
                transform: translateY(0%);
            }
        }
        @media (max-width: 1000px) {
            .tabs ul li label {
                white-space: initial;
            }
            .tabs ul li label br {
                display: initial;
            }
            .tabs ul li label svg {
                height: 1.5em;
            }
        }
        @media (max-width: 600px) {
            .tabs ul li label {
                padding: 5px;
                border-radius: 5px;
            }
            .tabs ul li label span {
                /*display: none;*/
            }
            .tabs .slider {
                display: none;
            }
            .tabs .content {
                margin-top: 20px;
            }
            .tabs .content section h2 {
                display: block;
            }
        }

    </style>
</head>
<body>
<?php echo $__env->make('layouts.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('2019.header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div>
    <h1 style="text-align: center;">Schedule <br>Coming Soon</h1>
</div>
<div>
    <div class="tabs">

        <input type="radio" id="tab1" name="tab-control" checked>
        <input type="radio" id="tab2" name="tab-control">
        <input type="radio" id="tab3" name="tab-control">
        <ul>
            <li title="Features">
                <label for="tab1" role="button">
                    <span>Day 1</span>
                </label>
            </li>
           <li title="Features">
                <label for="tab2" role="button">
                    <span>Day 2</span>
                </label>
            </li>
           <li title="Features">
                <label for="tab3" role="button">
                    <span>Day 3</span>
                </label>
            </li>
        </ul>

        <div class="slider"><div class="indicator"></div></div>
        <div class="content">
            <section>
                <h2>Features</h2>1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati atque quibusdam officiis est dolorum minima deleniti ratione molestias numquam. Voluptas voluptates quibusdam cum?
            </section>


            <section>
                <h2>Delivery Contents</h2>
                2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quas adipisci a accusantium eius ut voluptatibus ad impedit nulla, ipsa qui. Quasi temporibus eos commodi aliquid impedit amet, similique nulla.</section>
            <section>
                <h2>Shipping</h2>
                3 ipsum dolor sit amet, consectetur adipisicing elit. Quam nemo ducimus eius, magnam error quisquam sunt voluptate labore, excepturi numquam! Alias libero optio sed harum debitis! Veniam, quia in eum.</section>
            <section>
                <h2>Returns</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus molestiae enim deserunt necessitatibus eaque quidem incidunt.
            </section>
        </div>
    </div>

</div>
</body>
</html>
<?php /**PATH /var/app/current/blog/resources/views/2019/schedule/schedule.blade.php ENDPATH**/ ?>