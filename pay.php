<?php
	$conn=mysqli_connect("localhost","root","","products");
	if(isset($_POST['paynow'])){
		$uname=$_POST['name'];
		$uadd=$_POST['address'];
		$uemail=$_POST['email'];

		
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

	
		$sql=mysqli_query($conn,"insert into `payment` (sr,user_name,user_add,user_email) values(NULL,'$uname','$uadd','$uemail')");
		if($sql){
			header("location:display.html");
		}
	else{
		echo"ubnkc";
}

	
	}
?>


<!DOCTYPE>
<html>
  <head>
    <title>Payment Form</title>
  </head>
  <body bgcolor="lightblue">
    <form action="" method="post">
      <h1>Payment Form</h1>
      <p>Pharmacy Managment System*</p>
      <h2>Contact information</h2>
      <p>Name:*<input type="text" name="name" required=""></p>
      <fieldset>
        <legend>Gender*</legend>
      <p>
        Male <input type="radio" name="gender" id="male" required="">
        Feamle <input type="radio" name="gender" id="Feamle" required="">
        </p>
        </fieldset>
    <p>Address: <textarea name="address" id="address" rows="6" cols="80"></textarea></p>
     <p>Email:* <input type="email" name="email" id="email" value="" required="" /></p> 
     <p>Pincode:* <input type="number" name="pincode" id="pincode" value="" required="" /></p>
    <hr>
    <h2>Payment Information</h2>
    <p>Card Type:*
      <select name="card_type" id="card_type" required="">
        <option value="">---selecr a Card type--</option>
        <option value="visa">Visa</option>
        <option value="rupy">Rupay</option>
        <option value="master card">Master Card</option>        
      </select>    
    </p>
    <p>
      Card Number *<input type="number" name="card Number" id="Card Number" required="">
    </p>
    <p>
      Expiration Date:* <input type="date" name="exp_date" id="exp_date" required="">
    </p>
    <p>
      CVV * <input type="password" name="CVV" id="CVV" required="">
    </p>
    <input type="submit" name="paynow" id="" value="Pay Now" />
   
    </form>
  </body>
</html>