<?php

require_once "../controllers/controller_inscription.php";

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Inscription</title>
    <?php include('../view/include/header.php') ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>


<body class="backBody">

    <?php include('../view/include/navbar.php') ?>

    <!-- <div class="banniereInscriptionImg">
        <img src="../assets/img/banniere/osakaPortKansai2.jpg" alt="takoyaki" class="img-fluid takoyakiImg">
    </div> -->

    <div class="container mt-5 col-12 col-md-10 col-xl-6 row g-3 mx-auto">

        <?php if ($showForm) { ?>

            <form class="shadow-lg p-5 inscriptionForm" method="POST" action="inscription.php">

                <h1 class="mb-5 text-center inscriptionTitle">Inscription</h1>

                <div class="form-row mb-4">
                    <div class="col">
                        <label for="firstName">Votre prénom :</label>
                        <input type="text" id="firstName" class="form-control ms-3" name="firstName" placeholder="ex : Jane" value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '' ?>">
                        <div class="text-danger">
                            <span><?= isset($errorMessages['firstName']) ? $errorMessages['firstName'] : '' ?></span>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <label for="lastName">Votre nom :</label>
                        <input type="text" id="lastName" class="form-control ms-3" name="lastName" placeholder="ex : Doe" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                        <div class="text-danger">
                            <span><?= isset($errorMessages['lastName']) ? $errorMessages['lastName'] : '' ?></span>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <label for="pseudo">Votre pseudo :</label>
                        <input type="text" id="pseudo" class="form-control ms-3" name="pseudo" placeholder="ex : Jane76" value="<?= isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : '' ?>">
                        <div class="text-danger">
                            <span><?= isset($errorMessages['pseudo']) ? $errorMessages['pseudo'] : '' ?></span>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <label for="birthDate" class="form-label text-dark">Votre date de naissance :</label>
                        <input type="date" class="form-control ms-3" id="birthDate" name="birthDate" placeholder="05/12/1990" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>">
                        <div class="text-danger">
                            <span><?= isset($errorMessages['birthDate']) ? $errorMessages['birthDate'] : '' ?></span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label text-dark">Précisez votre genre :</label>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="femme" <?= isset($_POST['gender']) && $_POST['gender'] == 'femme' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="gender">Femme</label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="homme" <?= isset($_POST['gender']) && $_POST['gender'] == 'homme' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="gender">Homme</label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="non précisé" <?= isset($_POST['gender']) && $_POST['gender'] == 'non précisé' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="gender">Non précisé</label>
                    </div>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['gender']) ? $errorMessages['gender'] : '' ?></span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="japanTrip" class="form-label text-dark">Avez-vous déjà effectué un voyage au Japon</label>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="japanTrip" id="japanTrip" value="0" <?= isset($_POST['japanTrip']) && $_POST['japanTrip'] == '0' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDefault1">Oui</label>
                    </div>
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="radio" name="japanTrip" id="japanTrip" value="1" <?= isset($_POST['japanTrip']) && $_POST['japanTrip'] == '1' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDefault2">Non</label>
                    </div>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['japanTrip']) ? $errorMessages['japanTrip'] : '' ?></span>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="mail">Votre E-mail :</label>
                    <input type="email" id="mail" name="mail" class="form-control ms-3" placeholder="ex : janedoe@mail.com" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                    <div class="text-danger">
                        <span><?= isset($errorMessages['mail']) ? $errorMessages['mail'] : '' ?></span>
                    </div>
                </div>

                <div class="mb-2">
                    <label for="password">Saisissez un mot de passe :</label>
                    <input type="password" id="password" name="password" class="form-control ms-3" placeholder="ex : JaneDoe76*" aria-describedby="defaultRegisterFormPasswordHelpBlock" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                    <div class="showPass ms-4">
                        <input type="checkbox" onclick="showPassword()">Afficher le mot de passe
                    </div>
                    <div id="emailHelp" class="form-text ms-3 text-primary">Votre mot de passe doit contenir au minimum 8 caractères, une lettre majuscule, un chiffre et un caractère spécial (!@#$%^&*-)</div>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['password']) ? $errorMessages['password'] : '' ?></span>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="confirmPassword">Comfirmer votre mot de passe :</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control ms-3" placeholder="ex : JaneDoe76*" aria-describedby="defaultRegisterFormPasswordHelpBlock" value="<?= isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '' ?>">
                    <div class="showPass ms-4">
                        <input type="checkbox" onclick="showConfirmPassword()">Afficher le mot de passe
                    </div>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['confirmPassword']) ? $errorMessages['confirmPassword'] : '' ?></span>
                    </div>
                </div>

                <div class="row mb-4 mt-3">
                    <div class="g-recaptcha mb-1" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI" name="captcha"></div>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['captcha']) ? $errorMessages['captcha'] : '' ?></span>
                    </div>
                </div>

                <button class="btn btn-info my-4 red darken-4 mx-auto" type="submit" name="submit">S'inscrire</button>

                <p>En cliquant sur <em>s'inscrire</em> vous acceptez nos <a href="cgu.php" target="_blank">terms of service</a></p>

            </form>

        <?php } else { ?>
            <p class="h3 text-info text-center border rounded backforminscri mb-5 p-3"><?= $messages['addUsers'] ?? '' ?></p>
            <img src="../assets/img/fantome2.svg" alt="yokai Logo" class="logoforminscrip mx-auto">
        <?php } ?>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/include/footer.php') ?>
    <script type="text/javascript">
        function onReCaptchaValid(token) {
            document.getElementById('id_du_formulaire').submit();
        }
    </script>
</body>

</html>