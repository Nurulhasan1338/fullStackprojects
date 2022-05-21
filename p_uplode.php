<?php
include_once("connection.php");

$pname=$_POST['pname'];
$price=$_POST['price'];
$des=$_POST['descrip'];
$img=$_FILES['img'];
$img_name="$pname.jpg";
move_uploaded_file($img['tmp_name'],"productsImage"/$img_name);

$query_status= mysqli_query($conn,"INSERT INTO product_info (p_name,price,description,img)
VALUES ('$pname','$price','$des','')");

if($query_status){
header("location:adminPortal.php");
}
else{
echo"<br>failed";
}

?>