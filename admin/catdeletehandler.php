<?php
include ("../partials/connect.php");
$del_category=$_POST['name'];


//query to insert into table contact in the database

$sql="DELETE FROM categories(name) VALUES('$del_category')";

$connect->query($sql);
header('location: categories.php');
?>