<?php
$db = mysqli_connect("localhost", "jc", "1549100", "studentvote");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password1 = $_POST['password'];
    $sql="SELECT * FROM signUp WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['email']=$email;
        header("location: index.php");
    }
  else {
        echo "incorrect email/password combination";
    }
}
?>







<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	   <link rel="icon" href="image/logo.ico">
	    <link rel="stylesheet" href="adminlogin.css">
	
</head>
<body>



	<form method="post" action="adminlogin.php">


	<div class="size">


		<label>Email:</label>
		
		<input type="text" placeholder="Enter your email address" name="email" required ><br><br>
		<label>Password:</label>
		
		<input type="Password" placeholder="Enter Password" name="password" required><br><br>

	</div>

	<div class="Gendersub"><input type="submit" name="submit" value="Login" ></td></div>

</form>

</body>
</html>