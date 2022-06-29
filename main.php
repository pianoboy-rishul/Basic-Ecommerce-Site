<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KeyZoo: Online Store for Key Instruments</title>
  <link rel="icon" type="image/x-icon" href="piano.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="A.fonts,,_icomoon,,_style.css+css,,_bootstrap.min.css+css,,_style.css,Mcc.Ax2f9rlEoC.css.pagespeed.cf.xewoUhaX15.css" />
  <link rel="stylesheet" href="css/A.ionicons.min.css+style.css,Mcc.bnVW-mDmyB.css.pagespeed.cf.imjSJubmRP.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script nonce="79629dc3-0d4e-471f-bbba-bb02a0f05f77">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))));z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
  <style>
    body {
        background-image: url("pianobg.jpg");
        background-repeat: no-repeat;
        background-size:1450px 900px;
        background-attachment: fixed;
    }
    .logo{
        width: 140px;
        height: auto;
    }

    .active {
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size:large;
        padding: 10px;
        padding-left: 72px;
    }
    .dropdown {
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size:large;
        padding: 10px;
        padding-left: 72px;
    }
    .fa {
        font-size: 20px;
        margin: 10px 0px;
        border-radius: 100%;
    }
    .fa:hover {
        opacity: 0.7;
    }  
    .fa-facebook {
        background-color:white ;
        color: black;
    }
    .fa-linkedin {
        background-color: white;
        color: black;
    }
    .fa-youtube {
        background-color: white;
        color: black;
    }
    .fa-instagram {
        background-color: white;
        color: black;
    }
    footer {
        text-align: center;
        padding: 3px;
        background-color:black;
        color: white;
    }
    * {
        box-sizing: border-box;
    }
    .box {
        float: left;
        width: 10%;
        padding: 50px;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    .map-container{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
    .map-container iframe{
        left:0;
        top:0;
        height:50%;
        width:100%;
        position:absolute;
    }
    .cont{
        background-image: url("bg.png");
        background-repeat: no-repeat;
        background-size: cover;
        padding: 1%;
    }
    .btn {
        background-color: #ccc;
        color: black;
        padding: 16px 20px;
        border: 2px solid black;
        cursor: pointer;
        width: 20%;
        opacity: 0.9;
        border-radius: 50px;
        text-align: center;
        font-family: 'Helvetica';
    }
    .btn:hover {
        opacity: 1;
    }
    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
        background-color: aliceblue;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">
        <img class="logo" src="keyzoo.png">
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/Ecommerce/main.php" style="color: black;"><b>Home</b></a></li>
      <li class="active"><a href="http://localhost/Ecommerce/about.php" target="_blank" style="color: black;"><b>About Us</b></a></li>
      <li class="active"><a href="http://localhost/Ecommerce/Contact.php" target="_blank" style="color: black;"><b>Contact Us</b></a></li>
      <li class="active"><a href="http://localhost/Ecommerce/video.php" target="_blank" style="color: black;"><b>Product Videos</b></a></li>
      <li class="active"><a href="http://localhost/Ecommerce/pianosynth.php" target="_blank" style="color: black;"><b>Our Products</b></a></li>
      <li class="active"><a href="http://localhost/Ecommerce/login/logout.php" style="color:black;">LOGOUT</a></li>
    </ul>
  </div>
</nav><br>
<div class="cont">
  <h1 style="font-family:'Times New Roman'; text-align: center; color: whitesmoke;"><b><u>KEYZOO MEGA SUMMER SALE</u></b></h1><br>
  <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 100px; text-align: center; color: red;"><b>FLAT 50% DISCOUNT</b></h1>
  <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 100px; text-align: center; color: red;"><b>ON ALL ITEMS</b></h1><br><br><br>
</div><br>

<h1 style="font-family:Book Antiqua; color: aliceblue; text-align:center;"><strong>***&emsp;<u>PRODUCTS GALLERY</u>&emsp;***</strong></h1><br>
<div class="row">
  <div class="column">
    <div class="card">
      &nbsp;&nbsp;
      <img src="yamaha.jpg" style="width:100%; height:250px;"><br><br> 
      <div class="container">
        <h2 style="font-family:Copperplate Gothic Light;"><b>Grand Pianos</b></h2><br>
        <p><button class="button" onclick="myFunction1()" style="border-radius:10px;padding:10px;">Go to Products Page</button></p>
        <script>
            function myFunction1() {
                window.open("http://localhost/Ecommerce/pianosynth.php", "_blank")
            }
        </script>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      &nbsp;&nbsp;
      <img src="jyotaksh.jpg" style="width:100%; height:250px;"><br><br> 
      <div class="container">
        <h2 style="font-family:Copperplate Gothic Light;"><b>Harmoniums</b></h2><br>
        <p><button class="button" onclick="myFunction1()" style="border-radius:10px;padding:10px;">Go to Products Page</button></p>
        <script>
            function myFunction1() {
                window.open("http://localhost/Ecommerce/pianosynth.php", "_blank")
            }
        </script>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      &nbsp;&nbsp;
      <img src="axedge.jpg" style="width:100%; height:250px;"><br><br> 
      <div class="container">
        <h2 style="font-family:Copperplate Gothic Light;"><b>Keytars</b></h2><br>
        <p><button class="button" onclick="myFunction1()" style="border-radius:10px;padding:10px;">Go to Products Page</button></p>
        <script>
            function myFunction1() {
                window.open("http://localhost/Ecommerce/pianosynth.php", "_blank")
            }
        </script>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      &nbsp;&nbsp;
      <img src="korg.jpg" style="width:100%; height:250px;"><br><br> 
      <div class="container">
        <h2 style="font-family:Copperplate Gothic Light;"><b>Synthesizers</b></h2><br>
        <p><button class="button" onclick="myFunction1()" style="border-radius:10px;padding:10px;">Go to Products Page</button></p>
        <script>
            function myFunction1() {
                window.open("http://localhost/Ecommerce/pianosynth.php", "_blank")
            }
        </script>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      &nbsp;&nbsp;
      <img src="37.jpg" style="width:100%; height:250px;"><br><br> 
      <div class="container">
        <h2 style="font-family:Copperplate Gothic Light;"><b>Melodicas</b></h2><br>
        <p><button class="button" onclick="myFunction1()" style="border-radius:10px;padding:10px;">Go to Products Page</button></p>
        <script>
            function myFunction1() {
                window.open("http://localhost/Ecommerce/pianosynth.php", "_blank")
            }
        </script>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      &nbsp;&nbsp;
      <img src="amica.jpg" style="width:100%; height:250px;"><br><br> 
      <div class="container">
        <h2 style="font-family:Copperplate Gothic Light;"><b>Accordions</b></h2><br>
        <p><button class="button" onclick="myFunction1()" style="border-radius:10px;padding:10px;">Go to Products Page</button></p>
        <script>
            function myFunction1() {
                window.open("http://localhost/Ecommerce/pianosynth.php", "_blank")
            }
        </script>
      </div>
    </div>
  </div>
</div>
</body><br><br><br><br>
<footer class="footer-08">
  <div class="container-fluid px-lg-5">
    <div class="row">
      <div class="col-md-9 py-5">
        <div class="row">
          <div class="col-md-8">
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-15">
                <div class="row">
                  <div class="col-md-12 col-lg-15">
                    <h2 class="footer-heading"><i class="material-icons" style="font-size:48px;color:brown">place</i><b>&ensp;Find Us&emsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons" style="font-size:48px;color:brown">call</i>&ensp;Call Us</b></h2>
                    <h5 class="footer-heading">&emsp;&emsp;&emsp;Marylebone Rd, Marylebone,&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;+ 456 481 1772</h5>
                    <h5 class="footer-heading">&emsp;&emsp;&emsp;London NW15H, UK&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;&ensp;&nbsp;+ 4326 5825 56</h5>
                  <div class="col-md-12 col-lg-15">
                    <h2 class="footer-heading"><i class="material-icons" style="font-size:48px;color:brown">&nbsp;access_time</i><b>&ensp;Working Hours&emsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons" style="font-size:48px;color:brown">mail_outline</i>&ensp;Write To Us</b></h2>
                    <h5 class="footer-heading">&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;&nbsp;&nbsp;Mon-Fri: 8AM-5PM&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&ensp;&nbsp;Office@keyzoo.com</h5>
                    <h5 class="footer-heading">&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;Sat-Sun: 8AM-2PM&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&nbsp;Care@keyzoo.com</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <br>
        <form action="#" class="form-inline" style="padding-right: 19.7px;">
          <div class="form-group"><br>
            <input type="text" class="form-control" placeholder="Your Name..." style="width:150px; padding-bottom: 10%; padding-top: 10%;font-family:Georgia, 'Times New Roman', Times, serif;border-radius: 0%;">&ensp;&nbsp;
          </div>
          <div class="form-group"><br>
            <input type="text" class="form-control" placeholder="Your Email..." style="width:150px; padding-bottom: 10%; padding-top: 10%;font-family: Georgia, 'Times New Roman', Times, serif;border-radius: 0%;">
          </div>
          <div class="form-group"><br>
            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Write Feedback..." style="width:315px; padding-bottom: 10%; padding-top: 3%;font-family: Georgia, 'Times New Roman', Times, serif;border-radius: 0%;"></textarea>
          </div><br>
          <div class="form-group"><br>
            <button type="submit" class="form-control submit px-3" style="background-color:black; border-color: white; border-width: 3px; border-radius: 0%;width: 316px; height: 40px; color: whitesmoke; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: medium;">Send</button>
          </div>
        </form> 
        <br>
    </div>
  </div><br><br>
  <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
    <iframe src="https://maps.google.com/maps?q=marylebonerd&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
      style="border:0" allowfullscreen></iframe><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-12 text-center">
  <img src="keyzoo.png"><br><br>
  <p class="menu">
  <a href="#" style="color:white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">&ensp;2020 Vernon Street, San Diego</a><br>
  <a href="#" style="color:white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">&nbsp;+ (760) 707-4815 | M: info@keyzoo.com</a>
  </p>
  </div>
  </div>
  </div>
  </div>
</footer>
<script src="js/jquery.min.js+popper.js.pagespeed.jc.OA1Olq8XqC.js"></script><script>eval(mod_pagespeed_JtDpnSW_jU);</script>
<script>eval(mod_pagespeed__Rv9MB7uYP);</script>
<script src="js/bootstrap.min.js+main.js.pagespeed.jc.hJAVjdwcag.js"></script><script>eval(mod_pagespeed_mQ8QcicbLl);</script>
<script>eval(mod_pagespeed_Y2FJC$fMDT);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"70bac3b0087389e1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</html>