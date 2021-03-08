<?php
session_start();

?>

<!doctype html>
<html lang="fr">

<head>
    <title> Kansai no bouken - 関西の冒険 - Accueil</title>

    <?php include('view/include/header.php') ?>
</head>

<body>

    <?php include('view/include/navbar.php') ?>

    <p class="text-center text-danger m-3 h2"><?= $messagesConnection  ?? '' ?></p>

    <div class="container-fluid">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                <li data-target="#carousel-example-1z" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/osaka/sumiyoshiBridge.jpg" class="d-block w-100 imgCaroussel" alt="First Slide">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/kyoto/fushimiInari.jpg" class="d-block w-100 imgCaroussel" alt="Second Slide">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Nara/bicheNara.jpg" class="d-block w-100 imgCaroussel" alt="Third Slide">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/kyoto/kyoto3.jpg" class="d-block w-100 imgCaroussel" alt="Fourth Slide">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Minoh/minohTemple.jpg" class="d-block w-100 imgCaroussel" alt="Fifth Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <h1 class="text-center mt-5 titleIndexPres"><img src="assets/img/saison-de-floraison.svg" alt="earthSakura" class="earthSakura"> Présentation du site Kansai No Bouken</h1>

    <div class="text-center mt-5">
        <img src="assets/img/osaka/tanuki.jpg" alt="tanuki" class="tanukiSize">
    </div>
    <div class="d-flex mt-5 container">
        <div>
            <p class="textAccueil">Bienvenue sur Kansai no bouken, spécialisé sur la région du Kansai, au centre du Japon.
                Ce site a pour objectif de vous informer sur les grandes villes de la région du kansai ainsi que des actualités liées à ces villes,
                notamment sur Osaka, kyoto, Nara, Kobe ainsi que Wakayama.
                De plus, vous retrouverez des articles concernant la gastronomie du Kansai ainsi que des recettes des plats le splus populaires du Kansai.
                Enfin, si vous souhaitez débuter dans la langue japonaise, la page vocabulaire vous permettra de débuter grâce aux vocabulaires de base.
            </p>
        </div>
    </div>
    <div class="container">
        <p class="textAccueil2"></p>
    </div>

    <div class="text-center mt-5">
        <img src="assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <div class="text-center mt-5">
    <img src="assets/img/japonmap.svg" alt="japanMap" class="japanMap">
        <img src="assets/img/la-carte-de-la-région-de-kansai.png" class="img-fluid">
    </div>

    <div class="text-center mt-5">
        <img src="assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <!-- Card -->
    <div class="container-fluid mx-auto row row-cols-1 row-cols-md-3 g-4 mt-5 cityCard">
        <!-- first card -->
        <div class="col mt-5 OsakaCard">
            <div class="card h-100">
                <div class="bg-image hover-zoom view view-cascade overlay">
                    <img src="assets/img/osaka/osaka_night.jpg" class="card-img-top w-100" alt="osakaCity" />
                    <a href="view/osaka.php">
                        <div class="mask rgba-red-light"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title titleCardSize">Osaka 大阪</h5>
                    <p class="card-text fontSizeCard">
                        Découvrez la ville d'Osaka qui est la 3ème plus grande ville du Japon derrière Tokyo et
                        Yokohama.
                        osaka est connu pour son hospitalité, ses animations et sa gastronomie typique.
                    <p><a href="view/osaka.php" class="black-text seeMore ml-3">Plus d'infos sur Osaka <i class="fas fa-plus-circle"></i></a></p>
                    </p>
                </div>
            </div>
        </div>
        <!-- second card -->
        <div class="col mt-5">
            <div class="card h-100">
                <div class="bg-image hover-zoom view view-cascade overlay">
                    <img src="assets/img/kyoto/fushimi.jpg" class="card-img-top" alt="kyotoFushimiInari" />
                    <a href="view/kyoto.php">
                        <div class="mask rgba-red-light"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title titleCardSize">Kyoto 京都</h5>
                    <p class="card-text fontSizeCard">Découvrez Kyoto, ancienne capitale du
                        Japon, le coeur culturel et religieux duJapon.
                        Vous serez captivés par ses palais impériaux, sanctuaires shinto et temples
                        bouddhistes.
                    <p><a href="view/kyoto.php" class="black-text seeMore ml-3">Plus d'infos sur Kyoto <i class="fas fa-plus-circle"></i></a></p>
                    </p>
                </div>
            </div>
        </div>
        <!-- third card -->
        <div class="col mt-5">
            <div class="card h-100">
                <div class="bg-image hover-zoom view view-cascade overlay">
                    <img src="assets/img/Nara/shika3.jpg" class="card-img-top" alt="naraShika" />
                    <a href="view/nara.php">
                        <div class="mask rgba-red-light"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title titleCardSize">Nara 奈良</h5>
                    <p class="card-text fontSizeCard">
                        Découvrez Nara et ses monuments historiques inscrits à l'UNESCO.
                        Laissez-vous transporté par l'ambiance de la ville où les cerfs en libertés flânent à vos côtés.
                    <p><a href="view/nara.php" class="black-text seeMore ml-3">Plus d'infos sur Nara <i class="fas fa-plus-circle"></i></a></p>
                    </p>

                </div>
            </div>
        </div>
        <!-- fourth card -->
        <div class="col mt-5">
            <div class="card h-100">
                <div class="bg-image hover-zoom view view-cascade overlay">
                    <img src="assets/img/Kobe/kobeCity.jpg" class="card-img-top" alt="kobeCity" />
                    <a href="view/kobe.php">
                        <div class="mask rgba-red-light"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title titleCardSize">Kobe 神戸</h5>
                    <p class="card-text fontSizeCard">
                        Découvrez Kobe "la porte des esprits", connue pour sa célèbre viande de boeuf et son quartier
                        européen.
                        Elle offre une vue incroyable la nuit si vous êtes adeptes des ballades nocturnes.
                    <p><a href="view/kobe.php" class="black-text seeMore ml-3">Plus d'infos sur Kobe <i class="fas fa-plus-circle"></i></a></p>
                    </p>
                </div>
            </div>
        </div>
        <!-- fifth card -->
        <div class="col mt-5">
            <div class="card h-100">
                <div class="bg-image hover-zoom view view-cascade overlay">
                    <img src="assets/img/Wakayama/wakayamaCity.jpg" class="card-img-top" alt="wakayamaCity" />
                    <a href="view/kobe.php">
                        <div class="mask rgba-red-light"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title titleCardSize">Wakayama 和歌山</h5>
                    <p class="card-text fontSizeCard">
                        Préfecture au plus au sud de Honshu, connu notamment pous ses sites sacrés et chemins 
                        de pélerinage dans les monts KII classés aux patrimoine mondial de l'Unesco.
                    <p><a href="view/kobe.php" class="black-text seeMore ml-3">Plus d'infos sur Wakayama <i class="fas fa-plus-circle"></i></a></p>
                    </p>
                </div>
            </div>
        </div>
        <!-- sixth card -->
        <div class="col mt-5">
            <div class="card h-100">
                <div class="bg-image hover-zoom view view-cascade overlay">
                    <img src="assets/img/geisha.jpg" class="card-img-top" alt="kimonoWoman" />
                    <a href="view/kansai.php">
                        <div class="mask rgba-red-light"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title titleCardSize">Kansai 関西</h5>
                    <p class="card-text fontSizeCard">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    <p><a href="view/kansai.php" class="black-text seeMore ml-3">Plus d'infos sur le Kansai <i class="fas fa-plus-circle"></i></a></p>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <img src="assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <div class="container-fluid gastronomieSection mt-5">
        <h2 class="titleFoodIndex">La Cuisine du kansai</h2>
        <p class="container textGastronomie">La <bold>gastronomie japonaise</bold> est l'une des cuisines la plus répandue dans le monde. 
        De par sa qualité et à sa diversité. Chaque région du Japon possède sa cuisine locale, selon la disposition des ingrédients cultivés.
        Cette grande diversité gastonomique est désignée sous le terme <em>kyoudo ryouri 郷土料理</em>. Certaines spécialités régionales 
        sont devenues des plats nationaux tels que les <em>sushis</em> ou encore l'<em>okonomiyaki</em>.<br>
        La <bold>cuisine du Kansai</bold> est une cuisine très street-food du côté d'</em>Osaka</em> et très raffinée à </em>Kyoto</em>.
        Connue mondialement grâce, notamment, à l'</em>okonomiyaki</em>, aux <em>takoyaki</em> et, bien sûr, le <em>boeuf de Kobe</em>.</p>
    </div>

    <div class="container mt-4 text-center">
        <a href="view/gastronomie.php" class="black-text seeMore">Voir la page gastronomie <i class="fas fa-plus-circle"></i></a>
    </div>

    <div class="text-center mt-5">
        <img src="assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <!-- Vocabulaire card -->

    <div class="container-fluid mx-auto row text-center justify-content-center">
        <div class="card vocabularyCard text-white red darken-1 mb-3 mt-5 shadow-lg" style="max-width: 16rem">
            <div class="card-header"><i class="fas fa-language fa-2x"></i></div>
            <div class="card-body">
                <h5 class="card-title"><strong>Bonjour</strong></h5>
                <p class="card-text white-text"><strong>おはよう</strong></p>
            </div>
        </div>
        <div class="card vocabularyCard text-white red darken-1 mb-3 mt-5 shadow-lg" style="max-width: 16rem">
            <div class="card-header"><i class="fas fa-language fa-2x"></i></div>
            <div class="card-body">
                <h5 class="card-title"><strong>Merci</strong></h5>
                <p class="card-text white-text"><strong>ありがとう</strong></p>
            </div>
        </div>
        <div class="card vocabularyCard text-white red darken-1 mb-3 mt-5 shadow-lg" style="max-width: 16rem">
            <div class="card-header"><i class="fas fa-language fa-2x"></i></div>
            <div class="card-body">
                <h5 class="card-title"><strong>Au revoir</strong></h5>
                <p class="card-text white-text"><strong>さようなら</strong></p>
            </div>
        </div>
        <div class="card vocabularyCard text-white red darken-1 mb-3 mt-5 shadow-lg" style="max-width: 16rem">
            <div class="card-header"><i class="fas fa-language fa-2x"></i></div>
            <div class="card-body">
                <h5 class="card-title"><strong>Bienvenue</strong></h5>
                <p class="card-text white-text"><strong>ようこそ</strong></p>
            </div>
        </div>
        <div class="card vocabularyCard text-white red darken-1 mb-3 mt-5 shadow-lg" style="max-width: 16rem">
            <div class="card-header"><i class="fas fa-language fa-2x"></i></div>
            <div class="card-body">
                <h5 class="card-title"><strong>S'il vous plaît</strong></h5>
                <p class="card-text white-text"><strong>おねがいします</strong></p>
            </div>
        </div>
    </div>

    <div class="container mt-4 text-center">
        <a href="view/vocabulaire.php" class="black-text seeMore">Voir plus <i class="fas fa-plus-circle"></i></a>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('view/include/footer.php') ?>

</body>

</html>