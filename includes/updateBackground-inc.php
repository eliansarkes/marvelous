<?php
if(isset($_GET['id'])) {
		if ($_GET['id'] == 'trees') {
				echo "url('../img/trees.jpg')";
		}
		else if ($_GET['id'] == 'brown') {
			echo "url('../img/brown.jpg')";
		}
		else if ($_GET['id'] == 'blue') {
			echo "url('../img/blue.jpg')";
		}
		else if ($_GET['id'] == 'rain') {
			echo "url('../img/rain.jpg')";
		}
		die();
}
?>
