<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php include "./parts/navbar.view.part.php" ?>
    <?php include "./parts/header.view.part.php" ?>
    <div class="container">
        <!-- <h1>Welcome Page Home </h1> -->
        <div class="our-clubs-title">
            <div class="our-clubs-title-background">
                <h1 >Our Clubs</h1>
            </div>
        </div>
    </div>
    <?php include "./parts/footer.view.part.php" ?>
    
</body>
</html>