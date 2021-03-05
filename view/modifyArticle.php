<?php
require_once "../controllers/controller_modifyArticle.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Administrateur</title>
    <script src="https://cdn.tiny.cloud/1/75w0aspes5o1fsfrwo2wxkidqu37998magwy5f44mnuk9ytq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <?php include('../view/pagePortion/header.php') ?>
</head>

<body class="backAdmin">

    <?php include('../view/pagePortion/navbar.php') ?>

    <h1 class="text-center mb-5 mt-5 adminTitle text-light">Compte administrateur</h1>

    <div class="container mt-5 col-10 row g-3 mx-auto">

        <p class="text-info"><?= $messages['addArticle'] ?? '' ?></p>

        <?php
        // Nous allons afficher le formulaire : 
        //    si modifyArticle n'est pas vide = nous venons bien de la page de la ville
        //    si le tableau d'erreurs n'est pas vide = le formulaire contient des erreurs

        if (!empty($_POST['modifyArticle']) || !empty($errors)) { ?>
            <h5 class="text-center text-danger"><?= $messages['updateArticle'] ?? '' ?></h5>

            <form action="modifyArticle.php" method="POST" class="shadow-lg p-5 addArticleForm">

                <h2 class="mt-3 mb-5 subTitleAdmin text-center">Modification d'article</h2>

                <div class="form-row mb-4">

                    <div class="form-outline col-md-6">
                        <input type="text" id="article_title" class="form-control text-dark" name="article_title" value="<?= $detailsArticleArray['article_title'] ?? (isset($_POST['article_title']) ? htmlspecialchars($_POST['article_title']) : '') ?>" />
                        <label class="form-label" for="article_title">Titre de l'article :</label>
                        <span class="error"><?= $errors['article_title'] ?? '' ?></span>
                    </div>

                    <div class="mb-4 mt-4">
                        <input name="article_date" type="date" value="<?= $detailsArticleArray['article_date'] ?>">
                    </div>

                    <div class="mb-4 col-md-6">
                        <select class="form-select text-dark" name="city_id" aria-label="Default select example">
                            <option selected disabled>Sélection de la ville</option>

                            <?php foreach ($articleArray as $valueCity) { ?>
                                <option value="<?= $valueCity['city_id'] ?>" <?= $valueCity['city_id'] == $detailsArticleArray['city_id'] ? 'selected' : '' ?>><?= $valueCity['city_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div>
                        <textarea name="article_contenu" id="editor" placeholder="Insertion article"><?= $detailsArticleArray['article_contenu'] ?></textarea>
                    </div>

                    <!-- <div class="col-12 text-center mt-3">
                        <input class="btn btn-primary" type="submit" name="updateArticleBtn" value="Enregistrer les modifications">
                        <a type="button" href="osaka.php" class="btn btn-sm btn-outline-danger">Annuler</a>
                    </div> -->
                    <button type="submit" class="btn btn-sm btn-success" name="updateArticleBtn" value="<?= $_POST['modifyArticle'] ?>">Enregistrer les modifications</button>

                </div>
            </form>

        <?php
            // si la requête d'update passe, nous l'indiquons à l'utilisateur via un message
        } else if ($updateArticleInBase) { ?>
            <h5 class="text-center text-info">Les modifications ont bien été prises en compte</h5>
            <div class="text-center mt-4">
                <a type="button" href="<?php  ?>" btn btn-sm btn-outline-secondary>Retour Article</a>
            </div>

        <?php } else { ?>
            <p class="h5 text-center text-info">Veuillez selectionner un article</p>
            <div class="text-center mt-4">
                <a type="button" href="osaka.php" class="btn btn-sm btn-warning">Retour Article</a>
            </div>

        <?php } ?>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <script>
        // tinymce.init({
        //     selector: 'textarea',
        //     plugins: 'advlist autolink lists link style image emoticons media table charmap print preview hr anchor pagebreak',
        //     toolbar_mode: 'floating',
        // });

        tinymce.init({
            selector: 'textarea#editor',
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
    <?php include('../view/pagePortion/footer.php') ?>
</body>

</html>