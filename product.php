<html><head><link rel="stylsheet" href="add.css"></head></html>

<?php
	$conn=mysqli_connect("localhost","root","","products");
	
	if(isset($_POST["submit1"])){
		$product_title=$_POST['product'];
		$image=$_POST['image'];
		$product_detail=$_POST['productdetail'];
		$price=$_POST['productprice'];
		$pstock=$_POST['productstock'];
		$sql="INSERT INTO `products` (`sr`, `product_title`,`image`, `product_detail`,`price`,`quantity`) VALUES (NULL, '$product_title', '$image', '$product_detail','$price','$pstock')";
		$result_insert=mysqli_query($conn,$sql);
			if($result_insert){
				echo"<div class='alert'>Sucessfully Uploaded the Data</div>";
			}
			else{
				echo"<div class='redalert'>Sucessfully Uploaded the Data</div>";
			}
	
	}
?>