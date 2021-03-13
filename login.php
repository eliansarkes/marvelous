
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

<?php
	include ('partials/footer.php');
	?>

</body>
</html>


	