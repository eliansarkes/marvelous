<?php
session_start();
if (!isset($_SESSION['userUid'])) {
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignment 5</title>
	<link rel="stylesheet" href="css/css.css">
</head>

<header id="header">Assignment 5
<?php
	if (isset($_SESSION['userUid'])) {
		echo "<p id='userid'>Hello " . $_SESSION['userUid'] . "!</p>";
	}
?>
</header>
	<nav>
		<button id="btn"><a href='index.php'>Home</a></button>
		<button id="btn"><a href='contact.php'>Contact</a></button>
		<?php
			if (isset($_SESSION['userUid'])) {
				if ($_SESSION['userUid'] === 'admin') {
					echo "<button id='btn'><a href='edit.php'>Edit Accounts</a></button>";
					echo "<button id='btn'><a href='profile.php'>Profile</a></button>";
					echo "<button id='btn'><a href='includes/logout-inc.php'>Logout</a></button>"; 	
				}
				else {
				echo "<button id='btn'><a href='profile.php'>Profile</a></button>";
				echo "<button id='btn'><a href='includes/logout-inc.php'>Logout</a></button>"; 
				}
			}
			else {
				echo "<button id='btn'><a href='login.php'>Log In</a></button>";
				echo "<button id='btn'><a href='signup.php'>Sign Up</a></button>";
			}
		?>
	</nav>
	<?php 
	if (isset($_SESSION['userUid'])) {
		echo "<div id='{$_SESSION['background']}'>";
	} 
	else {
		echo "<div id='default'>";
	}
	?>