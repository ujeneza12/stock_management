<?php
require_once('operations.php');
$result = $create->read_products();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

</head>
<body class="bg-primary">
    <div class="container">
        <div class="row"> 
            <div class="col">
                <div class="card">
                <form method="post" action="s.php">
                    <input type= "text" name= "search" placeholder= "Search..."> 
                    <button type= "submit">search</button>

                    </form>
                    <div class="card-header">
                        <h2 class="text-center text-dark">product Record</h2>
                    </div>
                    <div class="card-body">
                       

                        <table class="table table-bordered">
                            <tr>

                               <th style="width:10%">productId</th>
                               <th style="width:16%">product_Name</th>
                               <th style="width:16%">brand</th>
                               <th style="width:16%">supplier_phone</th>
                               <th style="width:16%">supplier</th>
                               <th style="width:20%">added_date</th>
                               <th style="width:23%" colspan="2">Operations</th>
                            </tr>
                            <?php while($row=mysqli_fetch_assoc($result)){

?>
                            <tr>
                                <td><?=$row['productId']?></td>
                                <td><?=$row['product_Name']?></td>
                                <td><?=$row['brand']?></td>
                                <td><?=$row['supplier_phone']?></td>
                                <td><?=$row['supplier']?></td>
                                <td><?=$row['added_date']?></td>
                                <td><a href="update_products.php?id=<?php echo $row['productId'] ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete_products.php?del_id=<?php echo $row['productId'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>

                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>

</body>
</html>