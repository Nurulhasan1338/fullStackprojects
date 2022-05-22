<?php
include_once("connection.php");
if($conn->connect_error){
        echo"failed<br>";
    }
    else{
        echo"successful<br>";
    }
    $id=$_GET['id'];
    $cmd="delete from product_info where pid=$id";
    $data=mysqli_query($conn,$cmd);
    if($data){
        header('location:adminPortal.php');
}
else{
    echo"<br>failed";
}
 ?>