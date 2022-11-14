<?php
    $conn = new mysqli("localhost",'root','','youcode_clubs',3307);
    
    // if($conn){
    //     echo "connection successful";
    // }else{
    //     echo (mysqli_error($conn));
    // }
    
    if(!$conn){
        die(mysqli_error($conn));
    }
?>