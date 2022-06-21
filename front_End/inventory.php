<?php

require_once('operations.php');
    if(isset($_POST['reg_Pro'])){
        $product_name = $_POST['productname'];
        $quantity = $_POST['quantity'];
        
        $create_inventory = $create->inventory($product_name,$quantity);
        echo $create_inventory;
        if($create_inventory){
           echo header("location:outgoing.php");
        }else{
            echo "Failure";
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invetory</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="container">
                <div class="image">
                    <img src="../images/images.jpg" alt="image">
                </div>
            <div class="form-container">
                    <form  method="post"><br>
                        <div class="box">
                            <label>Register product Name </label><input type="text" name="productname">
                        </div>
                        <br>
                        <div class="box">
                            <label>Quantity of products </label><input type="number" name="quantity">
                        </div>
                        <br>
                        <input type="submit" name="reg_Pro" value="Reg_Pro" style="width: 9rem;height: 2rem;border: none;margin-top: 10rem;margin-left: 9rem;border-radius: 8px;background-color:#59A59B;font-weight: bold;">
                            
                     </form>
            </div>    
    </div>
</body>
</html>