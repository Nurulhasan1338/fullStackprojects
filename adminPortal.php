<!DOCTYPE html>
<html lang="en">
<head>
    <title>product list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <style>
       .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  top:72px;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
    background-color: #ffc107;
    color: #100d0d;
    border: 1px solid gray;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  position: relative;
  padding-top:86px;
}
.header{
    position:fixed;
    z-index: 1;
}
   </style>
</head>

</html>

<?php
include_once('connection.php');

$cmd="select * from product_info";
$product=mysqli_query($conn,$cmd);
$row=mysqli_num_rows($product);

echo"
  
  <div class='w-100 bg-warning header'>
      <div class='me-auto p-2'><h1>Admin portal</h1></div>
  </div>
  
  <div class='sidebar'>
  <a class='active' href='#home'>Home</a>
  <a href='uplode_product.html'>Add product</a>
  <a href='#contact'>add new admin</a>
  <a href='#about'>orders</a>
  </div>
  <div class='content'>

      <h2>Available items</h2>
      
      <div class='d-flex flex-wrap align-items-start'>
          
      
";

for($i=0;$i<$row;$i++){
        $info=mysqli_fetch_assoc($product);
        $id=$info['pid'];
    $pname=$info['p_name'];
    $price=$info['price'];
    $descrp=$info['description'];
    $stock=$info['stock_left'];
    echo"
    <div class='card m-4 w-25 vh-30 '>
                <img src='productsImage/$pname.jpg' class='card-img-top' alt='product image'>
                <div class='card-body'>
                    <h5 class='card-title'>$pname<br><strong>$$price</strong></h5>
                <p class='card-text'>$descrp</p>
                <table class='w-100'>
                    <tr> <td><strong>stocks</strong></td>
                    <td>$stock units left</td>
                </tr>
                 </table>
                 
                 <a href='delete.php?id=$id' class='btn btn-danger m-2'>delete</a>
                 <a href='#' class='btn btn-primary m-2'>edit</a>
                 
                </div>
            </div>

    ";
    
    }
    echo"
    </div>
    
    </div>
";
    
    ?>