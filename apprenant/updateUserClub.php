<?php

$query =  "update membre  set id_club =1 WHERE id_membre = 3";


    include "../apprenant/connect.php";
    // member_idSend: userIdForUpdateClub,
                    // club_idSend: valueSelectClub
    extract($_POST);
    
    if(isset($_POST) && isset($_POST["member_idSend"])
    && isset($_POST["club_idSend"])){
        
        $sqlQuery = "UPDATE membre set id_club = '$club_idSend' WHERE `id_membre` = $member_idSend";
        
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