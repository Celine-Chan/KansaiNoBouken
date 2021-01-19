<nav class="navbar fixed-top navbar-expand-lg red-600">
    <div class="container-fluid">
        <a class="navbar-brand text-dark webSiteTitle" href="index.php">Nihon no Bouken</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="https://img.icons8.com/emoji/48/000000/white-flower.png"/></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark navFont" aria-current="page" href="gallerie.php">Gallerie</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark navFont" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kansai
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="kansai.php">Kansai</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="osaka.php">Osaka</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="kyoto.php">Kyoto</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="nara.php">Nara</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="kobe.php">Kobe</a></li>
                        <li><a class="dropdown-item text-dark hoverBackgroundNav" href="wakayama.php">Wakayama</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark navFont" href="gastronomie.php">Gastronomie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark navFont" href="vocabulaire.php">Vocabulaire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark navFont" href="inscription.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark navFont" data-toggle="modal" data-target="#modalLoginForm">Connexion</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="mot-clé" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix black-text"></i>
                        <input type="email" name="mail" id="defaultForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Votre mail</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix black-text"></i>
                        <input type="password"  name="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Mot de passe</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default red darken-4 buttonSignIn" type="submit" >Connexion</button>
                </div>
            </div>
        </div>
    </div>