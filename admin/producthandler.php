<?php

include ("../partials/connect.php");
include ("permission.php");
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];
$condition=$_POST['condition'];
$COGS=$_POST['COGS'];

$target="upload/";
$file_path=$target . basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../upload/".$file_name;
$sql = "select ID from products order by ID desc limit 1";
$results=$connect->query($sql);
$final=$results->fetch_assoc();
if($final > 0) {

$new_ID = $final['ID'];
	++$new_ID;

} else {
	$new_ID = 1;
} 



move_uploaded_file($file_tmp, $file_store);


if(isset($_POST['size'])) {
	$size=$_POST['size'];
	$sellOrArchive=$_POST['sellOrArchive'];

$sql = "INSERT INTO Pictures(picture,ID) values ('$file_name','$new_ID');";
$connect->query($sql);


//query to insert pictures first then product
	
	$sql="INSERT INTO Products (name, price, picture, description, category_id, condition_code, sizing, cogs, sellOrArchive, created_at, updated_at) VALUES('$name','$price','$file_name','$description','$category','$condition','$size','$COGS',$sellOrArchive,curdate(),curdate());";


$connect->query($sql);

header("location:proshow.php");

} else {
	$sellOrArchive=$_POST['sellOrArchive'];

$sql = "INSERT INTO Pictures(picture,ID) values ('$file_name','$new_ID');";
$connect->query($sql);
print($sql);
//query to insert pictures first then product
$sql = "INSERT INTO Products (name, price, picture, description, category_id, condition_code, cogs, sellOrArchive, created_at, updated_at) VALUES('$name','$price','$file_name','$description','$category','$condition','$COGS',$sellOrArchive,curdate(),curdate());";

//probably need to split these up into a seperate files, so it does the picture then goes to the other handler to do the product

                 // $results=mysqli_query($connect,$cat);

$connect->query($sql);
print($sql);
//header("location:proshow.php");
}
?>