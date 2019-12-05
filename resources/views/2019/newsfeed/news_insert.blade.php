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
{{--<img src="/2019/profile/svg/edit-regular.svg" alt="" style="top: 80px;width: 20%;position: relative;left: 85px;">--}}
<form enctype="multipart/form-data" action="/newsfeed/insert"  method="post">
    {{csrf_field()}}
    <input name="file" type="file" multiple accept="*image*"/>
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <input type="text" name="link" placeholder="link">
    <input type="text" name="social_media" placeholder="social_media">

    <input type="submit" value="submit">
</form>
</body>
</html>