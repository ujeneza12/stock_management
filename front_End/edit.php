<?php
require_once('db_config.php');
require_once('operations.php');
$id = $_GET['id'];
$result = $create->get_record($id);
$data =mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css" type="text/css">
   

</head>
<body>
    <div class="container">
                <div class="image">
                    <img src="../images/inventory.png" alt="image">
                </div>
            <div class="form-container">
                    <form method="post"><br>
                                <div class="box">
                                    <label>Firstname</label><input type="text" name="firstname" value=<?php echo $data['firstName'] ?>>
                                </div><br>
                                <div class="box">
                                    <label>Lastname </label><input type="text" name="lastname" value=<?php echo $data['lastName'] ?>>
                                </div><br>
                            <div class= "box">
                                <label>telephone</label><input type ="text" name = "telephone" pattern =[0-9]{10} value=<?php echo $data['telephone'] ?> >
                            </div><br>
                            <div class="box">
                                <label>Gender </label>
                                            <?php
                    $checkMale= $checkedFemale = '';
                    if($data['gender']=='male'){
                        $checkedMale= "checked";
                        $checkedFemale = '';
                    }elseif($data['gender']=='female'){
                        $checkedFemale = "checked";
                        $checkedMale = '';
                    }
           ?>
            <input type="radio" name="gender" value="male" <?php  echo $checkedMale ?>>male
            <input type="radio" name="gender" value="female" <?php echo $checkedFemale ?> >female</div> <br>
                            
                            <div class="box">
                                <label>nationality</label>
                                <input list="list" name="nationality"  value=<?php echo $data['nationality'] ?>>
                                <datalist id="list">
                                        <option value="rwanda">
                                        <option value="burundi ">
                                        <option value="uganda">
                                        <option value="india">
                                    
                                        
                                </datalist>
                            </div><br>
                
                        <div class="box">
                            <label>UserName </label><input type="text" name="username" value=<?php echo $data['username'] ?> >
                        </div>
                        <br>
                        <div class="box">
                            <label>Email </label><input type="email" name="email" value=<?php echo $data['email'] ?>>
                        </div><br>
                            <br>
                            <input type="submit" name="update" value="update" style="width: 9rem;height: 2rem;border: none;margin-top: 5rem;margin-left: 8rem;border-radius: 8px;background-color:#59A59B;font-weight: bold;">
                            
                     </form>
            </div>    
    </div>
</body>
</html>