<?php

require_once '../models/database.php';
require_once '../models/article.php';

$articleObj = new Article;
$osakaArticles = $articleObj->getArticle(2);
// var_dump($_POST);

if (isset($_POST['modifyArticle'])) {
    $detailsArticleArray = $articleObj->getDetailsArticle($_POST['modifyArticle']);
    var_dump($detailsArticleArray);
} else {
    $detailsArticleArray = false;
}
