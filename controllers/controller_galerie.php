<?php

require_once '../models/database.php';
require_once '../models/uploadImg.php';

//scandir
$dir = '../assets/img/galerieUpload/';
$galleryUpload = scandir($dir);

//var_dump(scandir($dir));

for ($i = 0; $i < count($galleryUpload); $i++) { // count = compte tous les éléments d'un tableau ou quelque chose d'un objet 
    if ($galleryUpload[$i] == '.' || $galleryUpload[$i] == '..') {
        unset($galleryUpload[$i]); //unset = détruit une variable
    }
}

