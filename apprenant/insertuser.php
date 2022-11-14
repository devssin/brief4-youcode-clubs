<?php
    include "./connect.php";
    
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["firstnameSend"])
    && isset($_POST["img_linkSend"])
    && isset($_POST["ageSend"])
    && isset($_POST["class_idSend"])){
    
        $sqlQuery = "INSERT INTO `apprenant` (nom_c,age,img,id_class) 
        VALUES('$firstnameSend','$ageSend','$img_linkSend','$class_idSend')";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>