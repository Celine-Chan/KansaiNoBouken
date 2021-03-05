<?php

require_once '../models/database.php';
require_once '../models/article.php';

$articleObj = new Article;
$kyotoArticles = $articleObj->getArticle(3);

if (isset($_POST['modifyArticle'])) {
    $detailsArticleArray = $articleObj->getDetailsArticle($_POST['modifyArticle']);
    // var_dump($detailsArticleArray);
} else {
    $detailsArticleArray = false;
}