<?php
include_once 'header.php';
?>
<section>
	<?php
	if($_SESSION['userUid'] === 'admin') {
	
		include_once 'includes/dbh-inc.php';
		include_once 'includes/functions-inc.php';
	
		if(isset($_GET['update'])) {
			echo "<h2>User updated.</h2>";
		}
		if(isset($_GET['deleted'])) {
			echo "<h2>User Deleted.</h2>";
		}
		
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
		}			
	
		if (isset($_GET['id'])) {
			$uId = $_GET['id'];
			editUser($conn, $uId);
		}
			loadReport($conn);
		}
	else {
		echo "<h1>You are not supposed to be here.</h1><br>";
		echo "<a href='index.php'><button id='btn'><--Back</button></a>";
	}
	?> 
</section>
<?php
include_once 'footer.php';
?>