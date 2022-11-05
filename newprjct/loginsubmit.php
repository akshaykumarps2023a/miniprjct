<?php
include "connection.php";

if(isset($_POST['submit']))
{   
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $pass=md5($password);
    $select=$_POST['loginvalue'];
    $use="SELECT type_id FROM `table_user` WHERE type_name='$select'";
    $selectuser=mysqli_query($con,$use);
    $rom=mysqli_fetch_row($selectuser);
    // print_r($rom);
    $type=$rom['0'];
    echo $sql="SELECT * FROM `login` WHERE email='$email' && passwd='$pass'and status='active' && type_id = $type";
    //$sq="SELECT * FROM `login` WHERE email='$email' && passwd='$pass'&& type_id = 1";
    $result=mysqli_query($con,$sql);
    // $res=mysqli_query($con,$sq);
    //echo $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    // $coun=mysqli_num_rows($res);
    if($count==1 && $type==2)
    {
        $_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['pass'];
        echo "session variable are created";
        header('location:user_shop.php');
    }
    else if($count==1 && $type==1)
    {
        $_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['pass'];
        header('location:dashadmin\viewuser.php');
    }
    else if($count==1 && $type==3)
    {
        $_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['pass'];
        header('location:contractor.php');
    }
    else if($count==1 && $type==4)
    {
        $_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['pass'];
        header('location:worker_login.php');
    }
    else 
    {
        echo '<script type="text/javascript">';
        echo ' alert("Login Failed")';
        echo '</script>';
        header("location:login.php");
    }
}
?>