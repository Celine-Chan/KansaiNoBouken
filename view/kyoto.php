<?php

require_once '../controllers/controller_kyoto.php';

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Kyoto</title>
    <?php include('../view/pagePortion/header.php') ?>
</head>


<body>

    <?php include('../view/pagePortion/navbar.php') ?>

    <div class="kyotoPageParalax">
        <h1 class="pt-5 ms-5 kyotoTitlePageParalax">KYOTO</h1>
        <div class="textKyotoParalax mt-5 ms-3">
            <p>Découvrez Kyoto, ancienne capitale du
                Japon, le coeur culturel et religieux du
                Japon.
                Vous serez captivés par ses palais impériaux, ses milliers de sanctuaires shinto et temples
                bouddhistes.</p>
        </div>
    </div>

    <div class="fullTextPageKyoto container d-flex">
        <div class="mt-5">
            <img src="../assets/img/kyoto/lanterne.jpg" alt="lanterne" class="img-fluid lanterneImgKyoto img-fluid">
        </div>
        <div class="textPageKyoto mt-5 col">
            <p>At vero eos et accusam et justo duo dolores et ea rebum.
                Stet
                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                ipsum
                dolor sit amet, consetetur sad. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy
                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                Lorem
                ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing eli tr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
        </div>
    </div>

    <div>
        <h2 class="mt-5 text-dark ms-5 mb-5">Derniers articles...</h2>

        <?php foreach ($kyotoArticles as $articles) { ?>

            <form action="modifyArticle.php" method="POST">
                <div class="container d-flex flex-row-reverse col-12 mb-3">
                    <button type="submit" class="btn btn-success btn-rounded" name="modifyArticle" value="<?= $articles['article_id'] ?>"><i class="fas fa-edit"></i> Modifier l'article</button>
                    <button type="button" class="btn btn-danger btn-rounded"><i class="fas fa-trash-alt"></i> Supprimer l'article</button>
                </div>
            </form>

            <div class="card container mb-5">
                <div class="h3"><?= $articles['article_title'] ?></div>
                <span class="ms-2 fst-italic"><?= $articles['article_date'] ?></span>
                <div class="card-body">
                    <p class="card-text">
                        <?= $articles['article_contenu'] ?>
                    </p>
                </div>
            </div>

        <?php } ?>

    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/pagePortion/footer.php') ?>

</body>

</html>