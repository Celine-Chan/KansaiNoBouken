<?php
require_once '../controllers/controller_connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Connexion</title>
    <?php include('pagePortion/header.php') ?>
</head>

<body class="connexionBack">

    <?php include('pagePortion/navbar.php') ?>

    <div class="text-dark container mt-5 col-6 row g-3 mx-auto">

        <form method="POST" action="../index.php" class="shadow-lg p-5 connexionForm mb-5">

            <h1 class="text-center text-dark mb-5">Page de connexion</h1>

            <div class="form-outline mb-4">
                <input type="text" id="form1Example1" name="pseudoConnexion" class="form-control" />
                <label class="form-label" for="form1Example1">Pseudo</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password" id="form1Example2" name="passConnexion" class="form-control" />
                <label class="form-label" for="form1Example2">Mot de passe</label>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        <label class="form-check-label" for="form1Example3">Se souvenir de moi</label>
                    </div>
                </div>

                <div class="col">
                    <a href="#!">Mot de passe oublié ?</a>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>





    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('pagePortion/footer.php') ?>
</body>

</html>