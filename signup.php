
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
</div>
		



<div id="preview" style="background-image: url('../img/');
	background-color:white;
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	text-align:center;
	border-style:solid;
	border-color:black;
	width:30%;
	margin-top:15%;
	margin-left:auto;
	margin-right:auto;"
>
	
<div>
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










	<h2>Sign Up</h2>
		<form action="includes/signup-inc.php" method="POST"><br>

			<input type='text' name='fname' placeholder='First name...'><br>
			<input type='text' name='lname' placeholder='Last name...'><br>
			<input type='text' name='atEmail' placeholder='Email...'><br>
			<input type='text' name='username' placeholder='Username...'><br>
			<input type='password' name='pwd' placeholder='Password...'><br>
			<input type='password' name='pwdRepeat' placeholder='Repeat password...'><br>
			
			<br><button id="btn" type='submit' name='sub'>Sign Up</button>
		</form>
<?php
	if(isset($_GET['error'])) {
		if ($_GET['error'] == 'emptyinput') {
			echo "<p>Fill in all fields!</p>";
		}
		else if ($_GET['error'] == 'invaliduid') {
			echo "<p>Choose a proper username!</p>";
		}
		else if ($_GET['error'] == 'invalidemail') {
			echo "<p>Choose a proper email!</p>";
		}
		else if ($_GET['error'] == 'pwddontmatch') {
			echo "<p>Passwords don't match!</p>";
		}
		else if ($_GET['error'] == 'usernameOrEmailtaken') {
			echo "<p>That username or email is taken!</p>";
		}
		else if ($_GET['error'] == 'none') {
			echo "<p>You are signed up!</p>";
		}
		else if ($_GET['error'] == 'stmtfailed') {
			echo "<p>Something went wrong.</p>";
		}
	}			
?>
	<a href='login.php'><button id="btn">Login</button></a><br>
	<p></p>
</div>
<?php
	include ('partials/footer.php');
	?>

</body>
</html>


	