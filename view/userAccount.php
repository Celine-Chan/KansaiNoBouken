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
        <h1>Mon compte</h1>
        <p>Bienvenue <?php echo $_SESSION['users_pseudo'] ?></p>
    </div>

    <div class="container d-flex">
        <img src="../assets/img/kitsune.svg" alt="kitsuneprofil" class="kitsuneProfil border border-dark rounded px-2 py-2">
        <h2 class="userPseudo ms-3 text-dark"><?php echo $_SESSION['users_pseudo'] ?></h2>
    </div>

    <div class="card container mt-5">
        <div class="card-body">
            <div class="container d-flex text-dark">
                <h2>Mes informations personnelles :</h2>
            </div>

            <div class="container text-dark mt-5">
                <p>Mon Nom : <?php echo $usersDetail['users_lastname'] ?> </p>
                <p>Mon Prénom : <?php echo $usersDetail['users_firstname'] ?></p>
                <p>Ma date de naissance : <?php echo $usersDetail['users_birthdate'] ?></p>
                <p>Mon adresse mail : <?php echo $usersDetail['users_mail'] ?></p>
                <p>Genre : <?php echo $usersDetail['users_gender'] ?></p>
                <p>J'ai déjà voyagé au Japon ? <?php echo $usersDetail['users_japantrip'] == 0 ? 'oui' : 'non' ?></p>
            </div>
        </div>
    </div>








    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('include/footer.php') ?>
</body>

</html>