<?php
    include "../apprenant/connect.php";
    
    
    extract($_POST);
    var_dump($_POST);
    if(isset($_POST["name"])
    && isset($_POST["logo"])
    && isset($_POST["description"])){
        $date = date('Y-m-d');
        $sqlQuery = "INSERT INTO club (nom,logo,description,date_creation)
        VALUES('$name','$logo','$description' ,'$date')";
        
        $result = mysqli_query($conn,$sqlQuery);
        
        echo "row effect ->". $result;
    }else{
        echo "something is not set ";
    }
    ?>