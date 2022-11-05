<?php
include "connection.php";

echo $work_cat_name=$_POST['worker_cat_name'];
$a = $_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'], "work_img/" . $a);
$sql="INSERT INTO `worker_category`( `worker_cat`, `image`) VALUES ('$work_cat_name','$a')";

$res=mysqli_query($con,$sql);
//$_SESSION['cat_id']= $cat_id;
header("location:addworkercat.php");

?>