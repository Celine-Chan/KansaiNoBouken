<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Administrateur</title>
    <script src="https://cdn.tiny.cloud/1/75w0aspes5o1fsfrwo2wxkidqu37998magwy5f44mnuk9ytq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <?php include('../view/pagePortion/header.php') ?>
</head>

<body>

    <?php include('../view/pagePortion/navbar.php') ?>

    <div class="banniereInscriptionImg mb-5">
        <img src="../assets/img/banniere/banniereAdmin.jpg" alt="admin" class="img-fluid adminImg">
    </div>

    <h1 class="text-center">Page administrateur</h1>


    <form action="osaka.php" method="POST" class="container col-10 row g-3 mx-auto">

        <h2>Article Osaka</h2>

        <textarea name="osakaArticle">Welcome to TinyMCE!</textarea>

        <div class="col-12 text-center mb-3">
            <input type="submit" name="submit" value="envoyer">
        </div>
    </form>





    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>


    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image media table charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    <?php include('../view/pagePortion/footer.php') ?>
</body>

</html>