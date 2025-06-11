<html>
<head>
<link rel="stylesheet" href="pro.css?v=2">
<link rel="stylesheet" href="add.css?v=2">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<div class="outergrid">
<selection class="sidebar">
	
	<div class="anchor1" style="display: flex; height: 48px; width: 150px; padding-left: 25px; padding-top: 10px;"> 
		<i class='bx bxs-home-smile'></i>
		<span class="text">AdminHub</span>
	</div>
	<br>
	<ul class="onclick">
		<li><a href="pro.php">
			<i class='bx bxs-dashboard' ></i>
			<span class="text">DashBoard</span>
		</a></li>
		
		<li><a href="add.php">
			<i class='bx bxs-add-to-queue'></i>
			<span class="text">Add Products</span>
		</a></li>
		<li><a href="list.php">
			<i class='bx bx-list-ul' ></i>
			<span class="text">List Of Products</span>
		</a></li>
		<li><a href="history.php">
			<i class='bx bxs-store'></i>
			<span class="text">Request</span>
		</a></li>
	</ul>
	
	<ul >
		
			
		<li><a href="login.php">
			<div class="out"><i class='bx bx-log-out-circle' style="color:red"></i><div>
			<span class="logout">Log Out</span>
		</a></li>
	</ul>
</selection>

<selection class="main">
	<nav>
	<div class="icon"><i class='bx bx-list-ol'></i></div>
	<a class="cat">Categories</a>

	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$database="products";
		$conn = mysqli_connect($servername,$username,$password,$database);
		$select_query=mysqli_query($conn,"SELECT * from `notify`");
		$row_count=mysqli_num_rows($select_query);
	?>
	<div class="notify" ><a href="history.php">
			<div class="bell"><i class='bx bxs-bell'></i></bell>
			<span class="num" style="display:flex; width:20px;left:15px;top:-16px; align-items:center; justify-content:center"><?php echo $row_count;?></span>
	</a>
	</div>
	</nav>


<?php
	include "product.php";
	
?>


<div class="allot">
		<h3>Dashboard</h3>
			<div class="greater"><i class="bx bx-chevron-right"></i></div>
		<a href="#" class="home">Add Products</a>

</div>
<div class="add">
<form action="add.php" method="post">
	<div>
	<label class="one">Insert Product Name</label><br>
	<input type="text" placeholder="insert products" name="product" class="first"><br><br><br>
	<label class="one">Insert Product Image</label><br>
	<input type="file" required accept="image/png, image/jpg, image/jpeg" name="image" class="first"><br><br><br>
	<label class="one">Insert Product Datail</label><br>
	<input type="text" placeholder="insert products detail" name="productdetail" class="first"><br><br><br>
	<label class="one">Insert Product Price</label><br>
	<input type="text" placeholder="insert products price" name="productprice" class="first"><br><br><br>
	<label class="one">Insert Product Stock Available</label><br>
	<input type="number" min="1" placeholder="insert products stock available" name="productstock" class="first"><br><br><br>
	<input class="second" type="submit" value="submit" name="submit1" >
	</div>
</form>

</div>

</div>

</selection>
</body>
</html>