<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Contact</title>
    <?php include('pagePortion/header.php') ?>
</head>


<body>

    <!--Navbar -->
    <?php include('pagePortion/navbar.php') ?>


    <!-- image bannière -->
    <div class="imgContact">
        <img src="assets/img/osaka/osakajou2.jpg" alt="osakajou" class="img-fluid osakajouImg">
    </div>

    <div class="container mt-5">
        <form class="text-center border border-danger p-5" action="#!">

            <p class="h4 mb-4">Contact</p>

            <!-- Name -->
            <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nom">

            <!-- Email -->
            <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

            <!-- Subject -->
            <label>Sujet</label>
            <select class="browser-default custom-select mb-4">
                <option value="" disabled>Sélectionner une option</option>
                <option value="1" selected>Article</option>
                <option value="2">Gallerie</option>
                <option value="3">Gastronomie</option>
                <option value="4">Vocabulaire</option>
                <option value="5">Autres</option>
            </select>

            <!-- Message -->
            <div class="form-group">
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows=7 placeholder="Message"></textarea>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block red darken-4" type="submit">Envoyer</button>

        </form>
    </div>



    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('pagePortion/footer.php') ?>
</body>

</html>