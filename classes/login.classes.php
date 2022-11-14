<?php

    class Login extends Dbh {
        
        protected function getUser($email,$pwd){
            $stmt = $this->connect()->prepare("SELECT username,  password from admin where password = ? and username =? ;");
            
            if(!$stmt->execute(array($pwd,$email))){
                $stmt = null;
                header("location: ../index.php?error=stmtFailed");
                exit();
            }
            
            if($stmt->rowCount() == 0){
                //no user found 
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }
            
            // fetch data as ass array ...  
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["username"] = $user[0]["username"];
            // $_SESSION["adminId"] = $user[0]["FirstName"];
            $stmt = null;
        }
    }
    
    
?>