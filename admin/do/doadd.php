<?php
include ("../coon/connect.php");
echo"<pre>";
//print_r($_POST);
//print_r($_FILES);

$name      =$_POST['name'] ;
 $price    =$_POST['price'] ;
// $img       =$_POST['img'];
 $category  =$_POST['categroy']; 
 $brand     = $_POST['brand'];
$count     =$_POST['count'];
$des       =$_POST['des']  ;

$namei= $_FILES['img']['name'];
$tmp=$_FILES['img']['tmp_name'];
$size=$_FILES['img']['size'];
$erro=$_FILES['img']['error'];

   $exp= explode(".",$namei);

   $ext=end($exp);

   $allow=['jpg','jpeg','png','gif','bmb'];

   if(!in_array($ext,$allow)){
   echo "img type error";
   exit();

   }

if($size>3000000){
echo "the file is too large";
exit();

}


$new= time().rand(0,1500000).$namei;
//echo $new;



move_uploaded_file($tmp,"../img/$new");


   

$insert="INSERT INTO products (name,price,img,cat,prand,count,descr) VALUES ('$name','$price','$new','$category ',' $brand ',' $count','$des ')";
$e=$conn->query($insert);

header("location:../product.php");