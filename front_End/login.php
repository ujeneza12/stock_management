<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css" type="text/css">
</head>
<body>
    <div class="container">
                <div class="image">
                    <img src="../images/2.png" alt="image">
                </div>
            <div class="form-container">
                    <form action="slogin.php" method="post"><br>
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
                            <button name="login">login</button>
                            
                     </form>
            </div>    
    </div>
</body>
</html>