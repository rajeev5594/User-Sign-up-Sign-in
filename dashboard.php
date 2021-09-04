<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Secret Diary</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<style>
.login-form {
    width: 340px;
    margin: 120px auto;
  	font-size: 15px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
body {
    background-image: url('img.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}
h2,p{
    color: #ffffff;
}
.clearfix,.sign{
   text-align: center; 
   margin-top: 10px;
   padding: 5px;
}
h4,p {
  border: 0px solid green;
  padding: 5px;
}
#diary{
width: 100%;
margin-top: 20px;
}
.right{
text-align:center;
}
</style>
<style>
.input-group-addon{color:#ff0000; background-color: #ffffff;}
</style>
</head>
<body>
    <!-- header section-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <h2 style="color: black;font-size:30px">Krishworks</h2>
            </div>
                <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><font style="color:green;line-height:40px; margin-right: 30px;"><span><strong>Welcome:<?php echo $_SESSION['username']?></strong></span></font>
                </li>
                <li class="nav-item"><a class="nav-link" href="logout.php"><font style="color:blue"><span><strong>Logout</strong></span></font></a>
                </li>
            </ul>
         </div>
    </nav>
    <!-- end header section -->
    <div class="container-fluid">
</div>

</body>
</html>