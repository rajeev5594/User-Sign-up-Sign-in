<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
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
    border-radius: 5px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
body {
    background-image: url('img/img.jpg');
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
a{
  color:white;
}
</style>
<style>
.input-group-addon{color:#ff0000; background-color: #ffffff;}
</style>
</head>
<body>
<div class="login-form">
    <form action="password-reset-api.php" method="post">
        <h2 class="text-center">Forgot Password </h2>
        <p></p>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
       <div class="sign">
            <button type="submit" name="submit" class="btn btn-success">Reset Password</button>
        </div>
    </form>
    </div>
</body>
</html>