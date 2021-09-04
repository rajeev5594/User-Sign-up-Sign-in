<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Reset Password</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body style="background-image: url('img/img.jpg');background-repeat: no-repeat;background-size: 100% 100%;background-attachment: fixed;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
<?php
                    include('dbcon.php');
                    if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"] == "reset") && !isset($_POST["action"])) {
                        $key = $_GET["key"];
                        $email = $_GET["email"];
                        $curDate = date("Y-m-d H:i:s");
                        $query = mysqli_query($con, "SELECT * FROM `password_reset_temp` WHERE `key`='" . $key . "' and `email`='" . $email . "';");
                        $row = mysqli_num_rows($query);
                        if ($row == "") {
                            $error .= '<h2><b>Invalid Link</b></h2>';
                        } else {
                            $row = mysqli_fetch_assoc($query);
                            $expDate = $row['expDate'];
                            if ($expDate >= $curDate) {

                            ?> 
                            <h2 style="color:white; margin-top: 50px;">Reset Password</h2>   
                                <form method="post" action="" name="update">

                                    <input type="hidden" name="action" value="update" class="form-control"/>


                                    <div class="form-group">
                                        <label style="color:white;margin-top: 30px;"><strong>Enter New Password:</strong></label>
                                        <input type="password"  name="pass1" value="update" class="form-control" autocomplete="off"/>
                                    </div>

                                    <div class="form-group">
                                        <label style="color:white;"><strong>Re-Enter New Password:</strong></label>
                                        <input type="password"  name="pass2"  value="update" class="form-control"/>
                                    </div>
                                    <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                                    <div class="form-group">
                                        <input type="submit" id="reset" value="Reset Password"  class="btn btn-primary"/>
                                    </div>

                                </form>
                                <?php
                            } else {
                                $error .= "<h2>Link Expired</h2>>";
                            }
                        }
                        if ($error != "") {
                            echo "<div class='error'>" . $error . "</div><br />";
                        }
                    }


                    if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
                        $error = "";
                        $pass1 = mysqli_real_escape_string($con, $_POST["pass1"]);
                        $pass2 = mysqli_real_escape_string($con, $_POST["pass2"]);
                        $email = $_POST["email"];
                        $curDate = date("Y-m-d H:i:s");
                        if ($pass1 != $pass2) {
                            $error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
                        }
                        if ($error != "") {
                            echo $error;
                        } else {

                            $pass1 = md5($pass1);
                            // mysqli_query($con, "UPDATE `users` SET `password` = '" . $pass1 . "', `trn_date` = '" . $curDate . "' WHERE `email` = '" . $email . "'");
                            mysqli_query($con, "UPDATE `users` SET `password` = '" . $pass1 . "'WHERE `email` = '" . $email . "'");


                            mysqli_query($con, "DELETE FROM `password_reset_temp` WHERE `email` = '$email'");

                            // echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>';
                            ?>
                            <script>
                                alert("Congratulations! Your password has been updated successfully.");
                                window.open('login.php');
                            </script>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>


    </body>
</html>
