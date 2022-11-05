<?php
include "connection.php";

$cat_name=$_POST['cat_name'];

$sql="INSERT INTO `category`(`cat_name`) VALUES ('$cat_name')";

$res=mysqli_query($con,$sql);
//$_SESSION['cat_id']= $cat_id;
header("location:addcat.php");

?>