<html>
    <head>
    <title>access denid!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
</html>
<?php
include_once 'connection.php';

$name=$_POST['name'];
$pass=$_POST['password'];

$result=mysqli_query($conn,"select * from admin");

if($result){
    echo"successfull";
}
else{
echo"failed to fetch";
}
$row=mysqli_num_rows($result);

$check=FALSE;
for($i=0;$i<$row;$i++){
    $data=mysqli_fetch_assoc($result);
    
    if($name==$data['admin_name'] && $pass==$data['password']){
            $check=TRUE;
            break;
    }
   
    
}

if($check==FALSE){
    echo"<div class='d-flex flex-column justify-content-center  vh-100 align-items-center'>
    <h1 class='p-5 text-center bg-warning '>Access Denied</h1>
    </div>
    ";
}
else{
    header('location:adminPortal.php');
}


?>