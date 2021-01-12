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
    <div id="container">
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php" autocomplete="off">

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
            <p id="demo"></p>
            <p>
           <button class="btn1"><a href="index.php">Back to home</a> </button>  &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <button class="btn1"> <a href="signup.php">No account..Sign Up </a></button>
            </p>
            </p>
        </form>

    </div>
    <?php
if(isset($_POST['login'])){
    include('server.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT `id` FROM `signup` WHERE `username`='$username' AND `password`='$password';";
    $run=mysqli_query($conn,$qry);
    if(mysqli_num_rows($run)<1){	 
		header('location:check.php');

	}

	else
	{
		?>

    <?php

        $select_query = "SELECT * FROM `signup` WHERE `username`='$username' AND `password`='$password';";
        $query = mysqli_query($conn,$select_query);
        if(!$query){
            echo 'No Records';
        }else{
            while($row=mysqli_fetch_assoc($query)){
                $id=$row['id'];
            }
        }
        
    header("Location:exp1.php?id=$id");
    }

    
} ?>


</body>

</html>