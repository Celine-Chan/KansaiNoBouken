<?php

require_once "../controllers/controller_inscription.php";

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Inscription</title>
    <?php include('../view/pagePortion/header.php') ?>
</head>


<body>

    <?php include('../view/pagePortion/navbar.php') ?>

    <div class="banniereInscriptionImg mb-5">
        <img src="../assets/img/banniere/osakaPortKansai2.jpg" alt="takoyaki" class="img-fluid takoyakiImg">
    </div>

    <div class="container">
        <form class="border border-danger p-5" method="POST" action="inscription.php">

            <p class="h4 mb-5 text-center">Inscription</p>

            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="firstName" class="form-control" name="firstName" placeholder="Prénom" value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '' ?>">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['firstName']) ? $errorMessages['firstName'] : '' ?></span>
                    </div>
                </div>
                <div class="col mt-4">
                    <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Nom" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['lastName']) ? $errorMessages['lastName'] : '' ?></span>
                    </div>
                </div>
                <div class="col mt-4">
                    <input type="text" id="pseudo" class="form-control" name="pseudo" placeholder="Pseudo" value="<?= isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : '' ?>">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['pseudo']) ? $errorMessages['pseudo'] : '' ?></span>
                    </div>
                </div>
                <div class="col mt-4">
                    <label for="birthDate" class="form-label">Votre date de naissance :</label>
                    <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="05/12/1990" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['birthDate']) ? $errorMessages['birthDate'] : '' ?></span>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="travelJapan" class="form-label">Avez-vous déjà effectué un voyage au Japon</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="travelJapan" id="flexRadioDefault1" value="oui" <?= isset($_POST['travelJapan']) && $_POST['travelJapan'] == 'oui' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="travelJapan" id="flexRadioDefault2" value="non" <?= isset($_POST['travelJapan']) && $_POST['travelJapan'] == 'non' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Non
                    </label>
                </div>
                <div class="text-danger">
                    <span><?= isset($errorMessages['travelJapan']) ? $errorMessages['travelJapan'] : '' ?></span>
                </div>
            </div>

            <div class="mb-4">
                <input type="email" id="mail" name="mail" class="form-control" placeholder="E-mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                <div class="text-danger">
                    <span><?= isset($errorMessages['mail']) ? $errorMessages['mail'] : '' ?></span>
                </div>
            </div>

            <div class="mb-4">
                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                <div class="text-danger">
                    <span><?= isset($errorMessages['password']) ? $errorMessages['password'] : '' ?></span>
                </div>
            </div>

            <div class="mb-4">
                <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Comfirmer votre mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock" value="<?= isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '' ?>">
                <div class="text-danger">
                    <span><?= isset($errorMessages['confirmPassword']) ? $errorMessages['confirmPassword'] : '' ?></span>
                </div>
            </div>

            <button class="btn btn-info my-4 red darken-4 mx-auto" type="submit" name="submit">S'inscrire</button>

            <p>En cliquant sur <em>s'inscrire</em> vous acceptez nos <a href="cgu.php" target="_blank">terms of service</a></p>

        </form>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/pagePortion/footer.php') ?>
</body>

</html>