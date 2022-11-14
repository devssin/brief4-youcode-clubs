
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/login_container.css">
</head>
<body>
    <?php include "../parts/navbar.view.part.php" ?>
    <div class="login-container">
        <div class="login-img">
            <img src="../assets/images/youcode_students_1.jpg" alt="youcode students">
        </div>
        <div class="login-form">
            <div class="logic-welcome">
                <h1>Login</h1> 
                <p>welcome to youcode club please put your login crentials below to start using the app</p>
            </div>  
            <form action="../includes/login.inc.php" method="POST">
                <div class="email-form">
                    <label for="email">E-mail</label>
                    <input type="text" class="input" name="email" placeholder="put your email here ...">
                </div>
                <div class="password-form">
                    <label for="password">Password</label>
                    <input type="password"  class="input" name="pwd" placeholder="put your password here ...">
                
                </div>
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
        
    </div>
    <?php include "../parts/footer.view.part.php" ?>
</body>
</html>