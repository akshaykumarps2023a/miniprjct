<?php
include "connection.php";
echo"sgesdg";
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
    $select="SELECT * from user_registration WHERE email='$email'";
    //echo $select;
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
        echo $sql="INSERT INTO `user_registration`(`fname`, `lname`, `email`, `phone`, `pass`,'type_id') VALUES ('$fname','$lname','$pass','$phone','$email','$type')";
        $res=mysqli_query($con,$sql);
        if($res)
        {
        echo '<script type="text/javascript">';
        echo ' alert("Inserted to the Database Sucessfully")';
        echo '</script>';
        header("location:a.html");
        }
        else
        {
        echo ' alert("failed")';
        }
  }
}
?>