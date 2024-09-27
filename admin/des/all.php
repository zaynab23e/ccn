<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table</title>
</head>

<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="thead-dark">

                <tr>
                    <th>id</th>
                    <th>product</th>
                    <th>img</th>
                    <th>category</th>
                    <th>prand</th>
                    <th>price</th>
                    <th>desc</th>
                    <th>controller</th>
                </tr>
            </thead>

            <?php
$select="SELECT * FROM products " ;
$result=$conn->query($select);
while($row=$result->fetch_assoc()) {
 ?>

            <tbody>
                    <td><?=$row['id']?></td>
                    <td><?=$row['name']?></td>
                    <td> <img src="img/<?=$row['img']?>" style="width:100px;higth:100px;" ></td>
                <td>
                     <?php
                    $id=$row['cat'];
                    $select ="SELECT * FROM category WHERE id ='$id' ";
                    $re=$conn->query($select);
                    $ro = $re->fetch_assoc();
                    echo $ro ['name'];   
                     ?>
                </td>

                <td>
                    <?php
                     $idd=$row['prand'];
                     $sele ="SELECT * FROM prand WHERE id ='$idd' ";
                     $re=$conn->query($sele);
                     $r = $re->fetch_assoc();
                     echo $r['name'];   
                     ?>
                </td>


                    <td><?=$row['price']?></td>
                    <td><?=$row['descr']?></td>
                    <td>
                        <a href="?action=edit&&id=<?=$row['id']?>" class="btn btn-warning">edit prodcut</a>
                        <a href ="delete.php?id=<?=$row['id']?>" class="btn btn-danger"> delete</a>
                    </td>
                </tr>
            </tbody>
            
            <?php
        }
        ?>   
        </table>
        <a href="?action=add" class="btn btn-success">add prodcut</a>
    </div>

</body>
</html>
