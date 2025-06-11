<!DOCTYPE html>
<html>
<head>
    <title>pharmacy management syst</title>
    <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="sign-up-form">
        <img src="icon.png">
        <h1>Sign UP Now</h1>
        <form action="signup.php" method="POST">
            <input type="text" class="input-box" placeholder="Your User name" name="username" required>
            <input type="password" class="input-box" placeholder="password" name="password" required>
            <input type="password" class="input-box" placeholder="confirm password" name="cpassword" required>
	    <select name="role">
	      		<option value="1">admin</option>
			<option value="2">user</option>
	    </select>
            <p><span><input type="checkbox"></span> agree to the Terms and conditions</p>
            <button class="signup-btn" name="submit">Sign Up <i class="fa fa-user-plus" aria-hidden="true"></i></button>
           
            
        </form>

	<?php
	


$servername="localhost";
$username="root";
$password="";
$database="login";
$conn = mysqli_connect($servername,$username,$password,$database);
if(isset($_POST["submit"])){
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];
	$role=$_POST['role'];
		
	
		if($pass==$cpass){

					

			$sql ="INSERT INTO `login` (`sr`, `user_detail`, `password`, `cpassword`,`role`)VALUES (NULL, '$name','$pass','$cpass','$role')";

			$result= mysqli_query($conn,$sql);

			if($result){
				echo"Sucessful Created Please Go To Login Page";
				}
			else{
				echo"Unsuccessful";
			}
				
		}
			else{
				echo"Please check password and confrim password";
			}
		
	
		}
	else{
	echo"PLEASE ENTER THE DETAILS";
	}
	
?>

<a href="login.php">LogIn</a>
    </div>
</body>
</html>