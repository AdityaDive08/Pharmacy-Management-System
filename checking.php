<form action="checking.php" method="post">
<div id="kall">
<div class="call">
	<h1>LOGIN</h1>
</div>
<div class="put">
	<input type="text" placeholder="username" name="username">
	<i class='bx bxs-user'></i>
</div><br>
<div  class="put">
	<input type="password" placeholder="password" name="password">
	<i class='bx bxs-lock-alt'></i>
</div><br>
<div>
	
	<select>
		<option>selection</option>
		<option>admin</option>
		<option>user</option>
	</select>	
</div><br>
<div class="wraper">
	<label><input type="checkbox" class="check">Remember Me</label>
	<a href="">Forgot Password</a>
</div><br>
<div class="put">
	<!--<input type="submit" value="Log In">-->
	<button type="submit"name="submit">submit</button>
</div>

</form>

<?php
	
	
session_start();
$servername="localhost";
$username="root";
$password="";
$database="login";
$conn = mysqli_connect($servername,$username,$password,$database);
if(isset($_POST["submit"])){
	$name=$_POST['username'];
	$pass=$_POST['password'];
	
			$sql ="Select * from login where user_detail='$name' AND password='$pass'";
			$result= mysqli_query($conn,$sql);
			$num=mysqli_num_rows($result);

			if($num==1){
				echo"Sucessful Created ";
				header("location:products.php");
				}
			
			else{
				echo"Please enter valid credentials or sign up";
			}
			
	
			if($usertype==admin){
				header("location:pro.php");
			}
	
			else if($usertype==user){
				header("location:user.php");
			}
}		
else{
	echo"Please enter ";
}
?>