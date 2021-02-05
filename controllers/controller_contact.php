<?php

$errorMessages = [];

$regexName = '/^[a-zA-Z]+$/'; //rajouter les accents et tirets
$regexMail = '/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}+$/';
$regexTextArea = '/^[a-z0-9]+$/'; //ponctuation a rajouter dans la regex

$subjectContact = [
    1 => 'Article',
    2 => 'Galerie',
    3 => 'Gastronomie',
    4 => 'Vocabulaire',
    5 => 'Autres'
];

if (isset($_POST['submit'])) {
    if (isset($_POST['lastName'])) {
        if (!preg_match($regexName, $_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir un nom valide.';
        }
        if (empty($_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir votre nom.';
        }
    }
    if (isset($_POST['firstName'])) {
        if (!preg_match($regexName, $_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir un prénom valide.';
        }
        if (empty($_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir votre prénom.';
        }
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
    if (!isset($_POST['badge'])) {
        $errorMessages['badge'] = 'veuillez faire un choix.';
    }
    // sécurité si quelqu'un essaie de modifier html/ajouter une option (en "inspecter")
    if (isset($_POST['badge'])) {
        if (!array_key_exists($_POST['badge'], $badgeArray)) {
            $errorMessages['badge'] = 'Veuillez choisir un chiffre.';
        }
    }
    if (isset($_POST['textContact'])) {
        if (!preg_match($regexTextArea, $_POST['textContact'])) {
            $errorMessages['textContact'] = 'Veuillez remplir le champ correctement.';
        }
        if (empty($_POST['textContact'])) {
            $errorMessages['textContact'] = 'Veuillez remplir le champ.';
        }
    }
}
