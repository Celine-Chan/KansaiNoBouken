<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Osaka</title>
    <?php include('../view/pagePortion/header.php') ?>
</head>

<body>

    <?php include('../view/pagePortion/navbar.php') ?>

    <div class="osakaPageParalax">
        <h1 class="pt-5 ms-5 osakaTitlePageParalax">OSAKA</h1>
        <div class="textOsakaParalax mt-5 ms-3">
            <p>Découvrez la ville d'Osaka qui est la 3ème plus grande ville du Japon derrière Tokyo et
                Yokohama.
                osaka est connu pour son hospitalité, ses animations et sa gastronomie typique.</p>
        </div>
    </div>

    <div class="fullTextPageOsaka container d-flex">
        <div class="mt-5">
            <img src="../assets/img/osaka/glico.jpg" alt="glico" class="img-fluid glicoImgOsaka">
        </div>
        <div class="col">
            <div class="container textPageOsaka mt-5">
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
            <div class="row imgPageOsaka">
                <img src="../assets/img/osaka/legoGirafe.jpg" alt="lego girafe" class="img-fluid legoImgOsaka">
                <div class="col">
                    <img src="../assets/img/osaka/makiSushi.jpg" alt="maki sushi" class="img-fluid makiSushi mb-2">
                    <img src="../assets/img/osaka/giftTemple.jpg" alt="Gift Temple" class="img-fluid giftTemple">
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2 class="mt-5">Article</h2>

        <?= (isset($_POST['osakaArticle'])) ? $_POST['osakaArticle'] : '' ?>
    </div>



    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/pagePortion/footer.php') ?>
</body>

</html>