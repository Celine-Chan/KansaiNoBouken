<?php
session_start();

require_once '../models/database.php';
require_once '../models/users.php';

//on détruit la session
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Déconnexion</title>
    <?php include('include/header.php') ?>
</head>

<body>

    <?php include('include/navbar.php') ?>



    <div class="container mt-5">
        <h1 class="text-center text-danger mt-5">Vous avez bien été déconnecté !</h1>
    </div>

    <div class="container mt-5 text-center">
        <img src="../assets/img/fantome.svg" alt="yokai" class="Kaonashi">
    </div>

    <div class="container mt-5 text-center">
        <a href="connexion.php" type="button" class="btn btn-danger">Se connecter</a>
        <a href="../index.php" type="button" class="btn btn-primary">Retour a l'accueil</a>
    </div>





    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('include/footer.php') ?>
    <script type="text/javascript">
        setTimeout('Redirect()', 2000);

        function Redirect() {
            location.href = '../index.php';
        }
    </script>
</body>

</html>