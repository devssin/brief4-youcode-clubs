<?php
    include "./connect.php";
    if(isset($_POST["displaySend"])){
        $sql = "SELECT * FROM club" ;
        
        
        $result = mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
        
            $club_id =$row['id'];
            $club_nom = $row['nom'];
            $options .="<option value=$club_id>$club_nom</option>";
        }
        echo $options;
    }

?>