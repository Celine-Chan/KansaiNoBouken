<?php

$errorMessages = [];

$regexName = '/^[a-zA-ZéèàêâùïüëçæœÉÈÇÙÆŒ -]+$/';
$regexTextArea = '/^[a-zA-Z0-9éèàêâùïüëçæœÉÈÇÙÆŒ .;:,_!?()=*&\"\'$€~-]+$/';

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
    if (!isset($_POST['subjectContact'])) {
        $errorMessages['subjectContact'] = 'veuillez faire un choix.';
    }
    // sécurité si quelqu'un essaie de modifier html/ajouter une option (en "inspecter")
    if (isset($_POST['subjectContact'])) {
        if (!array_key_exists($_POST['subjectContact'], $subjectContact)) {
            $errorMessages['subjectContact'] = 'Veuillez choisir un sujet.';
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
?>
