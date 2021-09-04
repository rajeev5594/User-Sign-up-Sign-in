<?php
$con=mysqli_connect('localhost','root','','krishworks_signin_db');

if($con==true)
{
	echo"";
}
else
{
	echo"Connection not established Something Went Wrong Please try after some time";
}	
date_default_timezone_set('Asia/Kolkata');
$error = "";
?>