<html>
<head>

<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="pro.css?v=3">
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
		<li><a href="#">
			<i class='bx bxs-store'></i>
			<span class="text">My Store</span>
		</a></li>
		<li><a href="add.php">
			<i class='bx bxs-add-to-queue'></i>
			<span class="text">Add Products</span>
		</a></li>
		<li><a href="#">
			<i class='bx bx-list-ul' ></i>
			<span class="text">List Of Products</span>
		</a></li>
	</ul>
	
	<ul >
		<li class="ofclick"><a href="#">
			<i class='bx bx-cog' ></i>
			<span class="text">Settings</span>
		</a></li>
			
		<li><a href="#">
			<i class='bx bx-log-out-circle'></i>
			<span class="text">Log Out</span>
		</a></li>
	</ul>
</selection>

<selection class="main">
	<nav>
	<div class="icon"><i class='bx bx-list-ol'></i></div>
	<a class="cat">Categories</a>
	<input type="search" value="search" class="search">
	<div class="search-icon"><i class='bx bx-search-alt-2'></i></div>
	
	<div class="notify">
			<div class="bell"><i class='bx bxs-bell'></i></bell>
			<span class="num">10</span>
	</div>
	</nav>
<div class="allot">
		<h3>Dashboard</h3>
			<div class="greater"><i class="bx bx-chevron-right"></i></div>
		<a href="#" class="home">Home</a>

</div>


<div class='grid'>
	<div class='row'>
		
<?php
	include"product.php";
	$select_q="Select * from products";
	$result_q=mysqli_query($conn,$select_q);
	while($row=mysqli_fetch_assoc($result_q)){
	
	$product_title=$row['product_title'];
	$image=$row['image'];
	$product_detail=$row['product_detail'];

	echo"
		<div class='col-md-4'>
			<div class='outer'>
				<div class='inner'>
				<h1>$product_title</h1>
				<div id='box1_img'><img src='$image' height='180px' width='227px'></div>
				<p>$product_detail</p>	
				</div>
			</div>
		</div>
		";

						}
?>
		
	</div>
</div>

</div>
</selection>
</body>
</html>