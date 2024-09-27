<?php
include ("../coon/connect.php");
print_r($_POST);
 $id=$_GET['id'];
 //echo $id;
 echo "<pre>";

print_r($_FILES);

$er=$_FILES['img']['error'];


 $name     = $_POST  ['name'];
 $price    = $_POST  ['price']; 
 $count     = $_POST  ['count'];
 //img      = $_POST  ['img'];
 $category = $_POST  ['categroy'];
 $prand    = $_POST  ['brand'] ;
 $des      = $_POST  ['des'];

if($_FILES['img']['error']===0){



    $namei= $_FILES['img']['name'];
    $tmp=$_FILES['img']['tmp_name'];
    $size=$_FILES['img']['size'];
    //$erro=$_FILES['img']['error'];
    
       $exp= explode(".",$namei);
    
       $ext=end($exp);
    
       $allow=['jpg','jpeg','png','gif','bmb'];
    
       if(!in_array($ext,$allow)){
       echo "img type eroor";
       exit();
    
       }
    
    if($size>3000000){
    echo "the file is too large";
    exit();
    
    }
    
    
    $new= time().rand(0,1500000).$namei;
    echo $new;
    
    
    
    move_uploaded_file($tmp,"../img/$new");

    

$up="UPDATE products SET name='$name ',price='$price ',img='$new',cat='$category',prand='$prand ',count=' $count ',descr='$des ' 
WHERE id='$id'";

}else{

    $up="UPDATE products SET name='$name ',price='$price ',cat='$category',prand='$prand ',count=' $count ',descr='$des ' 
WHERE id='$id'";

}




$conn->query($up);
header("location:../product.php");


?>