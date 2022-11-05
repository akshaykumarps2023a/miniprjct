<?php
	include 'connection.php';
	echo $category_id=$_POST["category_id"];
	
	$sql="SELECT * FROM sub_category where cat_id=$category_id";
	$result = mysqli_query($con,$sql);
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["sub_cat_id"];?>"><?php echo $row["sub_cat_name"];?></option>
<?php
}
?>