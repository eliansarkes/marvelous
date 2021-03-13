<?php
//signup functions
//check if input is empty
function emptyInputSignup($fname, $lname, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if(empty($fname) || empty($lname) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
		}
		else {
			$result = false;
		}
		return $result;
}

//empty input check when editing
function emptyInputEdit($fname, $lname, $email, $username, $pwd) {
	$result;
	if(empty($fname) || empty($lname) || empty($email) || empty($username) || empty($pwd)) {
		$result = true;
		}
		else {
			$result = false;
		}
		return $result;
}

//check if user id is valid
function invalidUid($username) {
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

//check if email is valid
function invalidEmail($email) {
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

//check if passwords match
function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if($pwd !== $pwdRepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

//check if username exists
function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM customers WHERE username = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}

//create user
function createUser($conn, $username, $fname, $lname, $email, $pwd) {
include ("../partials/connect.php");
	$sql="INSERT INTO customers (username, fname, lname, email, password) VALUES ('$username', '$fname', '$lname', '$email', '$pwd');";

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	$connect->query($sql);
	header("location: ../signup.php?error=none");
	exit();
}

//login functions
//check if login fields are empty
function emptyInputlogin($username, $pwd) {
	$result;
	if(empty($username) || empty($pwd)) {
		$result = true;
		}
		else {
			$result = false;
		}
		return $result;
}

//login user
function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username, $username);
	
	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	
	$pwdHashed = $uidExists['password'];
	$checkPwd = password_verify($pwd, $pwdHashed);
	
	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	else if ($checkPwd === true) {
		session_start();
		$_SESSION['customer_ID'] = $uidExists['customer_ID'];
		$_SESSION['customer_ID'] = $uidExists['customer_ID'];
	
		require_once 'dbh-inc.php';
		

				header("location: ../index.php");
				
			}
	}


//display user accounts (admin only)
function loadReport($conn) {
 // get the record
	$sql = "SELECT customer_ID, username, fname, lname, email, password FROM customers";
	$result = $conn->query($sql);
	
	if ($result) {
		echo "<h2> View Records</h2>";
		echo "<table border='1' cellspacing='0' style='background-color:white; border-color:gray; text-align:center; width:80%'>
					
					<tr style='font-weight:bold'>
						<td>ID</td>
						<td>Username</td>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Email</td>
						<td>Background</td>
						<td>Username</td>
						<td>Password</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>";
					
		// output data of each row
		while($row = $result->fetch_assoc()) {

			 echo "<tr><td>{$row['customer_ID']}</td>
						<td>{$row['username']}</td>
						<td>{$row['fname']}</td>
						<td>{$row['lname']}</td>
						<td>{$row['email']}</td>
						<td>Private Information</td>
						<td><button><a href='edit.php?id={$row['userId']}'>Edit</a></button></td>
						<td><button><a href='includes/delete-inc.php?id={$row['userId']}'>Delete</a></button></td>
					</tr>";
			
		}
		echo "</table>\n";		  
		
	} else {
		  echo "Command did not work Error meesage" . $conn->error;
	}	  	

}

//display edit user form (admin only)
function editUser($conn, $uId) {
	$sql = "SELECT customer_ID, fname, lname, email, password FROM customers where customer_id='$uId'";
	$result = $conn->query($sql);
	
	if ($result) {
		echo "<h2> Edit User</h2>";
		echo "<table border='1' cellspacing='0' style='background-color:white; border-color:gray; text-align:center; width:80%'>
					
			<tr style='font-weight:bold'>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Background</td>
				<td>Username</td>
				<td>Password</td>
				<td>Update</td>
				<td>Delete</td>
			</tr>";
					
			// output data of each row
			while ($row = $result->fetch_assoc()) {

				echo "<tr>
					<form method='POST' action='includes/edit-inc.php?id={$row['customer_id']}'>
					<td>{$row['customer_id']}</td>
					<td><input type='text' name='userName' value='{$row['username']}'></td>
						<td><input type='text' name='userEmail' value='{$row['email']}'></td>
						<td><input type='text' name='fname' value='{$row['fname']}'></td>
						<td><input type='text' name='lname' value='{$row['lname']}'></td>
						<td><input type='password' name='password'  placeholder='Enter Password...'></td>
						<td><input type='submit' name='sub' value='Update'></td>
						<td><button><a href='includes/delete-inc.php?id={$row['customer_id']}'>Delete</a></button></td>
					</tr>";
				echo "</table></form>";	
				
			}		
	
	}
	else {
		  echo "Command did not work Error meesage" . $conn->error;
	}	
}

//update user into database
function updateUser($conn, $uId, $uname, $firstName, $lastName, $email, $username,$hashedPwd) {
	$sql = "UPDATE customers SET username='$uname', fname='$firstName', lname='$lastName', email='$email', password='$hashedPwd', WHERE customer_ID='$uId'";
	if (mysqli_query($conn, $sql)) {
		if ($_SESSION['userId'] === '$uId') {
			$_SESSION['background'] = $background;
			$_SESSION['userUid'] = $username;
			header("location: ../edit.php?update=yes");
			exit();
		}
		else {
			header("location: ../edit.php?update=yes");
		}
	}
	else {
		header("location: ../edit.php?update=no");
		exit();
	}
}

//delete user from database
function deleteUser($conn, $uId) {
	$sql = "delete from customers where customer_id='$uId'";
	if (mysqli_query($conn, $sql)) {
		header("location: ../edit.php?deleted=yes");
		exit();
	}
	else {
		header("location: ../edit.php?deleted=no");
		exit();
		
	}exit();
}

//update user profile
function updateProfile($conn, $uId, $pwd) {
	
	$sql = "UPDATE customers SET password=?, WHERE customer_ID='$uId'";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		// printf("Error: %s.\n", mysqli_stmt_error($stmt));
		header("location: ../profile.php?error=stmtfailed1");
		exit();
	}
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "ss", $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../profile.php?error=none");
	exit();
}

	
		

























