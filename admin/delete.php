<?php
$id=$_GET['id'];
//echo $id;
include ("coon/connect.php");
 $delete ="DELETE FROM products WHERE id='$id'";
 $conn->query($delete);
 header("location:product.php");


