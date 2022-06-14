<?php
require_once('db_config.php');

    class Operations extends Dbconfig
    {
//insert record to database
        public function Store_Record()
            {
                global $db;
                if(isset($_POST['reg'])){
                  $firstname = $db->check($_POST['firstname']);
                  $lastname = $db->check($_POST['lastname']);
                  $telephone = $db->check($_POST['telephone']);
                  $gender = $db->check($_POST['gender']);
                  $nationality = $db->check($_POST['nationality']);
                  $username = $db->check($_POST['username']);
                  $email = $db->check($_POST['email']);
                  $password = $db->check(hash('SHA512',$_POST['password']));

                  if($this->insert_record($firstname,$lastname,$telephone,$gender,$nationality,$username,$email,$password)){
                      echo "<div> your record have been saved in database </div>";
                  }else{
                    echo "<div> failed </div>";
                  }
                }
            }

            //insert record query 
            function insert_record($firstname,$lastname,$telephone,$gender,$nationality,$username,$email,$password)
            {
                global $db;
                $query = "INSERT into `users` (firstName,lastName,telephone,gender,nationality,username,email,password) values ('$firstname','$lastname','$telephone','$gender','$nationality','$username','$email','$password')" ;
                $result = mysqli_query($db->connection,$query);
                return $result;
            }
            // view database record
            public function view_record()
            {
                global $db;
                $query ="select * from users ";
                $result = mysqli_query($db->connection,$query);
                return $result;
            }
            // get particular record

            public function get_record($id){

                global $db;
                $sql ="select * from `users` where userId = '$id'";
                $data = mysqli_query($db->connection,$sql);
                return $data;  
            }
            public function update(){
                global $db;
                if(isset($_POST['update'])){
                    $id= $_GET['id'];
                    $firstname = $db->check($_POST['firstname']);
                    $lastname = $db->check($_POST['lastname']);
                    $telephone = $db->check($_POST['telephone']);
                    $gender = $db->check($_POST['gender']);
                    $nationality = $db->check($_POST['nationality']);
                    $username = $db->check($_POST['username']);
                    $email = $db->check($_POST['email']);
                
                    if($this->update_record($id,$firstname,$lastname,$telephone,$gender,$nationality,$username,$email)){
                    
                        $this->set_message('<div class="alert alert-success">your record has been updated</div>');
                        header('Location:view.php');
                    }else{
                        $this->set_message('<div  class="alert alert-danger">your record has been not updated</div>');

                    }
            
                   
                 }
            }
            //update function 2

            public function update_record($id,$first,$last,$phone,$gender,$nation,$user,$email)
            {
                global $db;
                $sql="update users set firstName='$first',lastName='$last',telephone='$phone' ,gender='$gender',nationality='$nation',username='$user',email='$email' where userId='$id'";
                $result=mysqli_query($db->connection,$sql);
                if($result){
                    return true;
                }else{
                    return false;  
                }
               
            }

            //set Session message

            public function set_message($message)
            {
                if(!empty($message)){
                    $_SESSION['Message']=$message;
                    
                }else{
                    $message = "";
                }
            }

            //display session message

            public function display_message()
            {
                if(isset($_SESSION['Message'])){
                    echo $_SESSION['Message'];
                    unset($_SESSION['Message']);
                }
            }
            //delete record from database

            public function delete_record($id)
            {
               
                global $db;
                $sql = "DELETE FROM users where userId = $id";
                $result = mysqli_query($db->connection,$sql);
                if($result){
                    echo $result;
                    return true;
                }else{
                    return false;
                }
            }


    }
    
    
    $create = new Operations();
    $create->Store_Record();
    $create->update(); 
    // $create->delete_record($id);

?>