<?php

include 'connection.php';

if($_POST['id']){

  $id =$_POST['id'];

  $act = "UPDATE login SET status='active' WHERE login_id='$id'";

  $act_run = mysqli_query($con,$act);

  if($act_run){

    echo '<script>alert("Activated");</script>';

    echo '<script>window.location.href="registreduser.php"</script>';

  }

}

?>