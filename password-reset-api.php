<?php
use PHPMailer\PHPMailer\PHPMailer;
                    include("dbcon.php");
                    if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
                        $email = $_POST["email"];
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                        if (!$email) {
                            $error .="Invalid email address";
                        } else {
                            $sel_query = "SELECT * FROM `users` WHERE email='" . $email . "'";
                            $results = mysqli_query($con, $sel_query);
                            $row = mysqli_num_rows($results);
                            if ($row == "") {
                                $error .= "User Not Found";
                            }
                        }
                        if ($error != "") {
                            echo $error;
                        } else {

                            $output = '';

                            $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                            $expDate = date("Y-m-d H:i:s", $expFormat);
                            $key = md5(time());
                            $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
                            $key = $key . $addKey;
                            // Insert Temp Table
                            mysqli_query($con, "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");
                            $output.='<p>Please click on the following link to reset your password.</p>';
                            //replace the site url
                            $output.='<p><a href="http://localhost/krishworks_Assg/password-reset-form.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">http://localhost/krishworks_Assg/password-reset-form.php?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
                            $body = $output;
                            $subject = "Password Recovery";
                            $email_to = $email;

                           // autoload the PHPMailer

                            require("vendor/autoload.php");
                            $mail = new PHPMailer();
                            $mail->IsSMTP();
                            $mail->Host = 'smtp.gmail.com'; // Enter your host here
                            $mail->SMTPAuth = true;
                            $mail->Username = "rajeev.662kumar@gmail.com"; // Enter your email here
                            $mail->Password = "kittu_/7845babu"; //Enter your password here                            
                            $mail->AddAddress($email_to);
                            $mail->Port = 587;
                            $mail->IsHTML(true);
                            $mail->From = "rajeev.662kumar@gmail.com";
                            $mail->FromName = "krishworks_Assg";

                            $mail->Subject = $subject;
                            $mail->Body = $body;
                            if (!$mail->Send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                ?>
                                <script>
                                    alert("An Password reset mail has been sent to your emailid !");
                                    window.open('password-reset.php');
                                </script>
                                <?php
                                // echo "An email has been sent";
                            }

                        }
                    }

                    ?>