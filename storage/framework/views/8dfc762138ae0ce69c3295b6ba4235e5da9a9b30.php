<!doctype html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
</head>
<body>

<form enctype="multipart/form-data" action="/newsfeed/insert"  method="post">
    <?php echo e(csrf_field()); ?>

    <input name="file" type="file" multiple accept="*image*"/>
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <input type="text" name="link" placeholder="link">
    <input type="text" name="social_media" placeholder="social_media">

    <input type="submit" value="submit">
</form>
</body>
</html><?php /**PATH /var/app/current/blog/resources/views/2019/newsfeed/news_insert.blade.php ENDPATH**/ ?>