<?php
include "connection.php";

if(isset($_POST['sub_cat_id']))
{
    $id=$_POST['sub_cat_id'];
    $cat_id=$_POST['cat_id'];
    $sql="DELETE FROM `sub_category` WHERE sub_cat_id = $id";
    $result=mysqli_query($con,$sql);

    $_SESSION['cat_id']= $cat_id;

    header("location:subcat.php");
}
?>