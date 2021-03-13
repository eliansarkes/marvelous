<html>
<head>
	<title>Marvelous!</title>
	<link rel="stylesheet" href="css/css.css">
</head>

<div id="login">
	<h2>Log In</h2>
		<form action="includes/login-inc.php" method="POST" enctype ="value"><br>
			<input type='text' name='uid' placeholder='Username/Email...'><br>
			<input type='password' name='pwd' placeholder='Password...'><br>
			<br><button id="btn" type='submit' name='sub'>Log In</button>
		</form>		
<?php
	if(isset($_GET['error'])) {
		if ($_GET['error'] == 'emptyinput') {
			echo "<p>Fill in all fields!</p>";
		}
		else if ($_GET['error'] == 'wronglogin') {
			echo "<p>Incorrect login information</p>";
		}
	}			
?>
	<a href='signup.php'><button id="btn">Sign Up</button></a><br>
	<p></p>
</div>

</html>
