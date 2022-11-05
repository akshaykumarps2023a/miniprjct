<?php
include "connection.php";

if(isset($_POST['submit']))
{   
    $fname=$_POST['fname'];
    // $middle=$_POST['mname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    //$house=$_POST['hname'];
    //$city=$_POST['city'];
    // $state=$_POST['state'];
    $email=$_POST['email'];
    $type=2;
    $repass=$_POST['confirm-password'];
    $password=$_POST['password'];
    $pass=md5($password);
    $select="SELECT * FROM `login` WHERE email='$email'";
    // echo $select;
    // exit;
	  $result= mysqli_query($con,$select);
    //$row=mysqli_fetch_array($result);
    // $d=mysqli_fetch_assoc($result);
    // echo $d;
    // echo $row;
  echo $no=mysqli_num_rows($result);
	if($no > 0)
	{
      echo '<script type="text/javascript">';
      echo 'alert("user already exist")';
      echo '</script>';
      echo '<button type="button" onclick="history.back();">Back</button>';    
  }
  else
  {
        echo $sql="INSERT INTO `approve`(`fname`,  `lname`,`passwd`, `pno`, `email`,`type_id`) VALUES ('$fname','$lname','$pass','$phone','$email','$type')";
        $res=mysqli_query($con,$sql);
        if($res==true)
        {
        echo '<script type="text/javascript">';
        echo ' windows.alert("Inserted to the Database Sucessfully")';
        echo '</script>';
        header("location:signup.php");
        }
        else
        {
        echo ' alert("failed")';
        }
  }
}
?>