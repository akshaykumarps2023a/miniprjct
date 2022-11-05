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
    echo $select=$_POST['select'];
    exit;
    $use="SELECT type_id FROM `table_user` WHERE type_name='$select'";
    $selectuser=mysqli_query($con,$use);
    $rom=mysqli_fetch_row($selectuser);
    // print_r($rom);
    $type=$rom['0'];
    $repass=$_POST['confirm-password'];
    $password=$_POST['password'];
    $pass=md5($password);
    $select="SELECT * FROM `login` WHERE email='$email' and status='active'";

    // echo $select;
    // exit;
	  $result= mysqli_query($con,$select);
    //$row=mysqli_fetch_array($result);
    // $d=mysqli_fetch_assoc($result);
    // echo $d;
    // echo $row;
  $no=mysqli_num_rows($result);
	if($no > 0)
	{
      echo '<script type="text/javascript">';
      echo 'alert("user already exist")';
      echo '</script>';  
      echo '<button type="button" onclick="history.back();">Back</button>';    
  }
  else
  {
      $select1="SELECT * FROM `approve` WHERE email='$email'";
      $result1= mysqli_query($con,$select1);
      $no1=mysqli_num_rows($result1);
      if($no1 > 0)
      {  
        echo '<script type="text/javascript">';
        echo 'alert("user already exist")';
        echo '</script>'; 
        echo '<button type="button" onclick="history.back();">Back</button>';
      }       
      else
      {
      $sql="INSERT INTO `approve`(`fname`,`lname`,`pass`, `phone`, `email`,`type_id`) VALUES ('$fname','$lname','$pass','$phone','$email','$type')";
      $res=mysqli_query($con,$sql);
      if($res)
      {
        echo '<script type="text/javascript">';
        echo ' alert("Inserted to the Database Sucessfully")';
        echo '</script>';
        header("location:login.php");
      }
    }   
  }
}
?>