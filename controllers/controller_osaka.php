<?php

require_once '../models/database.php';
require_once '../models/article.php';

$articleObj = new Article;
$osakaArticles = $articleObj->getArticle(2);

//modification d'article
if (isset($_POST['modifyArticle'])) {
    $detailsArticleArray = $articleObj->getDetailsArticle($_POST['modifyArticle']);
} else {
    $detailsArticleArray = false;
}

//suppression d'article
if (isset($_POST['deleteArticle'])) {
    $idArticle = $_POST['deleteArticle'];
    $deleteArticle = $articleObj->DeleteArticle($idArticle);
    header("Refresh: 0");
}