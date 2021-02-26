<?php

require_once '../models/database.php';
require_once '../models/article.php';

$articleObj = new Article;
$osakaArticles = $articleObj->getArticle(2);

if (isset($_POST['idArticle'])) {
    $detailsArticleArray = $articleObj->getDetailsArticle($_POST['idArticle']);
} else {
    $detailsArticleArray = false;
}
