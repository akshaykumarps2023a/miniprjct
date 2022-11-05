<?php
include "connection.php";
// $use="SELECT cat_id FROM `category` WHERE  cat_name='$select'";
// $selectuser=mysqli_query($con,$use);
// $rom=mysqli_fetch_row($selectuser);
// // print_r($rom);
// $type=$rom['0'];
$cat_id=$_POST['category'];
$sub_cat_name=$_POST['sub_cat_name'];

$sql="INSERT INTO `sub_category`(`sub_cat_name`, `cat_id`, `status`) VALUES ('$sub_cat_name',$cat_id,0)";

$res=mysqli_query($con,$sql);
$_SESSION['cat_id']= $cat_id;-
header("location:subcat.php");

?>