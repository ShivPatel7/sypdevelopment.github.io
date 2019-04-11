<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="l.css">
	<div class="login">
	<h2>Sign In</h2>
	<form method="post">
		<div class="input-group">
			<input type="text" name="text1" required="required">
			<span>Username</span>
		</div>
		<div class="input-group">
			<input type="password" name="pwd" required="required">
			<span>Password</span>
		</div>
		<div class="input-group">
			<input type="submit" value="Login">
		</div>
	</form>
	
</div>

</body>
</html>

<?php 
    session_start();
    if (isset($_POST['login'])) 
    {
    	$u=$_POST['text1'];
    	$p=$_POST['pwd'];

    	if ($u=="mohilpatel58@gmail.com" && $p=="123456" )
    	{
    		$_SESSION['user']=$u;
    		header('location: homepage.php');
    	}
    	else
    	{
    		echo "Invalid user name and password....";
    	}
    }

 ?>