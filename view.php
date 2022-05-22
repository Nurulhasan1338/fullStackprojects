<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">

<head>
    <title>My store</title>
    <style>
        .icon{
            width: 40px;
        }
        .design{
            background-image: url("productsImage/bg1.jpg");
            background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /* backdrop-filter: blur(3px); */
  width: 83%;
    height: 89%;
        }
    .main2{
        color: #e2dcdc;
    font-size: 134px;
    backdrop-filter: blur(4px);
    padding-top: 20px;
    height: 100%;
    width: 100%;
    font-weight:200;
    background-color: #00000038;

    }
    </style>
   
</head>
<body>
</body>
</html>


<?php
include_once("connection.php");
echo"
    <div class='d-flex justify-content-center vh-100 align-items-center bg-warning'>
    <div class='d-flex justify-content-center align-items-center design' >
    <h1 class='main2'> The<br>Road Side<br>Store</h1>
    </div>
    </div>
    <div class='d-flex justify-content-between  mt-5 mt-4'>
    <h2 class='p-2 bg-warning'>New arrivals</h2>
    <a herf='#' class='btn text-center btn-warning mr-2' style='position: absolute;left: 30cm;margin: 9px;'><img src='productsImage/cart.png' class='icon'></a>
    </div>
    <div class='d-flex flex-wrap align-items-start p-2 ' style='margin-left: 105px;'> 
";
$cmd="select * from product_info";
$product=mysqli_query($conn,$cmd);
$row=mysqli_num_rows($product);
for($i=0;$i<$row;$i++){
    $info=mysqli_fetch_assoc($product);
    $id=$info['pid'];
$pname=$info['p_name'];
$price=$info['price'];
$descrp=$info['description'];
echo"
<div class='card m-4 w-25 vh-30 '>
            <img src='productsImage/$pname.jpg' class='card-img-top' alt='product image'>
            <div class='card-body'>
                <h5 class='card-title'>$pname<br><strong>$$price</strong></h5>
            <p class='card-text'>$descrp</p>
             
             <a href='cart.php?id=$id' class='btn btn-warning m-2'>add to cart</a>
             <a href='#' class='btn btn-success m-2'>Buy</a>
             
            </div>
        </div>

";

}
echo"
</div>

</div>
";



?>