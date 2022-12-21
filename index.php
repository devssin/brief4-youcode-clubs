<?php
session_start();
$pdo = new PDO("mysql:host=localhost;port=3307;dbname=youcode_clubs", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM club ORDER BY date_creation desc limit 6');
$statement->execute();

$clubs = $statement->fetchAll(PDO::FETCH_ASSOC);
$club_first = array_slice($clubs, 0, 3);
$club_second = array_slice($clubs, 3, 3);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="bg-light">
    <?php include "./parts/navbar.view.part.php" ?>
    <?php include "./parts/header.view.part.php" ?>
    <div class="container" style="min-height: 50vh;">
        <!-- <h1>Welcome Page Home </h1> -->
        <div class="our-clubs-title mt-3">
            <div class="our-clubs-title-background ">
                <h1 class="text-center">Our Clubs</h1>
            </div>

            <div class="container my-5">
                <div class="rwo">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators mt-5">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active indic" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="indic" aria-label="Slide 2"></button>
                            </div>

                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php foreach ($club_first as $key => $club) : ?>
                                            <div class="col-md-4 mb-5">
                                                <div class="single-box bg-white p-3 text-center rounded">
                                                    <div class="img-area"><img src="<?php echo $club['logo']; ?>" alt=""></div>
                                                    <div class="img-text">
                                                        <h2><?php echo $club['nom']; ?></h2>
                                                        <p><?php echo $club['description'] ?></p>
                                                    </div>

                                                    <div class="membres">
                                                        <h6>Club Membres</h6>
                                                        <?php
                                                        $id = $club['id'];
                                                        $query = "SELECT img FROM apprenant JOIN membre on apprenant.id = membre.id_membre join club on membre.id_club = club.id WHERE club.id = $id";
                                                        $statement = $pdo->prepare($query);
                                                        $statement->execute();
                                                        $membres = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach ($membres as $key => $membre) :

                                                        ?>
                                                            <img src="<?php echo $membre['img'] ?>" alt="" class="membre-img">



                                                        <?php endforeach; ?>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">
                                        <?php foreach ($club_second as $key => $club) : ?>
                                            <div class="col-md-4 mb-5">
                                                <div class="single-box p-3 text-center bg-white rounded">
                                                    <div class="img-area"><img src="<?php echo $club['logo']; ?>" alt=""></div>
                                                    <div class="img-text">
                                                        <h2><?php echo $club['nom']; ?></h2>
                                                        <p><?php echo $club['description']; ?></p>
                                                    </div>
                                                    <div class="membres">
                                                        <h6>Club Membres</h6>
                                                        <?php
                                                        $id = $club['id'];
                                                        $query = "SELECT img FROM apprenant JOIN membre on apprenant.id = membre.id_membre join club on membre.id_club = club.id WHERE club.id = $id";
                                                        $statement = $pdo->prepare($query);
                                                        $statement->execute();
                                                        $membres = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach ($membres as $key => $membre) :

                                                        ?>
                                                            <img src="<?php echo $membre['img'] ?>" alt="" class="membre-img">



                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./parts/footer.view.part.php" ?>
                                                            


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <?php include("./includes/script.inc.php"); ?>                                                            
</body>

</html>