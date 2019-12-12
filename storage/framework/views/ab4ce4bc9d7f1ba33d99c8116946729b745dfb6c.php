<!DOCTYPE html>
<html>
<title>Betting Portal | Robowars </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h2{font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    p {line-height: 2}
    .bgimg, .bgimg2 {
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    .bgimg {background-image: url("/2019/robowars/images/15-4.jpg")}
    .bgimg2 {background-image: url("/2019/robowars/images/15-4.jpg")}
</style>
<body>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-text-white w3-center">
        <h1 class="w3-jumbo">Robowars</h1>
        <h2>Betting Portal</h2>
        <h2><b>Kill The Vibe</b></h2>
    </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
    <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
        <a href="#home" style="width:33.3333%" class="w3-bar-item w3-button">Home</a>
        <a href="#" style="width:33.3333%" class="w3-bar-item w3-button">Upcoming Matches</a>
        <a href="#" style="width:33.3334%" class="w3-bar-item w3-button w3-hover-black">LeaderBoard</a>
    </div>
</div>

<!-- About Robowars -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min" id="us">
    <div class="w3-content">
        <h1 class="w3-center w3-text-grey"><b>Robowars</b></h1>
        <img class="w3-round w3-grayscale-min" src="/2019/robowars/images/15-4.jpg" style="width:100%;margin:32px 0">
        <p><i>robowars.</i>
        </p><br>
        <p class="w3-center"><a href="#wedding" class="w3-button w3-black w3-round w3-padding-large w3-large">Robowars Details</a></p>
    </div>
</div>

<!-- Background photo -->
<div class="w3-display-container bgimg2">
    <div class="w3-display-middle w3-text-white w3-center">
        <h1 class="w3-jumbo">Robowars</h1><br>
        <h2>Robowars</h2>
    </div>
</div>

<!-- Betting information -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="wedding">
    <div class="w3-content">
        <h1 class="w3-text-grey"><b>Robowars Betting Portal</b></h1>
        <img class="w3-round-large w3-grayscale-min" src="/w3images/wedding_location.jpg" style="width:100%;margin:64px 0">
        <div class="w3-row">
            <div class="w3-half">
                <h2>Upcoming Matches</h2>
                <p>Tanaji Vs Bose</p>
                <p>Paras Vs Paras</p>
            </div>
            <div class="w3-half">
                <h2>Where</h2>
                <p>OAT</p>
                <p>OAT</p>
            </div>
        </div>
    </div>
</div>

<!-- BET section -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
    <h1>robwars</h1>
    <p class="w3-large">robwars</p>
    <p class="w3-xlarge">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off" style="padding:8px 60px">Step In</button>
    </p>
</div>

<!-- BET modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
        <div class="w3-container w3-white w3-center">
            <h1 class="w3-wide">Let's Begin</h1>
            <p>ROBOWARS BETTING ZONE</p>
            <form>
                <input class="w3-input w3-border" type="text" placeholder="Name(s)" name="name">
            </form>
            <p><i>XXXXXXX</i></p>
            <div class="w3-row">
                <div class="w3-half">
                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-green">BET</button>
                </div>
                <div class="w3-half">
                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-red">Gain XPS</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>
<?php /**PATH /var/app/current/blog/resources/views/2019/robowars/betting_portal/betting_interface.blade.php ENDPATH**/ ?>