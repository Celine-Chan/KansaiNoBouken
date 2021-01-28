<?php

$message = "";
$messageSecond = "";
$messageOk = "";
$messageNoFormat = "";

// Vérifie la taille du fichier - 1Mo maximum
$maxsize = 1000000;
// Vérifie si le fichier a été uploadé sans erreur.
if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["fileToUpload"]["name"];
    $filetype = $_FILES["fileToUpload"]["type"];
    $filesize = $_FILES["fileToUpload"]["size"];

    // pour ne pas upload un ficher ou le format serait modifier.
    if (
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/jpeg" ||
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/gif" ||
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/png"
    ) {

        // Vérifie l'extension du fichier
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        // si l'extension n'existe pas dans le tableau
        if (!array_key_exists($extension, $allowed)) {
            // echo 'Erreur : Veuillez sélectionner un format de fichier valide.';
            $message = 'Erreur : Veuillez sélectionner un format de fichier valide.';
        } else if ($filesize > $maxsize) {
            // echo 'Error: La taille de l'image est supérieure à la limite autorisée.';
            $messageSecond = 'Erreur: La taille de l\'image est supérieure à la limite autorisée.';
        } else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../assets/img/galerieUpload/" . uniqid() . $_FILES["fileToUpload"]["name"])) {
            // echo'Le fichier ' . $filename . ' a bien été uploadé.';
            $messageOk = 'Le fichier ' . $filename . ' a bien été uploadé.';
        }
    } else {
        $messageNoFormat = 'Erreur : Mr Mime #122 !!.';
    }
}

if (count(scandir('../assets/img/galerieUpload')) > 0) {
    $numberCount = count(scandir('../assets/img/galerieUpload/')) -2; //élimine les 2 fichiers '.' et '..'
} else {
    $numberCount = 0;
}
//si count(scandir()) est plus grand que 0 on enlève 2 sinon le nombre d'image est 0.
//var_dump(scandir('img'));

?>
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

    <form action="kyoto.php" method="POST" class="container col-10 row g-3 mx-auto">

        <h2>Article Kyoto</h2>

        <textarea name="kyotoArticle">Welcome to TinyMCE!</textarea>

        <div class="col-12 text-center mb-3">
            <input type="submit" name="submit" value="envoyer">
        </div>
    </form>



    <div class="container">

        <form action="admin.php" method="POST" enctype="multipart/form-data" class="mt-5">

            <h2>Upload Galerie</h2>

            <div class="form-group">
                <label class="form-label" for="fileToUpload" id="Choix">Choisissez votre image :</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
            </div>

            <div class="form-group mt-3 text-center">
                <!-- <input type="submit" name="submit" value="Envoyer"> -->
                <button type="submit" name="submit" class="btn" id="bouton">Upload</button>
            </div>

            <?= (!empty($message))  ? " <p class='messagePHP'>  $message  </p>" : "" ?>

            <?= (!empty($messageSecond)) ? " <p class='messagePHP'>  $messageSecond  </p>" : "" ?>

            <?= (!empty($messageOk)) ? " <p class='messagePHP'>  $messageOk  </p>" : "" ?>

            <?= (!empty($messageNoFormat)) ? " <p class='messagePHP'>  $messageNoFormat  </p>" : "" ?>


            <p class="note note-danger"><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 1 Mo.</p>

        </form>
    </div>






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