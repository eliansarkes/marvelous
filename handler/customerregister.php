<?php
include ('../partials/connect.php');
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if ($password==$password2) {
$sql="INSERT INTO customers (username, password) VALUES('$email', '$password')";
$connect->query($sql);

echo "<script>alert('You are registered');
    window.location.href='../customerforms.php';
    </script>";
//header('location: ../customerforms.php');

}else{
    echo "<script>alert('Passsword did not match');
    window.location.href='../customerforms.php';
    </script>";
}

?>