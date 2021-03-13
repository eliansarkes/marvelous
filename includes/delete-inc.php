<?php
session_start();
if ($_SESSION['userUid'] === 'admin'){

	include_once 'dbh-inc.php';
	include_once 'functions-inc.php';

	$uId = $_GET['id'];

	deleteUser($conn, $uId);
}
else {
	header("location: ../index.php");
	exit();
}


?>