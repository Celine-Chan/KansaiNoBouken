<?php

require_once '../models/database.php';
require_once '../models/article.php';

$articleObj = new Article;
$osakaArticles = $articleObj->getArticle(2);
// var_dump($_POST);

if (isset($_POST['modifyArticle'])) {
    $detailsArticleArray = $articleObj->getDetailsArticle($_POST['modifyArticle']);
    // var_dump($detailsArticleArray);
} else {
    $detailsArticleArray = false;
}

if (isset($_POST['deleteArticle'])) {
    $idArticle = $_POST['deleteArticle'];
    $deleteArticle = $articleObj->DeleteArticle($idArticle);
    header("Refresh: 0");
}