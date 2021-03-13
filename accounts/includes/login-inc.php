<?php

if (isset($_POST['sub'])) {
	require_once 'dbh-inc.php';
	require_once 'functions-inc.php';
	
	$username = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	if (emptyInputLogin($username, $pwd) !== false) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}
	
	loginUser($conn, $username, $pwd);
}
else {
	header("location :../oops.php");
	exit();
}