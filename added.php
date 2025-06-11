
<?php	
if(isset($_GET['remove'])){
	$servername="localhost";
		$username="root";
		$password="";
		$database="products";
		$conn = mysqli_connect($servername,$username,$password,$database);
	$remove_id=$_GET['remove'];
	mysqli_query($conn,"Delete from `cart` where sr=$remove_id");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Save Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="uinterface.css?v=3">
    <link rel="stylesheet" href="pro.css?v=3">
    <link rel="stylesheet" href="list.css?v=3">
</head>
<body>
    <header>
            <div class="navbar">
                <div class="nav-logo">
                    <i class="fa-regular fa-clock" style="margin-bottom:8px;font-size:19px"></i>
                    <h4><p style="font-size:19px;padding-left:4px">Save Time</p></h4>
                </div>
           
                 <form method="post">
                 <div class="nav-search" style="top:-6px;position:relative">
                      <select class="search-select">
                            <option>All</option>
                        </select>
                        <input type="search" name="search" placeholder="Search" class="search-input">
                        <div class="search-icon" style="height:30px; margin:0px;">
                         <button name="submit6"><i class="fa-solid fa-magnifying-glass"></button></form></i></div>
                </div>
                <div class="nav-user" style="top:-6px;position:relative">
                    <i class="fa-regular fa-user" style="font-size:19px"></i>
                    Hello,User
                </div>
                <div class="nav-user "  style="top:-6px;position:relative">
                    <i class="fa-solid fa-location-dot" style="font-size:19px"></i>
                    All Over Nashik
                </div>
	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$database="products";
		$conn = mysqli_connect($servername,$username,$password,$database);
		$select_query=mysqli_query($conn,"SELECT * from `cart`");
		$row_count=mysqli_num_rows($select_query);
	?>
                <div class="nav-cart" style="display:flex">
			
                   <a href="added.php" style="color:white;display:flex"> <i class="fa-solid fa-cart-shopping" style="font-size:19px;top:-5px;position:relative"></i>
                         <p  style="color:white;top:-6px;position:relative">Cart</p></a>
			<span style="background-color:#944E63;top:-6px;position:relative;border-radius:50%;width:18px;display:flex;align-items:center;justify-content:center"><?php echo $row_count;?></span>
                </div>
                <div class="nav-out">
                    <a href="login.php" style="color:white;display:flex"> <i class="fa-solid fa-right-from-bracket" style="font-size:19px;top:-5px;position:relative"></i>
                    <a href="login.php"><p style="color:white;top:-5px;position:relative">Log Out</p></a>
                </div>
            </div>
    </header>

	<?php
	$conn=mysqli_connect("localhost","root","","products");
	if(isset($_POST['update_btn'])){
		$update_value=$_POST['quantity'];
		$update_sr=$_POST['update_quantity'];
		
		$update_quantity=mysqli_query($conn,"update `cart` set quantity_cart=$update_value where sr=$update_sr");
		if($update_quantity){
			echo"<div style='background-color:#F2C18D;align-items:center;display:flex;justify-content:center;width:100%'>sucessfully updated</div>";
			}
		else{
			echo"not updated";
			}
		
	}
?>

<table style="margin-left:230px">

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
		echo"
		
			<tr>
				<th>Sr.no</th>
				<th>Product Name</th>
				<th>Product Image</th>
				<th>Product Description</th>
				<th>Price</th>
				<th>quantity</th>
				<th>Total Price</th>
				<th>Remove</th>
			</tr>
	
			<tr>
		";
	
	while($fetch=mysqli_fetch_assoc($select_cart)){
	
	
?>

	<div class="list" style="margin-left:255px">		
		<tr>
			<td><?php echo $num;?></td>
			<td><?php echo $fetch['pname'];?></td>
			<td><img src="<?php echo $fetch['image'];?>" height="70px" width="80px"></td>
			<td><?php echo $fetch['description'];?></td>
			<td>Rs.<?php echo number_format($fetch['price'])?>/-</td>
			<td>
			<form action="" method="post">
				<div>
					<input type="hidden" value="<?php echo $fetch['sr'];?>" name="update_quantity">
					<input type="number" min="1" max="10" value="<?php echo $fetch['quantity_cart'];?>" name="quantity">
					<input type="submit" value="update" name="update_btn">
				</div>
			</form>
			</td>
			<td>Rs.<?php echo $total=number_format($fetch['price']*$fetch['quantity_cart'])?>/-</td>

		
			<td><a href="added.php?remove=<?php echo $fetch['sr']; ?>" onclick="return confirm('Are you sure')" class="delete">remove</a></td>
		</tr>



	
	
<?php
	$num++;
	$grand_total=$grand_total+($fetch['price']*$fetch['quantity_cart']);
		
}
}
else{
	echo"no produts";
}	
?>



<!--	
	<td><?php echo $sr_new; ?></td>
	<td><?php echo $_GET['nm']; ?></td>
	<td><?php echo  $_GET['nm']; ?></td>
	<td><?php echo  $_GET['des']; ?></td>
	<td><a href="update.php?sr=<?php echo $row['sr']; ?>&nm=<?php echo $row['product_title']; ?>&img=<?php echo $row['image']; ?>&des=<?php echo $row['product_detail']; ?>" class="edit"style='width:52px'>added</a></td>
	<td><a href="list.php?sr=<?php echo $fetch['sr']; ?>" class="delete">remove</a></td>

	</tr>
-->
<?php                                                                                                                                          

?>
</table></div>
<div style="display:flex;width:850px;height:33px;display:flex;margin-left:230px;background-color:#77B0AA;margin-top: 3px;margin-bottom: 3px;height: 33px;">
<div style="display:flex;margin-left:113px;margin-right:150px;background-color:#DDDDDD;align-items:center;margin-top: 3px;margin-bottom: 3px;"><a href="uinterface.php" >Continue Shopping</a></div>
<div style="background-color:#DDDDDD;align-items:center;display:flex;margin-top: 3px;margin-bottom: 3px;height: 24px;"> Grand Total:<?php echo $grand_total;?></div>
<div style="margin-left:165px;background-color:#DDDDDD;align-items:center;display:flex;margin-top: 3px;margin-bottom: 3px;height: 24px;"><a href="pay1.php">Payment</a></div>
</div>


</body></html>