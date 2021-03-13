<?php
include ("../partials/connect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];

//query to insert into table contact in the database

$sql="INSERT INTO contact(email,msg) VALUES('$email','$msg')";

$connect->query($sql);

?>