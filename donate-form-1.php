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
<div class="words-box">
<h1>Donate Today</h1>
<p>Supporting Against Hunger with your donation helps us strengthen food production 
and food access in Sri Lanka. We rely on support like yours to continue to offer
 the services and programs that we do. Thank you for supporting a strong local food system!
Below you will find the option to donate to one of our programs or to general operating expenses.
 Please let us know how you would like your money to be used.  </p>
 </div>
	<div class="form-box">
	<form method="POST" name="form1" action="donate-form-2.php">
	<legend>Donate</legend>
	<table class="form-table">
		<tr>
			<td>
			<label for="Fname"  class="required">First Name</label></td>
			<td><input type="text" class="input-box" name="Fname" Required>	</td>
		
			<td>
			<label for="Lname"  class="required">Last Name</label></td>
			<td><input type="text" class="input-box" name="Lname" Required>	</td>
		</tr>
		<tr>
			<td>
			<label for="emailname"  class="required">EMail</label></td>
			<td><input type="email" class="input-box" name="emailname" Required>	</td>
		
			<td>
			<label for="tp">Phone</label></td>
			<td><input type="telephone" class="input-box" name="tp" Required>	</td>
		</tr>
		<tr>
			<td>
			<label for="add">Address</label></td>
			<td><input type="text" class="input-box" name="add">	</td>
		
			<td>
			<label for="ct">City</label></td>
			<td><input type="text" class="input-box" name="ct" >	</td>
		</tr>
		<tr>
			<td>
			<label for="st">State</label></td>
			<td><input type="text" class="input-box" name="st" >	</td>
		
			<td>
			<label for="zip">Zip code</label></td>
			<td><input type="number" class="input-box" name="zip" min="10" >	</td>
		</tr>
		<tr>
			<td>
			<label for="cash"  class="required">Amount</label></td>
			<td>
			<input type="number" step="any" required class="input-box" name="cash"  min="10" max="10000" value="<?php echo $_POST['donate-value'];?>">
			</td>
		</tr>
		<tr>
			<td>
			<label for="com">Comment</label></td>
			<td colspan="3"><textarea class="input-box" placeholder="Feel Free to comment"></textarea>		</td>
		</tr>
	</table>
	<input type="reset" value="Clear" class="reset-button">
	<input type="submit" value="Donate" class="sub-button">
	</form>
	
	</div>
	<div class="othermethods">
	<h1>Other Donation Methods</h1><br><br><br>
	<span>
	<img class="pay-link1" src="paypal.png" alt="paypal"/><br><br>
	<img class="pay-link2" src="hnb.jpg" alt="hnb"/>
	</span>
	</div>
	
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
              <li class="footli"><a href="../sitemap.xml">Sitemap</a></li>
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