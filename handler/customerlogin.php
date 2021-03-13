<?php
session_start();

if(isset($_POST['login'])) {
  include('../partials/connect.php');

$email=$_POST['email'];
$passwd=$_POST['password'];
$sql="SELECT * from customers Where username='$email' AND password='$passwd'";
$results=$connect->query($sql);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];


if($email=$final['username'] AND $passwd=$final['password']) {
  header('location: ../cart.php');
}else{
    echo "<script> alert('Invalid username or password');
    window.location.href='customerforms.php';
    </script>";
}

}

//session_destroy();
?>


