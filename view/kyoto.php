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

        <div class="card container">

            <div class="card-body">
                <p class="card-text">

                <?php if (isset($_POST['city_id']) == 3) { ?>

                    <p><?= (isset($_POST['article_title'])) ? $_POST['article_title'] : '' ?></p>
                    <p><?= (isset($_POST['article_contenu'])) ? $_POST['article_contenu'] : '' ?></p>
                    <p>Date de création : <?= (isset($_POST['article_date'])) ? $_POST['article_date'] : '' ?></p>
                    <p>Ville : <?= (isset($_POST['city_id'])) ? $_POST['city_id'] : '' ?></p>

                <?php } ?>

                </p>
            </div>

        </div>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/pagePortion/footer.php') ?>

</body>

</html>