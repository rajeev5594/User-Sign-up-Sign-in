<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>UserSign-up/Sign-In</title>
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
    background-image: url('img/img.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}
h3,p{
    color:#ffffff;
}
.clearfix,.sign{
    
   /*text-align: center; */
   margin-top: 10px;
   padding: 15px;
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
    <form action="signup_api.php" method="post">
        <h3 class="text-center">User Sign-Up/Sign-in form</h3>
        <p></p>
        <p class="text-center">Interested ? Sign up now.</p>      
         <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="User name" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div> 
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required=""> 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="sign">
            <!-- <input type="submit" class="btn btn-success" name="submit" value="submit"/> -->
            <button type="submit" class="btn btn-success" name="submit">Sign up</button>
        </div>   
        <div class="clearfix">
            <!-- <label style="color:#ffffff; margin-left:50px;"><input type="checkbox"> Stay loggd in <e/label> -->
                <p style="margin-left:70px; font-size: 20px;"><a href="password-reset.php"><b>Forgot Password</b></a></p>
        </div>     
        </div>
    </form>
        <p class="text-center" style="padding: 10px; font-size: 20px;"><a href="login.php"><b>Already Sign-up? Log in Here</b></a></p>
</div>
</body>
</html>