<?php
$conn=new mysqli('localhost','root','','ecommerce');

if($conn->connect_error){
    echo"failed to connect the data base <br>";
}

?>