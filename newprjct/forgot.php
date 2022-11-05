<?php
include 'connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

if(isset($_POST['send_otp']))
{
    $mail = $_POST['email'];
    $checkMail = "SELECT * FROM login WHERE email='$mail'";
    $result = mysqli_query($con,$checkMail);
    $rsltCheck = mysqli_num_rows($result);
    $fetch = mysqli_fetch_array($result);
    if($rsltCheck>0)
    {
        $_SESSION['email'] = $fetch['email'];
        $email = $_SESSION['email'];
        $code = rand(999999, 111111);
        $insert_otp = "UPDATE `login` SET `otp_code`='$code' WHERE `email`='$email'";
        $data_check = mysqli_query($con, $insert_otp);
        if($data_check)
            {   
                $mail = new PHPMailer(true);
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   =  true;                                   //Enable SMTP authentication
                $mail->Username   = 'akshaykumarps2023a@mca.ajce.in';                     //SMTP username
                $mail->Password   = 'Akshaykumar123@123';                               //SMTP password
                $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom('akshaykumarps2023a@mca.ajce.in');
                $mail->addAddress($email);     //Add a recipient
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'OTP DO NOT SHARE';
                $body = "Need to reset your password? <br><br> Do NOT SHARE This OTP! <br><br> <strong>$code</strong>";
                $mail->Body    = $body;
               $mail->AltBody = strip_tags($body);
    
                    if($mail->send())
                    {
                        echo '<script> alert ("OTP sent successfully");</script>';
                        echo'<script>window.location.href="enterotp.php";</script>';
                    }
                    else
                    {
                        echo '<script> alert ("OTP sent failed");</script>';
                        echo'<script>window.location.href="forgot.php";</script>';
                    }
            }
            }
            else
            {
                echo '<script> alert ("The user doesnot exist!");</script>';
                echo'<script>window.location.href="forgotpassword.php";</script>';
            }
}
?>