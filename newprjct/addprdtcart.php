<?php
include "connection.php";
$email=$_SESSION['email'];
$user="SELECT login_id FROM `login` WHERE email='$email'";
$result=mysqli_query($con,$user);
$ro=mysqli_fetch_array($result);
$login_id=$ro['login_id'];
$prdtid=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];
$quantity=$_POST['quantity'];
$sql="INSERT INTO `cart`(`prdt_name`, `quantity`, `price`, `image`, `prdt_id`, `login_id`) VALUES ('$name','$quantity','$price','$image','$prdtid','$login_id')";
$res=mysqli_query($con,$sql);
header('location:user_shop.php');
?>