<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$database="products";
	$conn = mysqli_connect($servername,$username,$password,$database);
	 
	$select_cart=mysqli_query($conn,"select * from `cart`");
	$num=1;
	$grand_total=0;
	if(mysqli_num_rows($select_cart)>0){
		
	
	while($fetch=mysqli_fetch_assoc($select_cart)){
	
	
?>

			<form action="" method="post">
				<div>
					<input type="hidden" value="<?php echo $fetch['sr'];?>" name="update_quantity">
					<input type="number" min="1" max="10" value="<?php echo $fetch['quantity'];?>" name="quantity">
					<input type="submit" value="update" name="update_btn">
				</div>
			</form>
<?php
}
}
?>