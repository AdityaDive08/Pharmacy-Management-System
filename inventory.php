<?php
	$conn=mysqli_connect("localhost","root","","products");
	
	if(isset($_POST['buy'])){
		$update_value=$_POST['quantity'];
		$update_sr=$_POST['update_quantity'];
		$update_buy=$_POST['update_quantity_buy'];
		$finale=$update_buy-$update_sr;
		$update_quantity=mysqli_query($conn,"update `cart` set quantity=$finale where sr=$update_sr");
		if($update_quantity){
			echo"sucessfully updated";
			}
		else{
			echo"not updated";
			}
		
	}
	
?>