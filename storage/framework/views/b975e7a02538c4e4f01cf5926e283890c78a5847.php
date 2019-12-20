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
        /*
	Lazy Loaded elements fade in via CSS opacity animations.
*/

        @import  url(https://fonts.googleapis.com/css?family=Raleway:300,700);

        .page_title, .tag {
            font-weight: 300;
            line-height: 120%;
            text-align: center;
            text-shadow: 0 1px 5px rgba(0,0,0,.8);
            text-transform: uppercase;
        }

        /* PEN STYLES ========== */
        .lazy_box {
            opacity: 0;
            padding: 0;
            -webkit-transition: opacity 300ms 200ms ease-in-out;
            transition: opacity 300ms 200ms ease-in-out;
        }
        .lazy_box .inner {
            background: rgba(255,255,255,.9);
            color: #444;
            padding: 40px 20px;
            margin: 10px;
        }
        .lazy_box .inner h2 {
            font-weight: 700;
            margin: 0 0 10px;
        }
        .lazy_box .inner p {
            margin: 0;
        }
    </style>
</head>
<body>
<?php echo $__env->make('2019.header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('app.newsfeed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('app.newsfeed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('app.newsfeed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<p style="text-align: center;">The End.</p>
<script !src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script !src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script !src="">
    // Boostrap used for styling

    // jQuery only required for Lazy Loader
    function lazyLoadIt() {
        var winPos = $(window).scrollTop();
        $('.lazy_box').each(function(){
            var winHeight = $(window).height(),
                thisPos = $(this).position().top;
            if ( (winPos+(winHeight-(winHeight*.2) ) ) >= thisPos ) {
                $(this).css('opacity','1');
            }
        });
    } lazyLoadIt();

    $(window).scroll(function(){
        lazyLoadIt();
    });
    $(window).resize(function(){
        lazyLoadIt();
    });
</script>
</body>
</html>
<?php /**PATH /var/app/current/blog/resources/views/2019/newsfeed/newsfeed.blade.php ENDPATH**/ ?>