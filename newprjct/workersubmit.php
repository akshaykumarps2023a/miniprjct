<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    // $middle=$_POST['mname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    //$house=$_POST['hname'];
    //$city=$_POST['city'];
    // $state=$_POST['state'];
    $email = $_POST['email'];
    $type = $_POST['select'];

    $job = $_POST['job'];
    // print_r($rom);
    //$type = $rom['0'];
    $role=$_POST['job'];
    $repass = $_POST['confirm-password'];
    $password = $_POST['password'];
    $pass = md5($password);
    $select = "SELECT * FROM `login` WHERE email='$email' and status='active'";

    // echo $select;
    // exit;
    $result = mysqli_query($con, $select);
    //$row=mysqli_fetch_array($result);
    // $d=mysqli_fetch_assoc($result);
    // echo $d;
    // echo $row;
    $no = mysqli_num_rows($result);
    if ($no > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("user already exist")';
        echo '</script>';
        echo '<button type="button" onclick="history.back();">Back</button>';
    } else {
        $select1 = "SELECT * FROM `approve` WHERE email='$email'";
        $result1 = mysqli_query($con, $select1);
        $no1 = mysqli_num_rows($result1);
        if ($no1 > 0) {
            echo '<script type="text/javascript">';
            echo 'alert("user already exist")';
            echo '</script>';
            echo '<button type="button" onclick="history.back();">Back</button>';
        } else {
            if ($type == 2) {
                $sql = "INSERT INTO `approve`(`fname`,`lname`,`pass`, `phone`, `email`,`type_id`) VALUES ('$fname','$lname','$pass','$phone','$email','$type')";
                $res = mysqli_query($con, $sql);
                if ($res) {
                    echo '<script type="text/javascript">';
                    echo ' alert("Inserted to the Database Sucessfully")';
                    echo '</script>';
                    header("location:login.php");
                }
            }
            else if ($type == 4) {
                $sql = "INSERT INTO `approve`(`fname`,`lname`,`pass`, `phone`, `email`,`type_id`) VALUES ('$fname','$lname','$pass','$phone','$email','$type')";
                $sq = "INSERT INTO `approveworker`(`role`, `type_id`,`email`) VALUES ('$role','$type','$email')";
                $res = mysqli_query($con, $sql);
                $re = mysqli_query($con, $sq);
                if ($res) {
                    echo '<script type="text/javascript">';
                    echo ' alert("Inserted to the Database Sucessfully")';
                    echo '</script>';
                    header("location:login.php");
                }
            }
        }
    }
}
