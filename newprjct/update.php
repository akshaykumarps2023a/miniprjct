<?php
include "connection.php";
if(isset($_POST['eupdt']))
{   
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mname=$_POST['mname'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $hname=$_POST['hname'];
   $sql="UPDATE `user_registration` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`hname`='$hname',`city`='$city',`state`='$state',`passwd`='$pass',`pno`='$phone',`email`='$email' WHERE id=$id";
   $result=mysqli_query($con,$sql);
   header('location:user_shop.php');
}
?>