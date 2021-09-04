<?php
session_start();
include("dbcon.php");
if(isset($_POST['submit'])){
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
	// $sql="insert into users(email,password) values('$email','$password')";
	// $result=mysqli_query($con,$sql);
$query ="SELECT * FROM  users WHERE email='$email' && password='$password'";
$data = mysqli_query($con,$query );
$total = mysqli_num_rows($data);
if($total<1){
	?>
	<script>
	alert("User name and password not matched !");
	window.open('login.php','_self');
    </script>
	<?php
	}else{
		 $data1=mysqli_fetch_assoc($data);
		 $id=$data1['id'];
		 $name=$data1['name'];
		 $_SESSION['uid']=$id;
		 $_SESSION['username']=$name;
		 header('location:dashboard.php');
	}
}
?>
