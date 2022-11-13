<nav>
        <div class="navbar-container">
            <div class="nav-logo">
                <!-- <a href="../../index.php"><h1 class="text-blue-600">Youcode <span class="text-orange-600">clubs</span></h1></a> -->
                <a href="../index.php">
                <div class="navbar-youcode-logo">
                    <img src="../assets/images/logo-youcode-ma.png" alt="youcode logo">
                </div></a>
            </div>
            <div class="nav-login">
                <!-- <button><a href="#">login</a></button> -->
                <?php
                    if(isset($_SESSION["username"]))
                    {
                ?>
                    <li><a href="../admin/admin_dashboard.view.php"><?php echo $_SESSION["username"]?></a></li>
                    <li><a href="../includes/logout.inc.php"> Log out </a></li>
                <?php
                    }
                    else
                    {
                ?>
                    <li><a href="../login/login.view.php">Login </a></li>
                <?php
                    }
                ?>
            </div>
        </div>
</nav>