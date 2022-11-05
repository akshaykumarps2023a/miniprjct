<?php
include "connection.php";
$sql="SELECT * FROM `approve`";
$res=mysqli_query($con,$sql);
?>
<html>
    <head>
    </head>
    <body>
        <center>
        <table border="1">
            <tr>
                 <td>
                     id
                </td>
                <td>
                    First name
                </td>
                <td>
                    Middle name
                </td>
                <td>
                    LastName
                </td>
                <td>
                    Housename
                </td>
                <td>
                    city
                </td>
                <td>
                    State
                </td>
                <td>
                    Phone
                </td>
                <td>
                    email
                </td>
                <!-- <td>
                    Update
                </td>
                <td>
                    Delete
                </td> -->
              
            </tr>
            <?php
            while($row=mysqli_fetch_array($res))
            {
                ?>
                    <tr>
                    <th scope="row"><?php echo $row['approve_id']; ?></th>
                    <td><?php echo $row['fname']; ?></td>
                    <!-- <td><?php //echo $row['mname'] ?></td> -->
                    <td><?php echo $row['lname']; ?></td>
                    <!-- <td><?php //echo $row['hname'] ?></td> -->
                    <!-- <td><?php //echo $row['city'] ?></td>
                    <td><?php //echo $row['state'] ?></td> -->
                    <td><?php echo $row['phone']; ?><input type="hidden" value="<?php echo $row['phone']; ?>" name="phone"></td>
                    <td><?php echo $row['email']; ?></td>
                    <?php
                    $type=$row['type_id'];
                    $s="SELECT * FROM `table_user` where type_id='$type'";
                    $r=mysqli_query($con,$s);
                    while($ro=mysqli_fetch_array($r))
                    {
                    ?>
                    <td><?php echo $ro['type_name'] ?></td>
                    <?php
                    }
                    ?>
                    <form action="approve.php" method="POSt">
                    <input type="hidden" value="<?php echo $row['fname']; ?>" name="fname">
                    <input type="hidden" value="<?php echo $row['lname']; ?>" name="lname">
                    <input type="hidden" value="<?php echo $row['email']; ?>" name="email">
                    <input type="hidden" value="<?php echo $row['phone']; ?>" name="phone">
                    <td><input type="hidden" name="id" value="<?php echo $row['approve_id'];?>">
                    <input type="submit" value="approve" name="approve"></td>
                    </form>
                    <!-- <form action="edit.php" method="post">
                    <td><input type="hidden" name="id" value="<?php //echo $row['approve_id'];?>">
                    <input type="submit" value="edit" name="edit"></td>
                    </form> -->
                    <form action="deletesubmit.php" method="post">
                    <td><input type="hidden" name="id" value="<?php echo $row['approve_id'];?>">
                    <input type="submit" value="delete"name="delete"></td>
                    </form>
                </tr>
                <?php
                }
                ?>
        </table> 
</center>
    </body>
    
</form>
</html>
