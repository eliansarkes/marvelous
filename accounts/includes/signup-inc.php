<?php
if(isset($_POST['sub'])) {
	
	require_once 'dbh-inc.php';
	require_once 'functions-inc.php';

	
	

		
	$email = $_POST['atEmail'];
	$pwd = $_POST['pwd'];
	$pwdRepeat = $_POST['pwdRepeat'];
	$username = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];

	
	if (emptyInputSignup($username, $fname, $lname, $email, $pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=emptyinput");
		print($username. $fname. $lname. $email. $pwd. $pwdRepeat);
		exit();
	}

	
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=pwddontmatch");
		exit();
	}
	if (uidExists($conn, $username, $email) !== false) {
		header("location: ../signup.php?error=usernameOrEmailtaken");
		exit();
	}
	
	createUser($conn, $username, $fname, $lname, $email, $pwd);
	
} else {
	header("location: ../signup.php");
	exit();
}