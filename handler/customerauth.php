<?php


if (empty($_SESSION['email'] AND $_SESSION['password'])) {
echo "<script> alert('Please Login to Continue');
window.location.href='customerforms.php';
</script>";

}




?>