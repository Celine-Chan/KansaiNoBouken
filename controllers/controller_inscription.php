<?php

$errorMessages = [];

$regexName = '/^[a-zA-Z]+$/'; //rajouter les accents et tirets
$regexBirthDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';
$regexPassword = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';

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
    if (isset($_POST['pseudo'])) {
        if (!preg_match($regexName, $_POST['pseudo'])) {
            $errorMessages['pseudo'] = 'Veuillez saisir un pseudo valide.';
        }
        if (empty($_POST['pseudo'])) {
            $errorMessages['pseudo'] = 'Veuillez saisir votre pseudo.';
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
    if (!isset($_POST['travelJapan'])) {
        $errorMessages['travelJapan'] = 'Veuillez faire un choix.';
    }
    if (isset($_POST['mail'])) {
        //filtre pour éviter une regex
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errorMessages['mail'] = 'Veuillez saisir une adresse mail valide';
        }
        if (empty($_POST['mail'])) {
            $errorMessages['mail'] = 'Veuillez saisir une adresse email.';
        }
    }
    if (isset($_POST['password'])) {
        if (!preg_match($regexPassword, $_POST['password'])) {
            $errorMessages['password'] = 'Votre mot de passe doit contenir minimum 8 caractères, une lettre majuscule, un chiffre et un caractère spécial (!@#$%^&*-)';
        }
        if (empty($_POST['password'])) {
            $errorMessages['password'] = 'Veuillez saisir un mot de passe';
        } else if ($_POST['confirmPassword'] != $_POST['password']) {
            $errorMessages['confirmPassword'] = 'Vos mots de passe doivent être identique !';
        } 
    }
    // if (isset($_POST['confirmPassword'])) {
    //     // if (!preg_match($regexPassword, $_POST['confirmPassword'])) {
    //     //     $errorMessages['confirmPassword'] = 'Veuillez saisir un mot de passe valide';
    //     // }
        
    //     if (empty($_POST['confirmPassword'])) {
    //         $errorMessages['confirmPassword'] = 'Veuillez saisir un mot de passe';
    //     }
    //     var_dump($_POST['confirmPassword']);
    //     var_dump($_POST['password']);
        
    // }
    
}
?>