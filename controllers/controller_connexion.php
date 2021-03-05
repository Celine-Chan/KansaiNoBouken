<?php
session_start();

require_once '../models/database.php';
require_once '../models/users.php';

$regexPseudo = '/^[a-zA-ZéèàêâùïüëçæœÉÈÇÙÆŒ\-0-9!@#$%^&\ _*]+$/';
$regexPassword = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';

$errorMessages = [];

if (isset($_POST['btnConnexion'])) {

    if (isset($_POST['pseudoConnexion'])) {
        if (!preg_match($regexPseudo, $_POST['pseudoConnexion'])) {
            $errorMessages['pseudoConnexion'] = 'Veuillez saisir un pseudo valide.';
        }
        if (empty($_POST['pseudoConnexion'])) {
            $errorMessages['pseudoConnexion'] = 'Veuillez saisir votre pseudo.';
        }
    }

    if (isset($_POST['passConnexion'])) {
        if (!preg_match($regexPassword, $_POST['passConnexion'])) {
            $errorMessages['passConnexion'] = 'Votre mot de passe doit contenir au minimum 8 caractères, une lettre majuscule, un chiffre et un caractère spécial (!@#$%^&*-)';
        }
        if (empty($_POST['passConnexion'])) {
            $errorMessages['passConnexion'] = 'Veuillez saisir un mot de passe';
        }
    }

    if (isset($_SESSION['users_login'])) {
        # code...
    }
}
