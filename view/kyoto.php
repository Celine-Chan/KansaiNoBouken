<?php
session_start();
require_once '../controllers/controller_kyoto.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Kyoto</title>
    <?php include('../view/include/header.php') ?>
</head>


<body>

    <?php include('../view/include/navbar.php') ?>

    <div class="kyotoPageParalax">
        <h1 class="pt-5 ms-5 kyotoTitlePageParalax">KYOTO</h1>
        <div class="textKyotoParalax mt-5 ms-3">
            <p>Découvrez Kyoto, ancienne capitale du
                Japon, le coeur culturel et religieux du
                Japon.
                Vous serez captivés par ses palais impériaux, ses milliers de sanctuaires shinto et temples
                bouddhistes.</p>
        </div>
    </div>

    <div class="fullTextPageKyoto container d-flex">
        <div class="mt-5">
            <img src="../assets/img/kyoto/lanterne.jpg" alt="lanterne" class="img-fluid lanterneImgKyoto img-fluid">
        </div>
        <div class="textPageKyoto mt-5 ms-3 col text-dark">
            <p>Mondialement connu comme étant la ville japonaise traditionnelle et culturelle grâce à son architecture et
                ses nombreux temples, Kyoto fut la capitale du Japon de l'an 794 à 1868 sous le nom de Heian-Kyo.
            Elle compte plus de 2 000 temples bouddhistes, des sanctuaires shinto, des palais, etc. Nombreux de ces 
            sites sont classés au patrimoine mondiale de l'UNESCO.</p>
            <p>Elle fut miraculeusement épargné par les bombardements de la seconde guerre mondiale ainsi qu'à 
                la bombe atomique.</p>
        </div>
    </div>

    <div>
        <h2 class="mt-5 text-dark ms-5 mb-5">Derniers articles...</h2>

        <?php foreach ($kyotoArticles as $articles) {
            if (isset($_SESSION['users_role']) && $_SESSION['users_role'] == '1') { ?>

                <form action="modifyArticle.php" method="POST">
                    <div class="container d-flex flex-row-reverse col-12 mb-3">
                        <button type="submit" class="btn btn-success btn-rounded" name="modifyArticle" value="<?= $articles['article_id'] ?>"><i class="fas fa-edit"></i> Modifier l'article</button>
                        <button type="button" class="btn btn-danger btn-rounded" data-bs-toggle="modal" data-bs-target="#deleteArticle<?php echo $articles['article_id'] ?>"><i class="fas fa-trash-alt"></i> Supprimer l'article</button>
                    </div>
                </form>


                <!-- Modal -->
                <div class="modal fade" id="deleteArticle<?php echo $articles['article_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><img src="../assets/img//svg/deux-katanas.svg" class="deleteIcon" alt="deleteIcon"> Supprimer l'article</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Voulez-vous vraiment supprimer cet article?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                <form action="kyoto.php" method="POST">
                                    <button type="submit" name="deleteArticle" value="<?php echo $articles['article_id'] ?>" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>

    <div class="card container mb-2 text-dark">
        <div class="h3"><?php if (isset($_SESSION['users_id'])) { ?>
                <div class="container mb-2 rating">
                    <img src="../assets/img/svg/emptyStar.svg" alt="note1" class="sizeStar">
                    <img src="../assets/img/svg/emptyStar.svg" alt="note2" class="sizeStar">
                    <img src="../assets/img/svg/emptyStar.svg" alt="note3" class="sizeStar">
                    <img src="../assets/img/svg/emptyStar.svg" alt="note4" class="sizeStar">
                    <img src="../assets/img/svg/emptyStar.svg" alt="note5" class="sizeStar">
                </div>
                <?php } ?><?= $articles['article_title'] ?>
        </div>
        <span class="ms-2 fst-italic"><?= $articles['article_date'] ?></span>
        <div class="card-body">
            <p class="card-text text-dark">
                <?= $articles['article_contenu'] ?>
            </p>
        </div>
    </div>


    <div class="container text-dark">
        <!-- apparait quand l'user est déconnecté -->
        <?php if (empty($_SESSION['users_id'])) { ?>
            <p class="mb-5">Vous souhaitez ajouter un commentaire à cet article ? <a href="connexion.php">Connectez-vous</a> ou <a href="inscription.php">inscrivez-vous</a> !</p>
        <?php } ?>
    </div>

    <div class="container text-dark">
        <?php if (isset($_SESSION['users_id'])) { ?>
            <p>Vous souhaitez donnez votre avis sur cet article ? N'hésitez pas à laisser un commentaire.</p>
        <?php } ?>
    </div>

    <div class="container backComment">
        <!-- apparait quand l'user est connecté -->
        <?php if (isset($_SESSION['users_id'])) { ?>

            <form action="osaka.php" method="POST" enctype="multipart/form-data" class="shadow-lg mb-5 container">
                <h2 class="mb-4 text-dark">Ajouter un commentaire</h2>

                <div class="mb-4">
                    <input name="commentUser_date" type="date" value="<?php date_default_timezone_set('Europe/Paris');
                                                                        setlocale(LC_TIME, 'fr.utf8');
                                                                        echo strftime('%Y-%m-%d') ?>">
                </div>

                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea" style="height: 100px"></textarea>
                </div>

                <div class="col-12 mt-3">
                    <input class="btn btn-primary" type="submit" name="addComment" value="Ajouter un commentaire">
                </div>
            </form>

        <?php } ?>
    </div>

    <div class="text-center mt-5 mb-5">
        <img src="../assets/img/separator.svg" alt="separator" class="w-25">
    </div>

<?php } ?>



<div>
    <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>

<?php include('../view/include/footer.php') ?>

</body>

</html>