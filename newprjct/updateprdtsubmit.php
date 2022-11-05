<?php
include "connection.php";
$prdtid=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];
$quantity=$_POST['quantity'];
$sql="UPDATE `product` SET `name`='$name',`price`='$price',`details`='$details',`quantity`='$quantity' where prdt_id=$prdtid";
$res=mysqli_query($con,$sql);
header('location:user_shop.php');
?>