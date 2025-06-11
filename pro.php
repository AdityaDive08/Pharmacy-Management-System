<html>
<head>
<link rel="stylesheet" href="order.css?v=2">
<link rel="stylesheet" href="pro.css?v=3">
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
		<li><a href="#">
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
		<a href="#" class="home">Home</a>

</div>
<div style="display:flex">
<div class="dash" style="background-color:white; width:300px; height:200px; border-radius:10px;display:flex;margin-left:30px;">
				<i class='bx bxs-calendar-check' style="color:blue;font-size:60px;margin-top:70px; margin-left:20px"></i>
					<div class="text" style="font-size:35px;margin-top:50px; margin-left:20px">
						<h3><?php echo $row_count;?></h3>
						<p>New Order</p>
					</div>
		
</div>
<?php
		$servername="localhost";
		$username="root";
		$password="";
		$database="login";
		$conn = mysqli_connect($servername,$username,$password,$database);
		$select_query=mysqli_query($conn,"SELECT * from `login`");
		$row_count=mysqli_num_rows($select_query);
	?>
<div class="dash" style="background-color:white; width:300px; height:200px; border-radius:10px;display:flex;margin-left:30px;">
				<i class='bx bxs-group' style="color:green;font-size:60px;margin-top:70px; margin-left:20px"></i>
					<div class="text" style="font-size:35px;margin-top:50px; margin-left:20px">
						<h3><?php echo $row_count;?></h3>
						<p>Users</p>
					</div>
		
</div>
<?php
		$servername="localhost";
		$username="root";
		$password="";
		$database="products";
		$conn = mysqli_connect($servername,$username,$password,$database);
		$select_query=mysqli_query($conn,"SELECT * from `products`");
		$row_count=mysqli_num_rows($select_query);
	?>
<div class="dash" style="background-color:white; width:300px; height:200px; border-radius:10px;display:flex;margin-left:30px;">
				<i class='bx bxs-doughnut-chart' style="color:red;font-size:60px;margin-top:70px; margin-left:20px"></i>
					<div class="text" style="font-size:35px;margin-top:50px; margin-left:20px">
						<h3><?php echo $row_count;?></h3>
						<p>Total Products</p>
					</div>
		
</div>
</div>

</div>
</selection>
</body>
</html>