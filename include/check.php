<?php include('server.php');
session_start();
if(isset($_SESSION['id'])){    
    header('location:exp1.html');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	
  <form method="post" action="login.php">

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login">Login</button>

  	</div>
	  <p id="demo">Incorrect Password or Username</p> 
  	<p>
  		<a href=" home.html">Back to home</a>
  	</p>
  </form>
  <?php
if(isset($_POST['login'])){
    include('server.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT `id` FROM `signup` WHERE `username`='$username' AND `password`='$password';";
    $run=mysqli_query($conn,$qry);
    if(mysqli_num_rows($run)<1){	 
        ?><script>document.getElementById("demo").innerHTML = "Login is not Done";</script><?php
	}

	else
	{
		header('location:exp1.html');
	}

}
?>
 
</body>
</html>