<?php

require_once '../models/database.php';
require_once '../models/article.php';

$messagesUpload = [];
$errorMessages = [];

$message = "";
$messageSecond = "";
$messageOk = "";
$messageNoFormat = "";

// Vérifie la taille du fichier - 1Mo maximum
$maxsize = 1000000;
// Vérifie si le fichier a été uploadé sans erreur.
if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["fileToUpload"]["name"];
    $filetype = $_FILES["fileToUpload"]["type"];
    $filesize = $_FILES["fileToUpload"]["size"];

    // pour ne pas upload un ficher où le format serait modifié.
    if (
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/jpeg" ||
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/gif" ||
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/png"
    ) {

        // Vérifie l'extension du fichier
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        // si l'extension n'existe pas dans le tableau
        if (!array_key_exists($extension, $allowed)) {
            // echo 'Erreur : Veuillez sélectionner un format de fichier valide.';
            $message = 'Erreur : Veuillez sélectionner un format de fichier valide.';
        } else if ($filesize > $maxsize) {
            // echo 'Error: La taille de l'image est supérieure à la limite autorisée.';
            $messageSecond = 'Erreur: La taille de l\'image est supérieure à la limite autorisée.';
        } else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../assets/img/galerieUpload/" . uniqid() . $_FILES["fileToUpload"]["name"])) {
            // echo'Le fichier ' . $filename . ' a bien été uploadé.';
            $messageOk = 'Le fichier ' . $filename . ' a bien été uploadé.';
        }
    } else {
        $messageNoFormat = 'Erreur !!';
    }
}

if (count(scandir('../assets/img/galerieUpload')) > 0) {
    $numberCount = count(scandir('../assets/img/galerieUpload/')) - 2; //élimine les 2 fichiers '.' et '..'
} else {
    $numberCount = 0;
}
//si count(scandir()) est plus grand que 0 on enlève 2 sinon le nombre d'image est 0.
//var_dump(scandir('img'));


//PDO Article

$messages = [];

if (isset($_POST['addArticle']) && empty($errorMessages)) {
    $ArticleObj = new Article;


    //création d'un tableau associatif contenant toutes les infos du form
    $ArticleDetails = [
        'article_title' => htmlspecialchars($_POST['article_title']),
        'article_contenu' => $_POST['article_contenu'],
        'article_date' => htmlspecialchars($_POST['article_date']),
        'city_id' => htmlspecialchars($_POST['city_id'])
    ];

    var_dump($ArticleDetails);

    if ($ArticleObj->addArticle($ArticleDetails)) {
        $messages['addArticle'] = 'article enregistré';
    } else {
        $messages['addArticle'] = 'Erreur de connexion lors de l\'enregistrement';
    }
}

$article = new Article;
$articleArray = $article->getSelectCity();

?>