<?php
include "connection.php";
if(!isset($_POST['username']))
{
    $query="SELECT * FROM `login` WHERE email='" . $_POST['email'] . "'";
    $result=mysqli_query($con,$query);
    $count=mysqli_fetch_array($result);
    if($count>0)
    {
        echo "<span style='color:red'> User Already Exist!.</span>";
    }

    else
    {
        echo "<span style='color:red'> User Available!.</span>";
    }
}
?>