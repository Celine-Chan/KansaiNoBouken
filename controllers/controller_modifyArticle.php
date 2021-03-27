<?php
require_once '../models/database.php';
require_once '../models/article.php';

$articleObj = new Article;

$regexArticleTitle = '/^[a-zA-ZéèàêâùïüëçæœÉÈÇÙÆŒ -]+$/';
$messages = [];
$errorMessages = [];
$errors = [];

$articleArray = $articleObj->getSelectCity();


// mise en place d'une variable permettant de savoir si nous avons inscrit l'article dans la base
$updateArticleInBase = false;

// Nous testons si nous avons bien une valeur non NULL dans le $_POST ModifyArticle qui signifie que nous venons bien de la page de la ville
if (!empty($_POST['modifyArticle'])) {
    // Création d'un nouvel objet
    $articleObj = new Article;
    // Nous allons récupérer les informations de notre article nous permettant de pré-remplir le formulaire
    $detailsArticleArray = $articleObj->getDetailsArticle($_POST['modifyArticle']);
    // Pour plus de sécurité, je stock l'id de l'article à modifier dans une variable de session
    $_SESSION['idArticleToUpdate'] = $detailsArticleArray['article_id'];
}

if (isset($_POST['modifyArticle'])) {
    $detailsArticleArray = $articleObj->getDetailsArticle($_POST['modifyArticle']);
} else {
    $detailsArticleArray = false;
}

//sécurité ajout d'article
if (isset($_POST['updateArticleBtn'])) {

    if (isset($_POST['article_title'])) {
        if (!preg_match($regexArticleTitle, $_POST['article_title'])) {
            $errorMessages['article_title'] = 'Veuillez saisir un titre valide.';
        }
        if (empty($_POST['article_title'])) {
            $errorMessages['article_title'] = 'Veuillez saisir un titre.';
        }
    }

    if (!isset($_POST['city_id'])) {
        $errorMessages['city_id'] = 'veuillez faire un choix.';
    }
    // sécurité si quelqu'un essaie de modifier html/ajouter une option (en "inspecter")
    if (isset($_POST['city_id'])) {
        if (!array_key_exists($_POST['city_id'], $articleArray)) {
            $errorMessages['city_id'] = 'Veuillez choisir une ville.';
        }
    }

    //je vérifie s'il n'y a pas d'erreurs afin de lancer ma requête
    if (empty($errorMessages) && isset($_POST['updateArticleBtn'])) {
        $ArticleObj = new Article;


        //création d'un tableau associatif contenant toutes les infos du form
        $ArticleDetails = [
            'article_title' => htmlspecialchars($_POST['article_title']),
            'article_contenu' => $_POST['article_contenu'],
            'article_date' => htmlspecialchars($_POST['article_date']),
            'city_id' => htmlspecialchars($_POST['city_id']),
            //je récupère mon id que j'ai stocké dans ma variable de session
            'article_id' => $_POST['updateArticleBtn']
        ];

        if ($ArticleObj->UpdateArticle($ArticleDetails)) {
            $updateArticleInBase = true;
        } else {
            $messages['updateArticle'] = 'Erreur de connexion lors de la modification';
        }
    }
    
}
