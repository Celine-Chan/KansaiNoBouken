<?php
session_start();
require_once '../controllers/controller_userAccount.php';
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Utilisateur</title>
    <?php include('include/header.php') ?>
</head>

<body>

    <?php include('include/navbar.php') ?>

    <div class="banniereInscriptionImg">
        <img src="../assets/img/banniere/banniereAdmin.jpg" alt="admin" class="img-fluid adminImg">
    </div>

    <div class="d-flex justify-content-end">
        <a href="disconnection.php" class="btn btn-danger btn-sm" type="button">Se déconnecter</a>
    </div>

    <div class="container mt-2 text-center text-dark">
        <h1><img src="../assets/img/kitsune.svg" alt="kitsuneprofil" class="kitsuneProfil border border-dark rounded px-2 py-2"> Bienvenue <?php echo $_SESSION['users_pseudo'] ?></h1>
    </div>

    <div class="container d-flex mt-5 justify-content-around">
        <div class="card col-8 mt-5 row">
            <div class="card-body">
                <div class="container d-flex text-dark">
                    <h2>Mes informations personnelles :</h2>
                </div>

                <div class="container text-dark mt-5">
                    <p>Mon Nom : <?php echo $usersDetail['users_lastname'] ?></p>
                    <p>Mon Prénom : <?php echo $usersDetail['users_firstname'] ?></p>
                    <p>Ma date de naissance : <?php echo $usersDetail['users_birthdate'] ?></p>
                    <p>Mon adresse mail : <?php echo $usersDetail['users_mail'] ?></p>
                    <p>Genre : <?php echo $usersDetail['users_gender'] ?></p>
                    <p>J'ai déjà voyagé au Japon ? <?php echo $usersDetail['users_japantrip'] == 0 ? 'oui' : 'non' ?></p>
                </div>
            </div>
        </div>
        <div class="row ms-5 col-4">
            <img src="../assets/img/momiji.svg" alt="momoji" class="momiji">
        </div>
    </div>

    <div class="container commentUser mt-5 text-dark">
        <h2 class="">Vos commentaires postés...</h2>
        <p class="">Vous n'avez pas encore de commentaires postés sur le site !</p>
    </div>








    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('include/footer.php') ?>
</body>

</html>