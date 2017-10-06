<?php
require('flagcontroller.php');
// mustLogin();
?>
<!DOCTYPE html>
<!--
Capture The Flag hosted by Celesta IITP 2017.
-->
<html>
    <head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107604046-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-107604046-1');
        </script>
        <title>CAPTURE THE FLAG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/rules.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="Site-top">
            <div class="container">
                <h2>Capture the Flag</h2>
            </div>
            <!-- adding welcome for person -->
            </div>
        <div class="list">
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <a href="index.php" style="text-decoration: none"><li ><b>Home </b></li></a>
                      <a href="rules.php" style="text-decoration: none"><li><b>Rules</b></li></a>
                      <a href="leaderboard.html" style="text-decoration: none"><li><b>Leaderboard</b></li></a>
                       <a href="https://www.facebook.com/events/138069963498248/?active_tab=discussion" target="_blank"  style="text-decoration: none"><li><b>DiscussionForum</b></li></a>
                    </ul>
                  </div>
                </nav>
        </div>
        
        <div class='body-area'>
            <div class="container">
            <h2><b>RULES</b></h2>
            <p> <h3>Capture The Flag is a hacking challenge where you can prove your hacking skills. This challenge will test your basic understanding of various fields of Computer Science. </h3></p>
            <ul id="dif">
                <li><h3>Individual participants need to register using their Celesta ID and Password</h3></li>
                <li><h3>Can attempt the challenges from anywhere using any device.</h3> </li>
                <li><h3>Use of Internet is allowed.</h3> </li>
                <li><h3>Each problem will have different points according to its difficulty level.</h3></li>
                <li hidden="true"><h3>Be on the lookout for hidden bonus questions. You might get an idea about it in one of the questions><br><!-- BTW, flag to mission 10 is <?php //echo getFlag(10); ?> --></h3></li>
                <li><h3>The sole discretion of choosing the contest winner lies with the contest organizers and no enquiries will be entertained regarding the winning criterion</h3></li>                
            </ul>
        </div>
        </div>
        <div class='footer'>
            <p>@Celesta 2017</p>
        </div>
    </body>
</html>
