<?php
    include "../apprenant/connect.php";
    
    
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["name"])
    && isset($_POST["logo"])
    && isset($_POST["description"])){
        echo $name.' '.$logo.' '.$description.' '.$club_id;
        
        $sqlQuery = "UPDATE club set nom = '$name', logo = '$logo',description = '$description'  WHERE `id` = $club_id";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>