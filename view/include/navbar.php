<nav class="navbar fixed-top navbar-expand-lg navbar-collapse red-600">
    <div class="container-fluid">
        <a class="navbar-brand text-dark webSiteTitle" href="../../index.php">Kansai no Bouken</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="https://img.icons8.com/emoji/48/000000/white-flower.png" /></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active navFont" aria-current="page" href="../../view/galerie.php">Galerie</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navFont" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kansai
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="../../view/kansai.php">Kansai</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="../../view/osaka.php">Osaka</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="../../view/kyoto.php">Kyoto</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="../../view/nara.php">Nara</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="../../view/kobe.php">Kobe</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="../../view/wakayama.php">Wakayama</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link navFont" href="../../view/gastronomie.php">Gastronomie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navFont" href="../../view/vocabulaire.php">Vocabulaire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navFont" href="../../view/contact.php">Contact</a>
                </li>
                <!-- disparait quand l'user est connecté -->
                <li class="nav-item">
                <a class="nav-link navFont btnNavConnexion" href="../../view/inscription.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navFont btnNavConnexion" href="../../view/connexion.php">Connexion</a>
                </li>
                <!-- apparait quand l'user est connecté -->
                <li class="nav-item">
                    <a class="nav-link navFont btnNavConnexion" href="../../view/userAccount.php">Mon compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navFont btnNavConnexion" href="../../view/disconnection.php">Déconnexion</a>
                </li>
                <!-- apparait quand l'admin est connecté -->
                <li class="nav-item">
                    <a class="nav-link navFont btnNavConnexion" href="../../view/admin.php">Admin</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="mot-clé" aria-label="Search">
                <a type="submit" class="searchButton"><img src="../../assets/img/tambour.svg" alt="search" class="searchNavBar"></a>
            </form>
        </div>
    </div>
</nav>