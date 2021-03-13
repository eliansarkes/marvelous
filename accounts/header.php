<?php
session_start();
if (!isset($_SESSION['userUid'])) {
	header("location: oops.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignment 5</title>
	<link rel="stylesheet" href="css/css.css">
</head>

<header id="header">
	
<?php
	//if (isset($_SESSION['userUid'])) {
		//echo "<p id='userid'>Hello " . $_SESSION['userUid'] . "!</p>";
		
		echo "<nav>
			<a href='index.php'><button id='btn'>Home</button></a>
			<a href='contact.php'><button id='btn'>Contact</button></a>";
			if (isset($_SESSION['userUid'])) {
				if ($_SESSION['userUid'] === 'admin') {
					echo "<a href='edit.php'><button id='btn'>Edit Accounts</button></a>";
					echo "<a href='profile.php'><button id='btn'>Profile</button></a>";
					echo "<a href='includes/logout-inc.php'><button id='btn'>Logout</button></a>";
					echo "<p id='userid'>Hello " . $_SESSION['userUid'] . "!</p>";
				}
				else {
				echo "<a href='profile.php'><button id='btn'>Profile</button></a>";
				echo "<a href='includes/logout-inc.php'><button id='btn'>Logout</button></a>"; 
				echo "<p id='userid'>Hello " . $_SESSION['userUid'] . "!</p>";
				}
			}
			else {
				echo "<a href='login.php'><button id='btn'>Log In</button></a>";
				echo "<a href='signup.php'><button id='btn'>Sign Up</button><button id='btn'>";
			}
		echo "</nav>";
	//}
?>
</header>
	<?php 
	if (isset($_SESSION['userUid'])) {
		echo "<div id='{$_SESSION['background']}'>";
	} 
	else {
		echo "<div id='default'>";
	}
	?>
	<div id='wrapper'> 