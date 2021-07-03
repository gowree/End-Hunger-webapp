<?php
$uname=$_POST["uname"];
$serve=$_POST["service"];
$comm=$_POST["comment"];

//connection

$con=mysqli_connect("localhost","root","","about");
if($con)
{
	echo "connection succesfull";
}
else
{
	echo "connection fail",mysqli_connect_error();
}

$insert="INSERT INTO comment VALUES('$uname','$serve','$comm');";
if(mysqli_query($con,$insert))
{
    echo "Data inserted successfully";
}
else
{
   echo "Dta inserted fail";
}



?>



