<?php

$FN=$_POST["fname"];
$LN=$_POST["lname"];
$PN=$_POST['pn'];
$EM=$_POST['email'];
$HM=$_POST['hd'];
$MG=$_POST['mg'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"CDB");

// inserting values

$insert="INSERT INTO TBL VALUES('$FN','$LN','$PN','$EM','$HM','$MG')";
if (mysqli_query($con,$insert))

mysqli_close($con);

?>