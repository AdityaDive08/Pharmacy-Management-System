<html>
<head>
<link rel="stylesheet" href="pro.css?v=2">
<link rel="stylesheet" href="list.css?v=3">
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
<div class="allot">
		<h3>Dashboard</h3>
			<div class="greater"><i class="bx bx-chevron-right"></i></div>
		<a href="#" class="home">List Of Products Added</a>

</div>

<?php
	$conn=mysqli_connect("localhost","root","","products");

	if(isset($_GET['sr'])){
	$sr_new=$_GET['sr'];
	
	$query="delete from `products` where `sr` ='$sr_new'";
	$result=mysqli_query($conn,$query);
	if($result){
		echo"<div class='delmsg'>
		<p>Sucessfully Deleted the Data</p>
			</div>";
	
	}
	else{
		echo"not deleted";
	}
	
	}
?>

	<div class="list">
			<table>
			<tr>
				<th>Sr.no</th>
				<th>Product Name</th>
				<th>Product Image</th>
				<th>Product Description</th>
				<th>Product Price</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
	
			<tr>
	
	
<?php
	include"product.php";
	$select_q="Select * from products";
	$num=1;
	$result_q=mysqli_query($conn,$select_q);
	while($row=mysqli_fetch_assoc($result_q)){
?>
	
	<td><?php echo $num; ?></td>
	<td><?php echo $row['product_title']; ?></td>
	<td><?php echo $row['image']; ?></td>
	<td><?php echo $row['product_detail']; ?></td>
	<td><?php echo $row['price']; ?></td>
	<td><a href="update.php?sr=<?php echo $row['sr']; ?>&nm=<?php echo $row['product_title']; ?>&img=<?php echo $row['image']; ?>&des=<?php echo $row['product_detail']; ?> &pri=<?php echo $row['price']; ?>" class="edit">edit</a></td>
	<td><a href="list.php?sr=<?php echo $row['sr']; ?>" class="delete">delete</a></td>

	</tr>
<?php
	$num++;
	
}
?>
</table></div>

</div>
</selection>
</body>
</html>