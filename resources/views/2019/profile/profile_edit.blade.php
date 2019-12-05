<!doctype html>
<html lang="en">
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
</head>
<body>
{{--<img src="/2019/profile/svg/edit-regular.svg" alt="" style="top: 80px;width: 20%;position: relative;left: 85px;">--}}
<form id="form" enctype="multipart/form-data" action="/profile/edit"  method="post">
    {{csrf_field()}}
        <input id="file" name="file" type="file" multiple accept="*image*"/>
{{--        <input id="profile" name="profile" type="file" multiple accept="*image*"/>--}}
    <input type="submit" >
</form>
{{--<form id="form2" enctype="multipart/form-data" action="/profile/dp_edit"  method="post">--}}
{{--    {{csrf_field()}}--}}
{{--    <input id="file" name="file" type="file" multiple accept="*image*"/>--}}
{{--    --}}{{--        <input id="profile" name="profile" type="file" multiple accept="*image*"/>--}}
{{--        <input type="submit" >--}}
{{--</form>--}}

<script>
    // var uploadField = document.getElementById("file");
    //
    // uploadField.onchange = function() {
    //     if(this.files[0].size > 1048576*2){
    //         alert("File is too bigger than 2Mb!");
    //         this.value = "";
    //     }
    //     else{
    //         document.getElementById("form").submit();
    //     }
    //     ;
    // };
</script>
</body>
</html>