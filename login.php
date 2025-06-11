<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <head http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewimport" content="width=device-width,initial-scale=1.0">
    <title>Login Form in HTML and CSS </title>
    <link rel="stylesheet" href="login.css?v=2">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>

		<select name="role" required>
			<option value='1'>admin</option>
			<option value='2'>user</option>
		</select>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me </label>
                <a href="#"> Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="submit">Login</button>

            <div class="Sign">
                <p>Don't have an account? <a href="signup.php">Sign Up
                </a></p>
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
	$role=$_POST['role'];
			$sql ="Select * from login where user_detail='$name' AND password='$pass' AND role='$role'";
			$result= mysqli_query($conn,$sql);
			$num=mysqli_num_rows($result);
	
			if($num==1){
					$num=mysqli_fetch_array($result);
					if($num['role']=='1'){
		
						header("location:pro.php");
					}

				else if($num['role']=='2'){
						header("location:uinterface.php");
					}
		}
		else{
			echo"<div class='msg'>Please enter valid credentials or sign up</div> ";
		}

		
	
}	
	
?>
    </div>
                

</body>

</html>