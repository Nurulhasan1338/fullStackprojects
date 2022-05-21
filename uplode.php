<?php
$img=$_FILES['pImage'];
$name="nurul";
$im="$name.jpg";
move_uploaded_file($img['tmp_name'],'productsImage/ $im.jpg');
?>