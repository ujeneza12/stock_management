<?php
session_start();
require_once('db_config.php');
require_once('operations.php');

$result = $create->view_record();
$display = $create->display_message();

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
                        <h2 class="text-center text-dark">user Record</h2>
                    </div>
                    <div class="card-body">
                        <?php  $display;
                              $create->display_message();
                        ?>
                       

                        <table class="table table-bordered">
                            <tr>

                               <th style="width:10%">ID</th>
                               <th style="width:20%">Firstname</th>
                               <th style="width:20%">Lastname</th>
                               <th style="width:20%">Telephone</th>
                               <th style="width:20%">Gender</th>
                               <th style="width:20%">Nationality</th>
                               <th style="width:25%">Username</th>
                               <th style="width:25%">Email</th>
                               <th style="width:23%" colspan="2">Operations</th>
                            </tr>
                            <?php while($row=mysqli_fetch_assoc($result)){

?>
                            <tr>
                                <td><?=$row['userId']?></td>
                                <td><?=$row['firstName']?></td>
                                <td><?=$row['lastName']?></td>
                                <td><?=$row['telephone']?></td>
                                <td><?=$row['gender']?></td>
                                <td><?=$row['nationality']?></td>
                                <td><?=$row['username']?></td>
                                <td><?=$row['email']?></td>
                                <td><a href="edit.php?id=<?php echo $row['userId'] ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row['userId'] ?>" class="btn btn-danger">Delete</a></td>
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