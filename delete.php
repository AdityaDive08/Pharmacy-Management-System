<?php
	$conn=mysqli_connect("localhost","root","","products");

	if(isset($_GET['sr'])){
	$sr_new=$_GET['sr'];
	
	$query="delete from `products` where `sr` ='$sr_new'";
	$result=mysqli_query($conn,$query);
	if($result){
		echo"deleted";
	
	}
	else{
		echo"not deleted";
	}
	
	}
?>