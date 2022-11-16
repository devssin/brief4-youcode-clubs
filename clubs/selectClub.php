<?php
    include "../apprenant/connect.php";
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["club_id"])){
    
        $member_idSend = $_POST["club_id"];
        $sqlQuery = "SELECT *  FROM club WHERE  id = $club_id";
        
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