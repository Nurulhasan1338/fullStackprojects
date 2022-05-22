<?php
include_once("connection.php");

$pname=$_POST['pname'];
$price=$_POST['price'];
$img=$_FILES['img'];
$des=$_POST['descrip'];
$stock=$_POST['stock'];
$img_name="productsImage/$pname.jpg";
move_uploaded_file($img['tmp_name'],$img_name);

$query_status= mysqli_query($conn,"INSERT INTO product_info (p_name,price,description,stock_left)
VALUES ('$pname','$price','$des','$stock')");

if($query_status){
header("location:adminPortal.php");
}
else{
echo"<br>failed";
}

?>