<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$database="products";
	$conn = mysqli_connect($servername,$username,$password,$database);
	 if(isset($_POST['submit4'])){
		$pname=$_POST['pname'];
		$img=$_POST['img'];
		$des=$_POST['des'];
		$price=$_POST['pri'];
		$quan=$_POST['quantity'];
		echo $pname,$img,$des;
		$select=mysqli_query($conn,"SELECT * from `cart` where pname='$pname'");
		if(mysqli_num_rows($select)>0){
			echo"already added";
		}
		else{
		$insert_query=mysqli_query($conn,"INSERT into `cart` (sr,pname,image,description,quantity_cart,price) values(NULL,'$pname','$img','$des','$quan','$price')");
		}

	
	
		}

?>