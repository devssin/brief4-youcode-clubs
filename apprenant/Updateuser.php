<?php
    include "./connect.php";
    
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["firstnameSend"])
    && isset($_POST["img_linkSend"])
    && isset($_POST["ageSend"])
    && isset($_POST["class_idSend"])){
        
        $sqlQuery = "UPDATE `apprenant` SET `img` = '$img_linkSend',`nom_c` = '$firstnameSend',
        `age` = '$ageSend',`id_class` = '$class_idSend ' WHERE `apprenant`.`id` = $UserIdSend;";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>