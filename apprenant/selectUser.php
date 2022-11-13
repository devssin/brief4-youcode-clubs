<?php
    include "./connect.php";
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["member_idSend"])){
    
        $member_idSend = $_POST["member_idSend"];
        $sqlQuery = "SELECT *  FROM apprenant WHERE  id = $member_idSend";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        $respone ; 
        while($row=mysqli_fetch_assoc($result)){
            
            $respnoe =  $row;
        }
        
        echo json_encode($respnoe);
    }else{
        echo "something is not set ";
    }


?>