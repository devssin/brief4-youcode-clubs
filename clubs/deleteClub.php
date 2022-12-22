<?php
    include "../apprenant/connect.php";
    
    extract($_POST);
    if(isset($_POST) && isset($_POST["club_id"])){
    
        $club_id = $_POST["club_id"];
        $sqlQuery = "DELETE FROM club WHERE  id = $club_id";
        $result = mysqli_query($conn,$sqlQuery);
        echo 'doone';
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>