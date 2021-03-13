<?php
session_start();
if ($_SESSION['userUid'] === 'admin') {		

	include_once 'dbh-inc.php';
	include_once 'functions-inc.php';

	$uId = $_GET['id'];
	$name = $_POST['userName'];
	$email = $_POST['userEmail'];
	$username = $_POST['userUid'];
	$pwd = $_POST['userPwd'];
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	//$pwdRepeat = $_POST['pwdrepeat'];
	$background = $_POST['userBackground'];
	
	if (emptyInputEdit($name, $email, $username, $pwd) !== false) {
		header("location: ../edit.php?error=emptyinput");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location: ../edit.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../edit.php?error=invalidemail");
		exit();
	}
	
	updateUser($conn, $uId, $name, $email, $username,$hashedPwd, $background);
}
else {
	header("location: ../index.php");
	exit();
}

?>