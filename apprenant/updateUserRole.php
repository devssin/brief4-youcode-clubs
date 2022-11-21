<?php

    include "../apprenant/connect.php";
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["member_idSend"])
    && isset($_POST["role_Send"])){
        
        $sqlQuery = "UPDATE membre set role = '$role_Send' WHERE `id_membre` = $member_idSend";
        
        $result = mysqli_query($conn,$sqlQuery);
        $sqlQuery =  " SELECT * FROM membre WHERE `id_membre` = $member_idSend";
        $selectRowCount = mysqli_query($conn,$sqlQuery);
        $rowcount=mysqli_num_rows($selectRowCount);
        if($rowcount==0){
            $queryInerstMembre = "INSERT INTO membre(id_membre,id_club) VALUES($member_idSend,$club_idSend);";
            $result = mysqli_query($conn,$queryInerstMembre);
            $rowcount=mysqli_num_rows($selectRowCount);
        }
        echo "row effect ->". $rowcount;
    }else{
        echo "something is not set ";
    }

?>