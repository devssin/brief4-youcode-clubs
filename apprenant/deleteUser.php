<?php
    include "./connect.php";
    
    
    extract($_POST);
    if(isset($_POST) && isset($_POST["member_idSend"])){
    
        $member_idSend = $_POST["member_idSend"];
        $sqlQuery = "DELETE FROM apprenant WHERE  id = $member_idSend";
        
        $result = mysqli_query($conn,$sqlQuery);
        die(mysqli_error($conn));
        echo "row effect ->". $result;
    }else{

        echo "something is not set ";
    }
    ?>