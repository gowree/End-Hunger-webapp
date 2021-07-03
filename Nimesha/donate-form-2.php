<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="language" content="english"> 
    <meta http-equiv="content-type" content="text/html">	
<!--mobile responsive-->
<meta name="format-detection" content="telephone=yes"/>
    <meta name="HandheldFriendly" content="true"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="donate.css">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
</head>	
<body>
<!--navigation bar start here  -->
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.html" id="brand">&nbsp&nbsp&nbsp&#9772;&nbsp;Against Hunger&nbsp&nbsp&nbsp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="navli"><a href="../home/home.html">Home</a></li>
        <li class="navli"><a href="../Kad/about.html">Who Are We</a></li>
        <li class="navli"><a href="../gowree/contact.html">Contact</a></li>
        <li class="navli"><a href="../sign.html">&nbsp;Volunteering</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li class="working"><a id="donate-button" href="#">Donate</a></li>
      </ul>
    </div>
  </div>
</nav> 
<!-- navigation bar end here  -->
<!-- main div start -->
<!-- ........................................................-->
<div class="big-box">
	<?php
		$fname = $_POST["Fname"];$Lname = $_POST["Lname"];$email = $_POST["emailname"];
		$tp = $_POST["tp"];$address = $_POST["add"];$city = $_POST["ct"];$state = $_POST["st"];
		$zip = $_POST["zip"];$cash = $_POST["cash"];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"assigmentdb");
		$sql = "INSERT INTO donation(FIRSTNAME,LASTNAME,EMAIL,TELEPHONE,ADDRESS,CITY,STATE,ZIPCODE,DONATION) VALUES('$fname',
				'$Lname','$email','$tp','$address','$city','$state','$zip','$cash');";
		if($sql){
			echo "<br><br><font color='green' size='10'><b>Thank you for your generous gift to Against Hunger Foundation. 
			We are thrilled to have your support. Through your donation we have been able to accomplish Zero Hunger
			and continue working towards end all forms of hunger and malnutrition .
			You truly make the difference for us, and we are extremely grateful!<br>
			Donation details sent to your Email..<br><br>
			<a href='../home/home.html'>Click here </a>to go back home page..</b></font>";
		}
		else{echo "<font color='red'>Something  wrong.. redirecting</font>";}
		mysqli_query($con,$sql);
		mysqli_close();
	?>
</div>
<!-- ........................................................-->
<!--footer start here  -->
  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Against Hunger Foundation <i>- Our aim to end all forms of hunger and malnutrition by 2030, making sure all people–especially children–have sufficient and nutritious food all year. This involves promoting sustainable agricultural, 
			supporting small-scale farmers and equal access to land, technology and markets.</p>
          </div>

          <div class="col-xs-6 col-md-3">
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li class="footli"><a href="http://scanfcode.com/about/">About Us</a></li>
              <li class="footli"><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li class="footli"><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li class="footli"><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li class="footli"><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="1.html">Against hunger Foundation </a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            
        </div>
      </div>
</footer>
<!-- ........................................................-->
<!-- footer end here-->
<?php

	


?>
</body>
</html>