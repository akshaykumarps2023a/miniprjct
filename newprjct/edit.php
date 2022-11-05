<?php
include "connection.php"; 
$email=$_SESSION['email'];
$sql="SELECT * FROM `login` WHERE email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<html>
<head>
<link rel="stylesheet" href="a.css">
</head>
    <body>
    <center><h2>DTEAILS</h2></center>
    <body>
    <center>
    <form action="update.php" method="POST">
    <table id="t" >
            <tr>
                <td>
                    FirstName:
                </td>
                <td>
                <input type="text" id="fname" name="fname"value="<?php echo $row['fname'];?>">
                </td>
                <td>
                    Middle Name:
                </td>
                <td>
                <input type="text" id="mname" name="mname" value="<?php echo $row['mname'];?>">
                </td>
                </tr>
                <tr>
                <td>
                    LastName:
                </td>
                <td>
                <input type="text" name="lname" value="<?php echo $row['lname'];?>">
                </td>
                <td>
                    Email:
                </td>
                <td>
                <input type="text" name="email" value="<?php echo $row['email'];?>">
                </td>
                </tr>
                <tr>
                <td>
                    House Name:
                </td>
                <td>
                <input type="text" name="hname" value="<?php echo $row['hname'];?>">
                </td>
            
                <td>
                    Location:
                </td>
                <td>
                <input type="text" name="city" value="<?php echo $row['city'];?>">
                </td>
                </tr>
                <tr>
                <td>
                    City:
                </td>
                <td>
                <input type="text" name="city" value="<?php echo $row['city'];?>">
                </td>
                <td>
                    State:
                </td>
                <td>
                <input type="text" name="state" value="<?php echo $row['state'];?>">
                </td>
                </tr>
                <tr>
                <td>
                Pincode:
                </td>
                <td>
                <input type="text" name="pass" value="<?php echo $row['pin'];?>">
                </td>
                <td>
                Phone:
                </td>
                <td>
                <input type="text" name="phone" value="<?php echo $row['phone'];?>">
                </td>
            </tr>
            <tr>
    <td colspan="4"><center> 
    <input type="hidden" name="id" value="<?php echo $row['login_id'];?>">
    <input type="submit" value="update" name="eupdt">
    </center></td>
</tr>
</table>
</center>
</form>
</body>
</html>