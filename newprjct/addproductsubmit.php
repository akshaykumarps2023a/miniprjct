<?php
include "connection.php";

// $target_dir = "image/";
// echo $target_file = $target_dir . basename($_FILES["img"]["name"]);
// $imageFileType = strtolower(pathinfo($target_file));

if(isset($_POST['submit']))
{   
    $sub_cat_id=$_POST['sub_cat_id'];
    $pname=$_POST['pname'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];

    $quantity=$_POST['quantity']; 

    $image=$_FILES['img']['name'];
    print_r($image);
   // move_uploaded_file($_FILES['test_img']['tmp_name'],"imgs/".$_FILES['test_img']['name']);

  //   $select="SELECT * FROM `product` WHERE name='$pname'";

	//   $result= mysqli_query($con,$select);

  //   $no=mysqli_num_rows($result);
  //   $check = getimagesize($_FILES["img"]["tmp_name"]);
  //   if($check !== false) {
  //   echo "File is an image - " . $check["mime"] . ".";
  //   $uploadOk = 1;
  // } 
  // else 
  // {
  //   echo "File is not an image.";
  //   $uploadOk = 0;
  // }
	// if($no > 0)
	// {
  //     echo '<script type="text/javascript">';
  //     echo 'alert("Product already exist")';
  //     echo '</script>';
  //     echo '<button type="button" onclick="history.back();">Back</button>'; 
  //   }   
      {
      move_uploaded_file($_FILES['img']['tmp_name'],"images/".$_FILES['img']['name']);
      $sql="INSERT INTO `product`(`name`, `price`, `details`, `image`, `quantity`,`sub_cat_id`) VALUES ('$pname','$price','$desc','$image','$quantity','$sub_cat_id')";
      $res=mysqli_query($con,$sql);
      if($res)
      {
        echo '<script type="text/javascript">';
        echo ' alert("Inserted to the Database Sucessfully")';
        echo '</script>';
        $_SESSION['sub_cat_id']=$sub_cat_id;
        header("location:product.php");
      }
    }      
  }
?>