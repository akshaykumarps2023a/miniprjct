<?php
include "connection.php";

if(isset($_POST['approve']))
{   
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $select=$_POST['type'];
    $use="SELECT type_id FROM `table_user` WHERE type_name='$select'";
    $selectuser=mysqli_query($con,$use);
    $rom=mysqli_fetch_row($selectuser);
    // print_r($rom);
    // exit;
    $type=$rom['0'];
    //$repass=$_POST['confirm-password'];
    $password=$_POST['pass'];
    $pass=md5($password);
    $select="INSERT INTO `login`(`fname`,`lname`,`passwd`, `phone`, `email`, `type_id`, `status`) VALUES('$fname','$lname','$password','$phone','$email','$type','active')";
	$result= mysqli_query($con,$select);
    $select="DELETE FROM `approve` WHERE $id";
	$result= mysqli_query($con,$select);

    header("location:viewuser.php");
}
?>