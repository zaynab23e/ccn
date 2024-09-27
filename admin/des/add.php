<form action="do/doadd.php" method ="post" enctype="multipart/form-data" >


    <div class="form-group">
        <label for="name" style="font-weight: bold;">Product Name :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="price" style="font-weight: bold;">Price :</label>
        <input type="unmber" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="count" style="font-weight: bold;">count :</label>
        <input type="unmber" class="form-control" name="count">
    </div>
    <div class="form-group">
        <label for="image" style="font-weight: bold;">image :</label>
        <input type="file"  name="img">
    </div>
    <div class="form-group">
        <label for="categroy" style="font-weight: bold;">categroy :</label>
        <select name="categroy" id="" class="form-control" >
        <?php
$sele="SELECT * FROM category";
$ree=$conn->query($sele);
while($r=$ree->fetch_assoc()){
    ?>
      <option value="<?=$r['id']?>">
        <?=$r['name']?></option>
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
            <option value="<?=$re['id']?>"><?=$re['name']?></option>
<?php
}
?>
        </select>
    </div>
    <div class="form-group">
        <label for="des" style="font-weight: bold;">description :</label>
        <textarea name="des" style="height: 100px;" class="form-control"></textarea>
    
    </div>
    <button type="submit" class="btn btn-success form-control">Add Product</button>
    
    
    </form>