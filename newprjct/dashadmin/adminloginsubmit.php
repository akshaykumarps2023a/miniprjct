<?php
include "connection.php";

if(isset($_POST['submit']))
{   
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $pass=md5($password);
    $sql="SELECT * FROM `adminlogin` WHERE email='$email' && password='$pass'";
    $result=mysqli_query($con,$sql);
    //echo $row=mysqli_fetch_array($result);
    echo $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['pass'];
        echo "session variable are created";
        header('location:viewuser.php');
    }
    else
    {
        echo '<script type="text/javascript">';
        echo ' alert("Login Failed")';
        echo '</script>';
        header("location:adminlogin.php");
    }
}
?>