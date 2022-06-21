<?php
require_once('operations.php');

if(isset($_POST['reg'])){
    $product_name = $_POST['productname'];
    $brand = $_POST['brand'];
    $phone = $_POST['telephone'];
    $supplier = $_POST['supplier'];

    $create_product = $create->products($product_name,$brand, $phone, $supplier);
    if($create_product){
        echo header("location: inventory.php");
    }else{
        echo "Failed TO Register Your Product";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <div class="container">
                <div class="image">
                    <img src="../images/2.png" alt="image">
                </div>
            <div class="form-container">
                    <form  method="post"><br>
                        <div class="box">
                            <label>ProductName </label><input type="text" name="productname">
                        </div>
                        <br>
                        <div class="box">
                            <label>Brand </label><input type="text" name="brand">
                        </div><br>
                        <div class= "box">
                                <label>Supplier telephone</label><input type ="text" name = "telephone" pattern =[0-9]{10} >
                            </div><br>
                        <div class="box">
                            <label>Supplier </label><input type="text" name="supplier">
                        </div>
                        <br>
                        <input type="submit" name="reg" value="Reg_Pro" style="width: 9rem;height: 2rem;border: none;margin-top: 10rem;margin-left: 9rem;border-radius: 8px;background-color:#59A59B;font-weight: bold;">
                            
                     </form>
            </div>    
    </div>
</body>
</html>