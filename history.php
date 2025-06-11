<html>
<head>
<link rel="stylesheet" href="order.css?v=2">
<link rel="stylesheet" href="pro.css?v=3">
<link rel="stylesheet" href="list.css?v=1">
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

<selection class="main" style="width:1068px">
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
<div class="allot">
		<h3>Dashboard</h3>
			<div class="greater"><i class="bx bx-chevron-right"></i></div>
		<a href="#" class="home">Requests</a>

</div>

	<div class="list">
			<table style="width:730">
			<tr>
				<th>Sr.no</th>
				<th>User Name</th>
				<th>User Address</th>
				<th>User Email</th>
				<th>Product</th>
				<th>Quantity</th>
				<th>price</th>
				<th>Deploy</th>
				<th>Cancel</th>
			</tr>
	
			<tr>
	
	
<?php
	include"product.php";
	$select_q="Select py.*,cr.pname,quantity_cart,price from payment py,cart cr";
	$result_q=mysqli_query($conn,$select_q);
	$num=1;
	while($row=mysqli_fetch_assoc($result_q)){
?>
	
	<td><?php echo $num; ?></td>
	<td><?php echo $row['user_name']; ?></td>
	<td><?php echo $row['user_add']; ?></td>
	<td><?php echo $row['user_email']; ?></td>
	<td><?php echo $row['pname']; ?></td>
	
	<td><?php echo $row['quantity_cart']; ?></td>
	<td><?php echo $row['price']; ?></td>
	
	<td><a href="update.php" class="edit">deploy</a></td>
	<td><a href="history.php?sr=<?php echo $row['sr']; ?>" class="delete">cancle</a></td>

	</tr>
<?php
$num++;	
}
?>
</table></div>

</div>

</div>

</table></div>
</selection>
</body>
</html>


