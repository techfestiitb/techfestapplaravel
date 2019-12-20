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
<?php echo $__env->make('layouts.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('2019.header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div>
    <br>
    <?php $__currentLoopData = $exhibitions_row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exhibitions_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="padding-top: 0.5em;">
            <div class="row" style="display: flex;padding: 0% 5%;height: 25vw;">
                <div class="col-8" style="    overflow: scroll;height: 100%;">
                    <h5 style="margin-bottom: 0;"><?php echo $exhibitions_row->name; ?></h5>
                    <p style="font-size: 13px;margin-bottom: 4px;"><i><?php echo $exhibitions_row->country; ?></i> </p>
                    <p style="font-size: 11px"><?php echo $exhibitions_row->oneliner; ?></p>
                </div>
                <div class="col-4" style="background-image: url('http://techfest.org<?php echo $exhibitions_row->image; ?>');background-size: cover;background-position: center;border-radius: 20px">
                </div>
            </div>
            <div class="row" style="display: flex;padding: 0% 5%;">
                <div class="col-8">

                </div>
                <div class="col-4" style="text-align: right;">
                    ....
                </div>
            </div>
            <hr style="margin: 0; width: 90%; margin-left: 5%">
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</body>
</html>
<?php /**PATH /var/app/current/blog/resources/views/2019/exhibitions/exhibitions.blade.php ENDPATH**/ ?>