<?php

include ('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from products WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
header('location: productshow.php');

}else{
    echo "NOT DELETED";

}

?>