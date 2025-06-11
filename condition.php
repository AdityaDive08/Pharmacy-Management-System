<?php
	$conn=mysqli_connect("localhost","root","","products");
	$select="select pro.*,cr.pname,quantity_cart from products pro,cart cr";
	$result_q=mysqli_query($conn,$select);
	while($row=mysqli_fetch_assoc($result_q)){
		$product=$row['product_title'];
		$pname=$row['pname'];
		$quantity=$row['quantity'];
		$quantity_cart=$row['quantity_cart'];
		
		if($pname==$product){
			
			$final_quantity=$quantity-$quantity_cart;
			echo $final_quantity;
			$update_quantity=mysqli_query($conn,"update `products` set `quantity`='$final_quantity' where `product_title`='$pname'");
						echo $update_quantity;
						
				}
			else{
				
				}
				
		
}
?>