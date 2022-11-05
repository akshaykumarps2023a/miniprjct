<?php
include 'connection.php';
// if(!empty($_SESSION['email']))
// {
//     echo $_SESSION['email'];
// }
$pass_value = $_SESSION['email'];
// echo $pass_value;
if(isset($_POST['submit_reset'])){
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $password=md5($pass);
    if($pass != $cpass){
        echo '<script> alert ("Password doesnot match");</script>';
	    echo'<script>window.location.href="updatePass.php";</script>';
    }
    else{
        $insert = "UPDATE `login` SET `passwd`='$password',`otp_code`='0'  WHERE `email`='$pass_value'";
        mysqli_query($con,$insert);
        echo '<script> alert ("Password updated successfully");</script>';
	    echo'<script>window.location.href="login.php";</script>';
    }
}
?>