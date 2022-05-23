<?php
include_once("connection.php");
$id1=$_GET['id'];
$id2=$_GET['c_id'];
$cmd="insert into cart (pid,c_id) values ('$id1','$id2')";

$query=mysqli_query($conn,$cmd);
if($query){
    echo"successful";
}
else{
    echo"failed";
}

$cmd="select * from product_info";
$products=mysqli_query($conn,$cmd);
$row=mysqli_num_rows($products);
for($i=0;$i<$row;$i++){
    $c_pro=mysqli_fetch_assoc($products);
    
}

?>
