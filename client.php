<?php
include_once("connection.php");

$name=$_POST['name'];
$phone=$_POST['number'];
$add=$_POST['address'];
$cmd="insert into client (c_name,phone_num,address) values ('$name','$phone','$add')";
$cmd1="select * from client";
$client=mysqli_query($conn,$cmd1);

$row=mysqli_num_rows($client);
$check=FALSE;

for($i=0;$i<$row;$i++){
$info=mysqli_fetch_assoc($client);
if($name==$info['c_name']){
    $check=TRUE;
}
}

if($check){
   header("location:view.php");
}
else{
    $new_client=mysqli_query($conn,$cmd);
    echo"Successful";
}

// $cmd1="select c_id from client where c_name=$name";
// $c_id=mysqli_query($conn,$cmd1);
// echo"$c_id";

?>