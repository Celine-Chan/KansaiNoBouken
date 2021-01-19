<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Osaka</title>
    <?php include('assets/pagePortion/header.php') ?>
</head>

<body>

    <?php include('assets/pagePortion/navbar.php') ?>

    <div class="osakaPageParalax">
        <h1 class="pt-5 osakaTitlePageParalax">OSAKA</h1>
        <div class="textOsakaParalax mt-5">
            <p>Découvrez la ville d'Osaka qui est la 3ème plus grande ville du Japon derrière Tokyo et
                Yokohama.
                osaka est connu pour son hospitalité, ses animations et sa gastronomie typique.</p>
        </div>
    </div>

    <div class="fullTextPageOsaka container d-flex">
        <div class="mt-5">
            <img src="assets/img/osaka/glico.jpg" alt="glico" class="img-fluid glicoImgOsaka">
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
                <img src="assets/img/osaka/legoGirafe.jpg" alt="lego girafe" class="img-fluid legoImgOsaka">
                <div class="col">
                    <img src="assets/img/osaka/makiSushi.jpg" alt="maki sushi" class="img-fluid makiSushi mb-2">
                    <img src="assets/img/osaka/giftTemple.jpg" alt="Gift Temple" class="img-fluid giftTemple">
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

    <?php include('assets/pagePortion/footer.php') ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
    <!-- lien js -->
    <script src="assets/js/script.js"></script>
</body>

</html>