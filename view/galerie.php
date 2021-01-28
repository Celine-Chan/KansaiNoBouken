<?php

//scandir
$dir = '../assets/img/galerieUpload/';
$galleryUpload = scandir($dir);

//var_dump(scandir($dir));

for ($i = 0; $i < count($galleryUpload); $i++) { // count = compte tous les éléments d'un tableau ou quelque chose d'un objet 
    if ($galleryUpload[$i] == '.' || $galleryUpload[$i] == '..') {
        unset($galleryUpload[$i]); //unset = détruit une variable
    }
}

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Galerie</title>
    <?php include('../view/pagePortion/header.php') ?>
</head>

<body>
    <?php include('../view/pagePortion/navbar.php') ?>

    <div class="container">
        <h1 class="text-center galleryTitle mt-5 mb-5">Galerie</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4" data-masonry='{"percentPosition": true }'>
            <?php foreach ($galleryUpload as $imgUpload) { ?>

                <div class="col">
                    <div class="card">
                        <img src="<?php echo $dir ?><?php echo $imgUpload ?>" class="card-img-top imgGallery" alt="<?php echo $imgUpload ?>">
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/pagePortion/footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>

</html>