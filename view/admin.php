<?php

require_once "../controllers/controller_admin.php";

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


    <div class="container">
        <h1 class="text-center mb-5 adminTitle">Compte administrateur</h1>

        <div class="mt-5 text-center">
            <form action="admin.php" method="POST" class="container col-10 row g-3 mx-auto">

                <p class="h3 text-info"><?= $messages['addArticle'] ?? '' ?></p>

                <h2 class="mt-3 mb-3 subTitleAdmin">Article Osaka</h2>

                <input type="text" name="osakaTitle" placeholder="Titre de l'article">
                <input type="date" name="osakaDate" placeholder="Date de l'article">
                <input type="text" name="cityId" placeholder="Ville de l'article">

                <textarea name="osakaArticle" id="editor">Welcome to TinyMCE!</textarea>

                <div class="col-12 text-center mb-3">
                    <input class="btn btn-primary" type="submit" name="addArticleOsaka" value="envoyer">
                </div>
            </form>

            <button type="button" class="btn btn-success btn-rounded"><i class="fas fa-edit"></i> Modifier l'article</button>
            <button type="button" class="btn btn-danger btn-rounded"><i class="fas fa-trash-alt"></i> Supprimer l'article</button>
        </div>

        <div class="text-center mt-5">
            <img src="../assets/img/separator.svg" alt="separator" class="w-25">
        </div>

        <div class="mt-5 text-center">
            <form action="kyoto.php" method="POST" class="container col-10 row g-3 mx-auto mt-5">

                <h2 class="mt-3 mb-3 subTitleAdmin">Article Kyoto</h2>

                <textarea name="kyotoArticle" id="editor">Welcome to TinyMCE!</textarea>

                <div class="col-12 text-center mb-3">
                    <input class="btn btn-primary" type="submit" name="submit" value="envoyer">
                </div>
            </form>

            <button type="button" class="btn btn-success btn-rounded"><i class="fas fa-edit"></i> Modifier l'article</button>
            <button type="button" class="btn btn-danger btn-rounded"><i class="fas fa-trash-alt"></i> Supprimer l'article</button>
        </div>

        <div class="text-center mt-5">
            <img src="../assets/img/separator.svg" alt="separator" class="w-25">
        </div>

        <div class="mx-auto col-8">
            <form action="admin.php" method="POST" enctype="multipart/form-data" class="mt-5">

                <p class="h3 text-info"><?= $messages['addImg'] ?? '' ?></p>

                <h2 class="mt-3 ms-4 text-center mb-3 subTitleAdmin">Upload Galerie</h2>

                <div class="form-group mx-4">
                    <label class="form-label text-dark" for="fileToUpload" id="Choix">Choisissez votre image :</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                </div>

                <div class="form-group mt-3 text-center">
                    <button type="submit" name="submit" class="btn btn-primary" id="bouton">Envoyer photo</button>
                </div>

                <?= (!empty($message))  ? " <p class='messagePHP'>  $message  </p>" : "" ?>

                <?= (!empty($messageSecond)) ? " <p class='messagePHP'>  $messageSecond  </p>" : "" ?>

                <?= (!empty($messageOk)) ? " <p class='messagePHP'>  $messageOk  </p>" : "" ?>

                <?= (!empty($messageNoFormat)) ? " <p class='messagePHP'>  $messageNoFormat  </p>" : "" ?>

                <p class="note note-danger mt-3 mx-4 text-dark"><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 1 Mo.</p>

            </form>
        </div>

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
            toolbar: 'undo redo | link image | code',
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
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