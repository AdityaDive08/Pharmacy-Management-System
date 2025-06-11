<html><body>
<div class='col-md-4'>
        <div class='box1 box' style='padding-left:0px; height:487px'>
	<form action='' method='post'>
           <div class='box-content'>
                 <center><h2>$product_title</h2></center>
                 <div class='box-img' style='border-radius:5px' ><img src='$image' height='300px' width='315px' style='border-radius:5px' ></div><br>
		<div>$product_detail</div>
		<div>Price:$price</div>
	
		<?php
		$conn=mysqli_connect('localhost','root','','products');
		$select_product='select * from products';
		$result_g=mysqli_query($conn,$select_product);
		if($row_quantity=mysqli_fetch_assoc($result_g)){
	
			$quantity_product=$row_quantity['quantity'];
			if($quantity_product>0){	
	
		?>
		<div class='quantity'><input type='number' name='quantity' min='1' max='10' style='width:314px' ></div>
                 <div class='cart border'>
		<input type='hidden' name='pname' value='$product_title'>
		<input type='hidden' name='img' value='$image'>
		 <input type='hidden' name='des' value='$product_detail'> 
		<input type='hidden' name='pri' value='$price'>
                    <center><i class='fa-solid fa-cart-shopping'></i>
                        <button name='submit4'>Add to Cart</button></center>
	
		<?php
		}
		else{
			echo'not available';
		}
}

		?>
                 </div>
</body></html>