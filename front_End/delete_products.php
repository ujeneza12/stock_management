<?php

require_once('db_config.php');
require_once('operations.php');

if(isset($_GET['del_id'])){
    global $db;
    $productId = $_GET['del_id'];
    $delete = $create->delete_product($productId);
    if($delete){
        echo header("Location:view_products.php");
    }else{
        echo "can't delete";
    }   
    echo $create->delete_product($productId);
    
}


?>