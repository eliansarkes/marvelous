<?php
include ("../partials/connect.php");
$category=$_POST['name'];


//query to insert into table contact in the database

$sql="INSERT INTO categories(name) VALUES('$category')";

$connect->query($sql);
header('location: productshow.php');
?>