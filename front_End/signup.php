<?php
require_once('db_config.php');
require_once('operations.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css" type="text/css">
   
    <style>
    .box{
    position: relative;
    left:3rem;
    top:2rem;
    padding-top:0.4rem; 
}
    </style>
</head>
<body>
    <div class="container">
                <div class="image">
                    <img src="../images/inventory.png" alt="image">
                </div>
            <div  class="form-container">
                    <form method="post"><br>
                                <div class="box">
                                    <label>Firstname</label><input type="text" name="firstname">
                                </div><br>
                                <div class="box">
                                    <label>Lastname </label><input type="text" name="lastname">
                                </div><br>
                            <div class= "box">
                                <label>telephone</label><input type ="text" name = "telephone" pattern =[0-9]{10} >
                            </div><br>
                            <div class="box">
                                <label>Gender </label>
                                <input type="radio" name="gender" value="male" >male
                                <input type="radio" name="gender" value="female" >female
                            </div> <br>
                            <div class="box">
                                <label>nationality</label>
                                <input list="list" name="nationality" >
                                <datalist id="list">
                                        <option value="rwanda">
                                        <option value="burundi ">
                                        <option value="uganda">
                                        <option value="india">
                                    
                                        
                                </datalist>
                            </div><br>
                
                        <div class="box">
                            <label>UserName </label><input type="text" name="username" >
                        </div>
                        <br>
                        <div class="box">
                            <label>Email </label><input type="email" name="email" >
                        </div><br>
                        <div class="box">
                            <label>Password </label><input type="password" name="password" >
                        </div>
                            <br>
                            <input type="submit" name="reg" value="register" style="width: 9rem;height: 2rem;border: none;margin-top: 46px;margin-left: 8rem;border-radius: 8px;background-color:#59A59B;font-weight: bold;">
                            
                     </form>
            </div>    
    </div>
</body>
</html>