<?php
include "connection.php";

if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $sql="DELETE FROM `product` WHERE prdt_id = $id";
    $result=mysqli_query($con,$sql);

    header("location:updateprdt.php");
}
?>