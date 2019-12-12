<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leaderboard | Robowars</title>
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="less.js" type="text/javascript"></script>
    <script>
        // ----- On render -----
        var green = "#3CC796";
        var black = "rgba(0,0,0,0.65)";
        var drew = $($(".leader>li")[0]);
        var joel = $($(".leader>li")[2]);

        $(function() {
            TweenMax.set($(".leader>li"), {
                autoAlpha: 0,
                y: 20
            });
            drew.find(".number").css({
                color: green
            });
            setTimeout(function() {
                TweenMax.staggerTo(
                    $(".leader>li"),
                    0.6,
                    {
                        autoAlpha: 1,
                        y: 0,
                        ease: Expo.easeOut
                    },
                    0.075,
                    swappem
                );
            }, 1500);
        });

        var swappem = function() {
            setTimeout(function() {
                TweenMax.to(joel, 0.25, {
                    scale: 1.1,
                    onComplete: function() {
                        joel.find(".list_num").text(1);
                        joel.find(".number").css("color", green);
                    }
                });
                TweenMax.to(joel, 0.6, {
                    y: -160,
                    delay: 0.1
                });
                TweenMax.to(joel, 0.5, {
                    scale: 1,
                    delay: 0.6,
                    ease: Elastic.easeOut.config(1, 0.3)
                });
                TweenMax.to(drew, 0.5, {
                    y: 160,
                    delay: 0.1,
                    onUpdate: function() {
                        drew.find(".list_num").text(3);
                        drew.find(".number").css("color", black);
                    }
                });
                var numbers = {
                    drew: 9735,
                    joel: 7653
                };
                TweenMax.to(numbers, 0.667, {
                    drew: 6548,
                    joel: 9957,
                    onUpdate: function() {
                        var joelNum = Math.floor(numbers.joel).toLocaleString();
                        joel.find(".number").text(joelNum);
                        var drewNum = Math.floor(numbers.drew).toLocaleString();
                        drew.find(".number").text(drewNum);
                    }
                });
                TweenMax.to($("#decoration"), 0.12, {
                    autoAlpha: 1,
                    scaleX: 1.05,
                    scaleY: 1.3,
                    delay: 0.6,
                    ease: Power3.easeOut,
                    onComplete: function() {
                        TweenMax.to($("#decoration"), 0.125, {
                            scale: 0,
                            delay: 0.2,
                            ease: Power3.easeIn
                        });
                    }
                });
                TweenMax.to($("#decoration2"), 0.12, {
                    autoAlpha: 1,
                    scaleX: 1.05,
                    scaleY: 1.3,
                    delay: 0.65,
                    ease: Power3.easeOut,
                    onComplete: function() {
                        TweenMax.to($("#decoration2"), 0.125, {
                            scale: 0,
                            delay: 0.1,
                            ease: Power3.easeIn
                        });
                    }
                });
                TweenMax.to($("#decoration3"), 0.12, {
                    autoAlpha: 1,
                    scaleX: 1.05,
                    scaleY: 1.3,
                    delay: 0.7,
                    ease: Power3.easeOut,
                    onComplete: function() {
                        TweenMax.to($("#decoration3"), 0.125, {
                            scale: 0,
                            ease: Power3.easeIn
                        });
                    }
                });
            }, 1000);
        };

    </script>
</head>
<body>
<div class="table">
    <div class="table-cell">
        <ul class="leader">
            <div id="decoration"></div>
            <div id="decoration2"></div>
            <div id="decoration3"></div>
            <li>
                <span class="list_num">Rank</span>
                <img src="" />
                <h2>Name<span class="number">XPS</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>
            <li>
                <span class="list_num">1</span>
                <img src="" />
                <h2>Deevanshu<span class="number">9,735</span></h2>
            </li>

        </ul>
    </div>
</div>






<style>
    *, *:before, *:after {
        box-sizing: border-box;
    }
    body, html {
        background-color: #2c1b35;
        background-image: url("/2019/robowars/betting/bet_bg.png");
        background-repeat: no-repeat;
        /*background-position: center;*/
        background-attachment: fixed;
        background-size: cover;
    rgba(11,24,45,1)), color-stop(36%, rgba(0,35,104,1)), color-stop(62%, rgba(50,34,110,1)), color-stop(78%, rgba(80,33,113,1)), color-stop(86%, rgba(80,33,113,1)));
        background: -webkit-linear-gradient(left, rgba(11,24,45,1) 0%, rgba(0,35,104,1) 36%, rgba(50,34,110,1) 62%, rgba(80,33,113,1) 78%, rgba(80,33,113,1) 86%);
        background: -o-linear-gradient(left, rgba(11,24,45,1) 0%, rgba(0,35,104,1) 36%, rgba(50,34,110,1) 62%, rgba(80,33,113,1) 78%, rgba(80,33,113,1) 86%);
        background: -ms-linear-gradient(left, rgba(11,24,45,1) 0%, rgba(0,35,104,1) 36%, rgba(50,34,110,1) 62%, rgba(80,33,113,1) 78%, rgba(80,33,113,1) 86%);
        background: linear-gradient(to right, rgba(11,24,45,1) 0%, rgba(0,35,104,1) 36%, rgba(50,34,110,1) 62%, rgba(80,33,113,1) 78%, rgba(80,33,113,1) 86%);
        /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0b182d', endColorstr='#502171', GradientType=1 );*/

    }
    .table {
        display: table;
        width: 100%;
        position: absolute;
        height: 100%;
    }
    .table-cell {
        display: table-cell;
        vertical-align: middle;
    }
    #decoration, #decoration2, #decoration3 {
        position: absolute;
        background-color: yellow;
        width: 420px;
        height: 70px;
        opacity: 0;
        border-radius: 10px;
    }
    #decoration2 {
        background-color: magenta;
    }
    #decoration3 {
        background-color: cyan;
    }
    .leader {
        list-style-type: none;
        padding: 0;
        margin: 0 auto;
        width: 420px;
        height: 390px;
    }
    .leader li {
        background-color: #fff;
        border-radius: 5px;
        height: 70px;
        margin-bottom: 10px;
        overflow: hidden;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
    }
    .leader li .list_num {
        float: left;
        line-height: 40px;
        font-size: 18px;
        color: rgba(0, 0, 0, 0.65);
        margin: 15px;
        font-weight: bold;
        width: 20px;
        text-align: right;
        margin-left: 10px;
    }
    .leader li h2 {
        display: block;
        margin: 0;
        font-size: 18px;
        line-height: 40px;
        font-weight: 300;
        margin-top: 15px;
        padding-right: 20px;
    }
    .leader li h2 .number {
        float: right;
        font-weight: bold;
        color: rgba(0, 0, 0, 0.65);
        transition: color 0.3s;
    }
    .leader li img {
        width: 40px;
        height: 40px;
        float: left;
        margin: 15px 20px;
        margin-left: 0;
        border-radius: 100%;
    }

</style>
</body>
</html>