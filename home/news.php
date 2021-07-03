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
<link rel="stylesheet" type="text/css" href="news.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
        <li class="working"><a href="">&nbsp&nbsp&nbsp;Home&nbsp&nbsp&nbsp</a></li>
        
        <li class="navli" ><a href="../kad/about.html">Who Are We</a></li>
        <li class="navli"><a href="../gowree/contact.html">Contact</a></li>
        <li class="navli"><a href="../sign.html">&nbsp;Volunteering</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
     <li><a id="donate-button" href="../Nimesha/Donate.html">Donate</a></li>
      </ul>
    </div>
  </div>
</nav> 
<!-- navigation bar end here  -->
<!-- main div start -->
<!-- ........................................................-->
 <div id="head-mid" >
<?php
	
$uname = $_POST['username'];
$uemail = $_POST['useremail'];
  
 $con = mysqli_connect("localhost","root","");
 mysqli_select_db($con,"assigmentdb");
 $sql = "INSERT INTO newsletter(UserName,UserEmail) VALUES ('$uname','$uemail')";
 if($con){
	 echo "<font color='green'>Subscribed to newsletter service successfully. We will send important updates quickly to your inbox..
			<a href='home.html'>Click here</a> to go back to Home page.	</font>";
	
 }
else{echo "erro..! Reconnecting";}
mysqli_query($con,$sql);

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
              <li class="footli"><a href="../kad/about.html">About Us</a></li>
              <li class="footli"><a href="../gowree/contact.html">Contact Us</a></li>
              <li class="footli"><a href="../sign.html">Contribute</a></li>
              <li class="footli"><a href="../privacy/privacy.html">Privacy Policy</a></li>
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
         <a href="../index.html">Against hunger </a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            
        </div>
      </div>
</footer>


<!-- ........................................................-->
<!-- footer end here-->



</body>
</html>