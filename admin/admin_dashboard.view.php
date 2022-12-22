<?php include "../includes/isLogedIn.inc.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youcode clubs admin dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include "../parts/navbar.view.part.php" ?>
    <div class="admin-dashboard-container">
        <h1>Admin dashboard</h1>
        <div class="cards-container">
            <div class="admin-option-card students-card">
                <h1> <a href="../apprenant/user.php">students</a> </h1>
            </div>
            <div class="admin-option-card clubs-card">
                <h1><a href="../clubs/club.php">clubs</a></h1>
            </div>
            <div class="admin-option-card events-card">
                <h1>events</h1>
            </div>
            <div class="admin-option-card events-card">
                <h1>coming soon</h1>
            </div>
        </div>
    </div>
    <?php include "../parts/footer.view.part.php" ?>
    
    <?php include "../includes/script.inc.php" ?>

</body>
</html>