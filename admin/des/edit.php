<?php
$id=$_GET['id'];
$se="SELECT * FROM products WHERE id='$id'";
$ro=$conn->query($se);
$roww=$ro->fetch_assoc();


?>


<form action="do/doedit.php?id=<?=$roww['id']?>" method ="post" enctype="multipart/form-data" >


    <div class="form-group">
        <label for="name" style="font-weight: bold;">Product Name :</label>
        <input type="text" class="form-control" name="name" value="<?=$roww['name']?>">
    </div>
    <div class="form-group">
        <label for="price" style="font-weight: bold;">Price :</label>
        <input type="unmber" class="form-control" name="price" value="<?=$roww['price']?>">
    </div>
    <div class="form-group">
        <label for="count" style="font-weight: bold;">count :</label>
        <input type="unmber" class="form-control" name="count" value="<?=$roww['count']?>">
    </div>
    <div class="form-group">
        <label for="image" style="font-weight: bold;">image :</label>
        <input type="file"  name="img" >
        <img src="img/<?=$roww['img']?>"style="width: 100px;higth: 100px;">
    </div>
    <div class="form-group">
        <label for="categroy" style="font-weight: bold;">categroy :</label>
        <select name="categroy" id="" class="form-control" >
        <?php



 $sel="SELECT * FROM category";
$re=$conn->query($sel);
while($ro=$re->fetch_assoc()){
    ?>
      <option value="<?=$ro['id']?>"<?php
     if($ro['id']==$roww['cat']){
        echo "selected";
     }
      ?>>
        <?=$ro['name']?>  </option>
    <?php
}
    ?>
</select>
    </div>
    <div class="form-group">
        <label for="brand" style="font-weight: bold;">brand :</label>
        <select name="brand" id="" class="form-control" >
<?php
        $sel="SELECT *FROM prand";
$reo=$conn->query($sel);
while($re=$reo->fetch_assoc()){
    ?>
            <option value="<?=$re['id']?>"<?php
            if($re['id']==$roww['prand']){
                echo "selected";
             }
              
            ?>>  
            <?=$re['name']?></option>
<?php
}
?>
        </select>
    </div>
    <div class="form-group">
        <label for="des" style="font-weight: bold;">description :</label>
        <textarea name="des" style="height: 100px;" class="form-control"><?=$roww['descr']?></textarea>
    
    </div>
    <button type="submit" class="btn btn-success form-control">Add Product</button>
    
    
    </form>