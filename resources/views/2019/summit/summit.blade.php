<!DOCTYPE html>
<html lang="en">
<head>
    <title>Summit| Techfest, IIT Bombay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
{{--    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/animsition/css/animsition.min.css">--}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/css/util.css">
    <link rel="stylesheet" type="text/css" href="http://techfest.org/2019/initiatives/pato/css/main.css">
    <!--===============================================================================================-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
</head>
<body class="animsition">

@include('2019.header.header')


<!-- Welcome -->
<section class="section-welcome bg1-pattern">

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                @if($errors->any())
                    <p class="m2-txt1 p-b-46">
                        {{$errors->first()}}
                    </p>
                @endif
            </div>
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
                            Industry 4.0 Summit
						</span>
                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        Use of Artificial Intelligence (AI), Machine Learning (ML), and Internet of Things (IoT) in boosting Industrial Production
                    </p>
                    <p>Come & network with your peers and see the latest technologies & solutions to make manufacturing smarter. Join us at IIT Bombay, at the India's largest gathering for the 4th Industrial Revolution.<br></p>


                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="http://techfest.org/2019/summit/images/main.jpg" alt="IMG-OUR">
                </div>

            </div>
            <a href="/summit/industrysummit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10 t-center" target="_blank" style="margin:auto">
                Visit Website
                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
<!-- Welcome -->
<section class="section-welcome bg1-pattern ">
    <div class="container">
        <div class="row">

            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
                            International Media Summit
						</span>
                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        A forum to discuss trending issues of the digital world such as fake news and digitalisation of conventional media.
                    </p>
                    <p>Come, see the advent of the digital age in Media and its far-reaching effects in our daily lives. Join us at IIT Bombay, at Techfest’s very first International Media Summit.<br></p>
                    <div class="col-md-6 p-b-30">
                        <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                            <img src="http://techfest.org/2019/summit/images/8306.jpeg" alt="IMG-OUR">
                        </div>
                    </div>
                    <a href="/summit/mediasummit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" target="_blank" style="margin:auto">
                        Visit Website
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>





</body>
</html>
