<?php

$errorMessages = [];

$regexName = '/^[a-zA-Z]+$/';
$regexBirthDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';

if (isset($_POST['submit'])) {
    if (isset($_POST['firstName'])) {
        if (!preg_match($regexName, $_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir un prénom valide.';
        }
        if (empty($_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir votre prénom.';
        }
    }
    if (isset($_POST['lastName'])) {
        if (!preg_match($regexName, $_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir un nom valide.';
        }
        if (empty($_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir votre nom.';
        }
    }
    if (isset($_POST['birthDate'])) {
        if (!preg_match($regexBirthDate, $_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date valide.';
        }
        if ($_POST['birthDate'] >= date('Y-m-d')) {
            $errorMessages['birthDate'] = 'Date impossible !';
        }
        if (empty($_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date.';
        }
    }
}
?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Inscription</title>
    <?php include('assets/pagePortion/header.php') ?>
</head>


<body>

    <?php include('assets/pagePortion/navbar.php') ?>

    <div class="banniereInscriptionImg mb-5">
        <img src="assets/img/banniere/osakaPortKansai2.jpg" alt="takoyaki" class="img-fluid takoyakiImg">
    </div>


    <!-- forms inscription -->
    <div class="container">
        <form class=" border border-danger p-5" method="POST" action="inscription.php">

            <p class="h4 mb-5 text-center">Inscription</p>

            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstName" placeholder="Prénom">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['firstName']) ? $errorMessages['firstName'] : '' ?></span>
                    </div>
                </div>
                <div class="col mt-4">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastName" placeholder="Nom">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['lastName']) ? $errorMessages['lastName'] : '' ?></span>
                    </div>
                </div>
                <div class="col mt-4">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" name="pseudo" placeholder="Pseudo">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['pseudo']) ? $errorMessages['pseudo'] : '' ?></span>
                    </div>
                </div>
                <div class="col mt-4">
                    <label for="birthDate" class="form-label">Votre date de naissance :</label>
                    <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="05/12/1990">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['birthDate']) ? $errorMessages['birthDate'] : '' ?></span>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="skills" class="form-label">Avez-vous déjà effectué un voyage au Japon</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="skills" id="flexRadioDefault1" value="oui">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="skills" id="flexRadioDefault2" value="non">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Non
                    </label>
                </div>
            </div>

            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

            <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Comfirmer votre mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">

            <button class="btn btn-info my-4 btn-block red darken-4" type="submit" name="submit">S'inscrire</button>

            <p class="text-center">En cliquant sur <em>s'inscrire</em> vous acceptez nos <a href="" target="_blank">terms of service</a></p>

        </form>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('assets/pagePortion/footer.php') ?>
</body>

</html>