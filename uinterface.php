

<!DOCTYPE html>
<html>
<head>
    <title>Save Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="uinterface.css?v=4">
    <link rel="stylesheet" href="pro.css?v=4">
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
		
		$select=mysqli_query($conn,"SELECT * from `cart` where pname='$pname'");
		if(mysqli_num_rows($select)>0){
			echo"<div style='height:30px;width:100%;background-color:green;color:white'>already added</div>";
		}
		else{
		$insert_query=mysqli_query($conn,"INSERT into `cart` (sr,pname,image,description,quantity_cart,price) values(NULL,'$pname','$img','$des','$quan','$price')");
		echo"sucessfull";
		}

	
	
		}
	if(isset($_POST['submit5'])){
		echo"<div style='height:30px;width:100%;background-color:green;color:white'>Not Available</div>";
	}

?>




<div class='grid' style="width:1600px; align-items:center; background-color:#EAECCC">
<?php
       	$conn = mysqli_connect("localhost","root","","products");
	
		if(isset($_POST['submit6'])){
		$search=$_POST['search'];
		$result_search=mysqli_query($conn,"SELECT * from `products` where product_title='$search'");
			if($result_search){
					if(mysqli_num_rows($result_search)>0){
						$row_porduct=mysqli_fetch_assoc($result_search);
						$product_title=$row_porduct['product_title'];
						$image=$row_porduct['image'];
						$product_detail=$row_porduct['product_detail'];
						$price=$row_porduct['price'];
						$quantity_product=$row_porduct['quantity'];
						echo"
							 <div class='col-md-4'>
        <div class='box1 box' style='padding-left:0px; height:487px;font-family:Arial,sans-serif'>
	<form action='' method='post'>
           <div class='box-content'>
                 <center><h2 >$product_title</h2></center>
                 <div class='box-img' style='border-radius:5px' ><img src='$image' height='300px' width='315px' style='border-radius:5px' ></div><br>
		<div style='font-family: Arial, Helvetica, sans-serif;font-size:15px'>$product_detail</div>
		<div style='font-family: 'Lucida Console', 'Courier New', monospace'>Price:Rs.$price</div>
		<div class='quantity'><input type='number' name='quantity' min='1' max='10' style='width:314px;border-radius:5px' ></div>
                 <div class='cart border'>
		<input type='hidden' name='pname' value='$product_title'>
		<input type='hidden' name='img' value='$image'>
		 <input type='hidden' name='des' value='$product_detail'> 
		<input type='hidden' name='pri' value='$price'>
               
                        <button name='submit4' style='background-color: #59B4C3;border: 0px; width:312px'>
				<center><i class='fa-solid fa-cart-shopping'></i>
				Add to Cart</button></center>
			</div>
                       
            </div>
	</form>
        </div>
        
 </div>";
							
						}
					else{
						echo"unsucess";
						}
				}
			}

?>


	<div class='row'>
<?php
	include"product.php";
	$select_q="Select * from products";
	$result_q=mysqli_query($conn,$select_q);
	while($row=mysqli_fetch_assoc($result_q)){
	
	$product_title=$row['product_title'];
	$image=$row['image'];
	$product_detail=$row['product_detail'];
	$price=$row['price'];
	$quantity_product=$row['quantity'];

			
			if($quantity_product>0){

	echo"
    <div class='col-md-4'>
        <div class='box1 box' style='padding-left:0px; height:487px;font-family:Arial,sans-serif'>
	<form action='' method='post'>
           <div class='box-content'>
                 <center><h2 >$product_title</h2></center>
                 <div class='box-img' style='border-radius:5px' ><img src='$image' height='300px' width='315px' style='border-radius:5px' ></div><br>
		<div style='font-family: Arial, Helvetica, sans-serif;font-size:15px'>$product_detail</div>
		<div style='font-family: 'Lucida Console', 'Courier New', monospace'>Price:Rs.$price</div>
		<div class='quantity'><input type='number' name='quantity' min='1' max='10' style='width:314px;border-radius:5px' ></div>
                 <div class='cart border'>
		<input type='hidden' name='pname' value='$product_title'>
		<input type='hidden' name='img' value='$image'>
		 <input type='hidden' name='des' value='$product_detail'> 
		<input type='hidden' name='pri' value='$price'>
               
                        <button name='submit4' style='background-color: #59B4C3;border: 0px; width:312px'>
				<center><i class='fa-solid fa-cart-shopping'></i>
				Add to Cart</button></center>
			</div>
                       
            </div>
	</form>
        </div>
        
 </div>";
		}
		else{
			echo"
    <div class='col-md-4'>
        <div class='box1 box' style='padding-left:0px; height:487px'>
	<form action='' method='post'>
           <div class='box-content'>
                 <center><h2>$product_title</h2></center>
                 <div class='box-img' style='border-radius:5px' ><img src='$image' height='300px' width='315px' style='border-radius:5px' ></div><br>
		<div>$product_detail</div>
		<div>Price:Rs.$price</div>
		<div class='quantity'><input type='number' name='quantity' min='1' max='10' style='width:314px;border-radius:5px' ></div>
                 <div class='cart border'>
		<input type='hidden' name='pname' value='$product_title'>
		<input type='hidden' name='img' value='$image'>
		 <input type='hidden' name='des' value='$product_detail'> 
		<input type='hidden' name='pri' value='$price'>
                    
                        <button name='submit5' style='background-color: #59B4C3;border: 0px;width:312px'>
				<center><i class='fa-solid fa-cart-shopping'></i>
				Not Available</button></center>
			</div>
                       
            </div>
	</form>
        </div>
        
 </div>";
		}

}

?>
</div></div>
</body>
</html>