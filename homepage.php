<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
</head>
<body>
	<p>
		welcome
		<?php 
		session_start(); 
        echo $_SESSION['user'];
		?>

		<span style="float:right;">
			<a href="logout.php">Logout</a>
		</span>
	</p>


</body>
</html>