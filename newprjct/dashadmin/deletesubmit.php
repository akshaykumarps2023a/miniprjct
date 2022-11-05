<?php
include "connection.php";

if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $sql="DELETE FROM `approve` WHERE approve_id= $id";
    $result=mysqli_query($con,$sql);
    header("location:viewuser.php");
}
?>