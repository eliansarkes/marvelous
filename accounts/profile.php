<?php
include_once 'header.php';
?>

<h2>Edit Account</h2>
	<form action='includes/profile-inc.php' method='POST'>
	<label for="background" style='font-weight:bold'>Change Background:</label><br>
	<select name="background" id="background">
				<option value="default">Default</option>
				<option value="blue">Blue</option>
				<option value="brown">Brown</option>
				<option value="rain">Rain</option>
				<option value="trees">Trees</option>
			</select><br><br>
			
	<label for="password" style='font-weight:bold'>Change Password:<br>Leaving the password fields empty will submit an empty string<br>This will break the account<br>Don't have time to fix </label><br>
	<input type='password' name='pwd' placeholder='Password...'><br>
	<input type='password' name='repeatPwd' placeholder='Repeat password...'>
	<input type='submit' name='updateProfile' value='Submit'>
	
	<?php
	if(isset($_GET['error'])) {
		if ($_GET['error'] == 'pwddontmatch') {
			echo "<p>Passwords don't match!</p>";
		}
		else if ($_GET['error'] == 'none') {
			echo "<p>Account successfully updated</p>";
		}
		else if ($_GET['error'] == 'stmtfailed1') {
			echo "<p>Something went wrong.</p>";
		}
	}
	?>

<?php
include_once 'footer.php';
?>