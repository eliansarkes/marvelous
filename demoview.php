<?php
session_start();
if(empty($_SESSION['cart'])) {
$_SESSION['cart']=array();

}

//will pust the cart id in the array
array_push($_SESSION['cart'], $_GET['cart_id']);




?>

<p> Added successfully <a href="cartview.php">Click to View</p>