<?php
	$conn=mysqli_connect("localhost","root","","products");
	if(isset($_POST['submit2'])){
		$sr_new=$_GET['sr'];
		$pname=$_GET['nm'];
		$pdes=$_GET['des'];
		$query="update `products` set `product_title`='$pname', `product_detail`='$pdes' where `id_new`='sr'";
		$result=mysqli_query($conn,$query);
		if($result){
			echo"unsucessful";
			}	
		else{
			echo"suceess";
			}
			
	}
?>

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
		<li><a href="#">
			<i class='bx bxs-store'></i>
			<span class="text">My Store</span>
		</a></li>
		<li><a href="add.php">
			<i class='bx bxs-add-to-queue'></i>
			<span class="text">Add Products</span>
		</a></li>
		<li><a href="list.php">
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
			<div class="out"><i class='bx bx-log-out-circle' style="color:red"></i><div>
			<span class="logout">Log Out</span>
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


<?php
	include "product.php";
	
?>


<div class="allot">
		<h3>Dashboard</h3>
			<div class="greater"><i class="bx bx-chevron-right"></i></div>
		<a href="#" class="home">Add Products</a>

</div>
<div class="add">
<form action="update.php?id_new=<?php echo $_GET['sr']; ?>" method="post">
	<div>
	<label class="one">Insert Product Name</label><br>
	<input type="text" placeholder="insert products" name="product" class="first" value="<?php echo $_GET['nm']; ?>"><br><br><br>
	<label class="one">Insert Product Image</label><br>
	<input type="file" required accept="image/png, image/jpg, image/jpeg" name="image" class="first" value="<?php echo $_GET['img']; ?>"><br><br><br>
	<label class="one">Insert Product Datail</label><br>
	<input type="text" placeholder="insert products detail" name="productdetail" class="first" value="<?php echo $_GET['des']; ?>"><br><br><br>
	<input class="second" type="submit" value="submit" name="submit2" >
	</div>
</form>

</div>

</div>

</selection>
</body>
</html>