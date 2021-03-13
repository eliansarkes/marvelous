
<html>

	<?php
include ("partials/head.php");
?>
<body class="animsition">
 <?php
	
include ("partials/header.php");


	
 ?>
<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
				
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				
			</span>
		</div>
	</div>
		


<h2>Edit Account</h2>
	<form action='includes/profile-inc.php' method='POST'>
	
			
	<label for="password" style='font-weight:bold'>Change Password:<br>Leaving the password fields empty will submit an empty string<br>This will break the account<br>Don't have time to fix </label><br>
	<input type='password' name='pwd' placeholder='Password...'><br>
	<input type='password' name='repeatPwd' placeholder='Repeat password...'>
	<input type='submit' name='updateProfile' value='Submit'>
	
	<?php
	if(isset($_POST['password'] == "")) {
		echo "<p>Password cannot be blank</p>";
	}
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
	include ('partials/footer.php');
	?>

</body>
</html>


	