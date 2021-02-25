<?php

require_once '../models/database.php';
require_once '../models/article.php';

$articleObj = new Article;
$kyotoArticles = $articleObj->getArticle(3);