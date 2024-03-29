<?php
session_start();
if (!isset($_SESSION['users_role']) || $_SESSION['users_role'] == 0)  {
    header("Location:../error-404.php");
}
require_once "../controllers/controller_admin.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Administrateur</title>
    <script src="https://cdn.tiny.cloud/1/75w0aspes5o1fsfrwo2wxkidqu37998magwy5f44mnuk9ytq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <?php include('../view/include/header.php') ?>
</head>

<body class="backAdmin">

    <?php include('../view/include/navbar.php') ?>

    <h1 class="text-center mb-5 mt-3 adminTitle text-light">Compte administrateur</h1>

    <div class="container btnBack mt-5 col-10">

        <h2 class="text-center mt-3 titleTable mb-5 text-light">Tableau de bord</h2>

        <div class="d-flex flex-column flex-md-row justify-content-around text-dark">

            <div class="card backCardAdmin col-12 col-sm-5 row mb-5 text-center">
                <div class="card-body ">
                    <div class="mt-2">
                        <h2 class="fontAdmin">Article</h2>
                        <a href="#addArticle" class="btn btn-danger ms-5">Ajouter un article</a>
                    </div>

                    <div class="mx-auto">
                        <h3 class="ms-3 mt-5 fontAdmin">Voir/Modifier/Supprimer les articles :</h3>
                        <div>
                            <a href="kansai.php" class="btn btn-primary ms-5">Kansai</a>
                            <a href="osaka.php" class="btn btn-primary">Osaka</a>
                            <a href="kyoto.php" class="btn btn-primary">Kyoto</a>
                            <a href="nara.php" class="btn btn-primary">Nara</a>
                            <a href="kobe.php" class="btn btn-primary">Kobe</a>
                            <a href="wakayama.php" class="btn btn-primary">Wakayama</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card backCardAdmin col-12 col-sm-5 row mb-5 text-center d-flex justify-content-center">
                <div class="mt-2">
                    <h2 class="fontAdmin">Galerie</h2>
                    <a href="#addImg" class="btn btn-danger ms-5 mt-3">Ajouter une photo</a>
                    <a href="galerie.php" class="btn btn-primary ms-3">Voir la Galerie</a>
                </div>
                <div class="mt-5">
                    <h2 class="fontAdmin">Gastronomie</h2>
                    <a href="#addRecipe" class="btn btn-danger ms-5 mt-3">Ajouter une recette</a>
                    <a href="gastronomie.php" class="btn btn-primary ms-3">Voir la page gastronomie</a>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <img src="../assets/img/separator.svg" alt="separator" class="w-25">
    </div>


    <div id="addArticle"></div>

    <div class="container mt-5 col-12 col-sm-10 row g-3 mx-auto">

        <form action="admin.php" method="POST" class="shadow-lg p-5 addArticleForm">
            <p class="h3 text-info text-center"><?= $messages['addArticle'] ?? '' ?></p>

            <h2 class="mt-3 mb-5 subTitleAdmin text-center">Ajout d'article</h2>

            <div class="form-row mb-4">

                <div class="form-outline col-md-6">
                    <input type="text" id="article_title" class="form-control text-dark" name="article_title" value="<?= isset($_POST['article_title']) ? $_POST['article_title'] : '' ?>" />
                    <label class="form-label" for="article_title">Titre de l'article :</label>
                </div>
                <div class="text-danger mb-4">
                    <span><?= isset($errorMessages['article_title']) ? $errorMessages['article_title'] : '' ?></span>
                </div>

                <div class="mb-4">
                    <input name="article_date" type="date" value="<?php date_default_timezone_set('Europe/Paris');
                                                                    setlocale(LC_TIME, 'fr.utf8');
                                                                    echo strftime('%Y-%m-%d') ?>">
                </div>

                <div class="mb-4 col-md-6">
                    <select class="form-select text-dark" name="city_id" aria-label="Default select example">
                        <option selected disabled>Sélection de la ville</option>
                        <?php foreach ($articleArray as $valueCity) { ?>
                            <option value="<?= $valueCity['city_id'] ?>" <?= isset($_POST['city_id']) && $_POST['city_id'] == $valueCity['city_id'] ? 'selected' : '' ?>><?= $valueCity['city_name'] ?></option>
                        <?php } ?>
                    </select>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['city_id']) ? $errorMessages['city_id'] : '' ?></span>
                    </div>
                </div>

                <div>
                    <textarea name="article_contenu" id="editor" placeholder="Insertion article"><?= isset($_POST['article_contenu']) ? $_POST['article_contenu'] : '' ?></textarea>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['article_contenu']) ? $errorMessages['article_contenu'] : '' ?></span>
                    </div>
                </div>

                <div class="col-12 text-center mt-3">
                    <input class="btn btn-primary" type="submit" name="addArticle" value="envoyer">
                </div>
            </div>
        </form>
    </div>

    <div class="text-center mt-5">
        <img src="../assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <div id="addImg"></div>

    <div class="mt-5 col-12 col-sm-8 row g-3 container mx-auto">
        <form action="admin.php" method="POST" enctype="multipart/form-data" class="container mx-auto row g-3 mt-5 uploadImgForm">

            <p class="h3 text-info"><?= $messages['addImg'] ?? '' ?></p>

            <h2 class="mt-3 ms-4 text-center mb-3 subTitleAdmin">Upload Galerie</h2>

            <div>
                <div class="form-outline mb-4 col-5">
                    <input type="text" id="title" class="form-control" name="gallery_name" />
                    <label class="form-label" for="title">Titre de la photo</label>
                    <div class="text-danger mb-4">
                        <span><?= isset($errorMessages['gallery_name']) ? $errorMessages['gallery_name'] : '' ?></span>
                    </div>
                </div>

                <div class="form-outline mb-4 col-5">
                    <input type="text" id="alt" class="form-control" name="gallery_textalt" />
                    <label class="form-label" for="alt">Descriptif de la photo</label>
                    <div class="text-danger mb-4">
                        <span><?= isset($errorMessages['gallery_textalt']) ? $errorMessages['gallery_textalt'] : '' ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group col-6">
                <label class="form-label text-dark" for="fileToUpload" id="Choix">Choisissez votre image :</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                <div class="text-danger mb-4">
                    <span><?= isset($errorMessages['fileToUpload']) ? $errorMessages['fileToUpload'] : '' ?></span>
                </div>
            </div>

            <div class="form-group mt-3 text-center">
                <button type="submit" name="addImg" class="btn btn-primary" id="bouton">Envoyer photo</button>
            </div>

            <?= (!empty($message))  ? " <p class='messagePHP'>  $message  </p>" : "" ?>

            <?= (!empty($messageSecond)) ? " <p class='messagePHP'>  $messageSecond  </p>" : "" ?>

            <?= (!empty($messageOk)) ? " <p class='messagePHP'>  $messageOk  </p>" : "" ?>

            <?= (!empty($messageNoFormat)) ? " <p class='messagePHP'>  $messageNoFormat  </p>" : "" ?>

            <p class="note note-danger mt-3 text-dark"><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 1 Mo.</p>

        </form>
    </div>

    <div class="text-center mt-5">
        <img src="../assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <div id="addRecipe"></div>

    <div class="mt-5 col-12 col-sm-8 row g-3 container mx-auto">
        <form action="admin.php" method="POST" enctype="multipart/form-data" class="container mx-auto row g-3 mt-5 addRecipeForm">

            <h2 class="mt-3 ms-4 text-center mb-3 subTitleAdmin">Ajout de recette</h2>

            <div class="form-row mb-4">
                <div class="form-outline mb-4 col-5">
                    <input type="text" id="title" class="form-control" />
                    <label class="form-label" for="title">Titre de la recette</label>
                </div>

                <div class="form-outline mb-4 col-5">
                    <input type="text" id="alt" class="form-control" />
                    <label class="form-label" for="alt">Résumé</label>
                </div>

                <div class="form-group mb-4 col-5">
                    <label class="form-label text-dark" for="fileToUpload" id="Choix">Choisissez votre image :</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                </div>

                <div class="form-outline mb-4 col-5">
                    <input type="text" id="alt" class="form-control" />
                    <label class="form-label" for="alt">Lien de la recette vidéo</label>
                </div>

                <div>
                    <textarea name="article_contenu" id="recipe" placeholder="Insertion recette"></textarea>
                </div>
            </div>

        </form>

    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            plugins: 'image code advlist autolink lists link style image emoticons media table charmap print preview hr anchor pagebreak',
            height: 300,
            toolbar: 'undo redo | link image | code',
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,

            forced_root_block: false,
            force_br_newlines: true,
            force_p_newlines: false,
            encoding: "UTF-8",
            entity_encoding: "raw",

            //permet de modifier les articles avec image
            relative_urls: false,
            remove_script_host: false,
            convert_urls: false,

            /*
            URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
            images_upload_url: 'postAcceptor.php',
            here we add custom filepicker only to Image dialog
            */
            file_picker_types: 'image',
            /* and here's our custom image picker*/
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                Note: In modern browsers input[type="file"] is functional without
                even adding it to the DOM, but that might not be the case in some older
                or quirky browsers like IE, so you might want to add it to the DOM
                just in case, and visually hide it. And do not forget do remove it
                once you do not need it anymore.
                */

                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        /*
                        Note: Now we need to register the blob in TinyMCEs image blob
                        registry. In the next release this part hopefully won't be
                        necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    <script>
        tinymce.init({
            selector: 'textarea#recipe',
            plugins: 'image code advlist autolink lists link style image emoticons media table charmap print preview hr anchor pagebreak',
            height: 500,
            toolbar: 'undo redo | link image | code',
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,

            forced_root_block: false,
            force_br_newlines: true,
            force_p_newlines: false,
            encoding: "UTF-8",
            entity_encoding: "raw",

            //permet de modifier les articles avec image
            relative_urls: false,
            remove_script_host: false,
            convert_urls: false,

            /*
            URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
            images_upload_url: 'postAcceptor.php',
            here we add custom filepicker only to Image dialog
            */
            file_picker_types: 'image',
            /* and here's our custom image picker*/
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                Note: In modern browsers input[type="file"] is functional without
                even adding it to the DOM, but that might not be the case in some older
                or quirky browsers like IE, so you might want to add it to the DOM
                just in case, and visually hide it. And do not forget do remove it
                once you do not need it anymore.
                */

                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        /*
                        Note: Now we need to register the blob in TinyMCEs image blob
                        registry. In the next release this part hopefully won't be
                        necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    <?php include('../view/include/footer.php') ?>
</body>

</html>