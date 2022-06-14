<?php

require_once('db_config.php');
require_once('operations.php');

if(isset($_GET['id'])){
    global $db;
    $id = $_GET['id'];
    $result =$create->delete_record($id);

    echo $result;
    if($result){
        $create->set_message("<div class='alert alert-danger'> your has been deleted </div>");
        header("location:view.php") ;
    }else{
        $create->set_message("<div class='alert alert-danger'> somwthing went wrong</div>");
      
    }
    
}

?>