<?php

if (isset($_POST["submit"])) {
    //grabbing the data

    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    //Instantiate Signup Class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../controller/login.contr.php";

    $login = new loginController($email, $pwd);

    //Runing error handlers and user login
    $login->loginUser();
    //Going to back to front page
    header("location: ../index.php?error=none");
}