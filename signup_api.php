<?php
session_start();
include("dbcon.php");
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,md5($_POST['password']));
	$sql="insert into users(name,email,password) values('$name','$email','$password')";
	$result=mysqli_query($con,$sql);
	if($result){
		?>
		<script>
		alert("Users Sign-up Successfully ! Please login-in to Continue..");
		window.open('login.php','_self');
		</script>
		<?php
	}
}
?>
