<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>
</head>
<body>
<form method="post">
	<table>
		<tr>
			<td colspan="2" align="center">signe</td>
		</tr>

		<tr>
			<td>user name</td>
			<td><input type="email" name="text1" required></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="Password" name="pwd" required></td>
		</tr>

		<tr>
			<td colspan="2" align="center">
			<input type="submit" value ="sign In" name="login"></td>
		</tr>
</table>
</form>
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