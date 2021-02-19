
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Galerie</title>
    <link rel="stylesheet" href="../view/lightbox2-2.11.3/dist/css/lightbox.min.css">
    <script src="../view/lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
    <?php include('../view/pagePortion/header.php') ?>
</head>

<body>
    <?php include('../view/pagePortion/navbar.php') ?>

    <div class="container">
        <h1 class="text-center galleryTitle mt-5 mb-5">Galerie</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4" data-masonry='{"percentPosition": true }'>
            <?php foreach ($galleryUpload as $imgUpload) { ?>

                <div class="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                        <a data-lightbox="galleryJapan" href="<?php echo $dir ?><?php echo $imgUpload ?>"><img src="<?php echo $dir ?><?php echo $imgUpload ?>" 
                        class="card-img-top imgGallery w-100 hover-shadow" alt="<?php echo $imgUpload ?>"><div class="mask" 
                        style="background-color: rgba(251, 251, 251, 0.2)"></div></a>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/pagePortion/footer.php') ?>

    <script src="../view/lightbox2-2.11.3/dist/js/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>

</html>