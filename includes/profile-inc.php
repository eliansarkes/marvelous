<?php
session_start();
if(isset($_POST['updateProfile'])) {	

	include_once 'dbh-inc.php';
	include_once 'functions-inc.php';

	$uId = $_SESSION['userId'];
	$pwd = $_POST['pwd'];
	$pwdRepeat = $_POST['repeatPwd'];
	$background = $_POST['background'];
	
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../profile.php?error=pwddontmatch");
		exit();
	}
	
	updateProfile($conn, $uId, $pwd, $background);
}
else {
	header("location: ../index.php");
	exit();
}