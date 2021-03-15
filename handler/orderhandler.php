<?php
session_start();
include ('../partials/connect.php');
$total=$_POST['total'];
$phone=$_POST['phone'];
$address=$_POST['address'];
// declared this in the login file
$customerid=$_SESSION['customerid'];
$payment=$_POST['payment'];

$sql="INSERT INTO orders(customer_id, address, phone, total, payment_method) VALUES('$customerid', '$address', '$phone', '$total', '$payment)";
$connect->query($sql);


$sql2="SELECT id from orders order by id DESC limit 1";
$results=$connect->query($sql2);
$final=$results->fetch_assoc();
$orderid=$final['id'];

foreach ($_SESSION['cart'] as $key => $value) {
$proid=$value['item_id'];
$proname=$value['item_name'];
$quantity=$value['quantity'];

$sql3="INSERT INTO order_details(order_id,product_id, product_name,quantity) VALUES('$orderid', '$proid', '$proname', '$quantity')";
$connect->query($sql3);


}
if ($payment=="paypal") {
$_SESSION['total']=$total;
$_SESSION['quantity']=$qty;

header('location: paypal.php');


} else {

echo "<script> alert('ORDER IS PLACED, You will recieve a confirmation eamil shortly');
    window.location.href='../index.php';
    </script>";
}
// it will clear this variable 
unset($_SESSION['cart']);
?>