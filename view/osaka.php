<?php
session_start();
require_once '../controllers/controller_osaka.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Osaka</title>
    <?php include('../view/include/header.php') ?>
</head>

<body>

    <?php include('../view/include/navbar.php') ?>

    <div class="osakaPageParalax">
        <h1 class="pt-5 ms-5 osakaTitlePageParalax">OSAKA</h1>
        <div class="textOsakaParalax mt-5 ms-3">
            <p>Découvrez la ville d'Osaka qui est la 3ème plus grande ville du Japon derrière Tokyo et
                Yokohama.
                osaka est connu pour son hospitalité, ses animations et sa gastronomie typique.</p>
        </div>
    </div>

    <div class="fullTextPageOsaka container d-flex">
        <div class="mt-5">
            <img src="../assets/img/osaka/glico.jpg" alt="glico" class="img-fluid glicoImgOsaka">
        </div>
        <div class="col">
            <div class="container textPageOsaka mt-5">
                <p>La ville d'Osaka se situe dans la préfecture du même nom situé au centre-ouest de l'île de Honshu.
                    Elle est la troisième plus grande ville du Japon derrière Tokyo et Yokohama. Littéralement, Osaka signifie
                    "grande pente".
                    Sa construction remonte au IIIème siècle et devient un atout majeur dans les relations entre la Corée et la Chine.
                    Le célèbre Toyotomi Hideyoshi décida en 1583 d'y construire un chateau, le fameux Osaka-jo. Cette construction permettra
                    à la ville d'Osaka de devenir un lieu de commerce réputé.</p>
                <p>Cependant, pendant la 2nd guerre mondiale, la ville a été fortement impacté par les bombardements. La reconstruction
                    s'est effectué très rapidement, d'où une archtecture très diversifiée mélant traditions et modernité.</p>
            </div>
            <!-- <div class="container row imgPageOsaka">
                <img src="../assets/img/osaka/legoGirafe.jpg" alt="lego girafe" class="img-fluid legoImgOsaka">
                <div class="col">
                    <img src="../assets/img/osaka/makiSushi.jpg" alt="maki sushi" class="img-fluid makiSushi mb-2">
                    <img src="../assets/img/osaka/giftTemple.jpg" alt="Gift Temple" class="img-fluid giftTemple">
                </div>
            </div> -->
        </div>
    </div>

    <div>
        <h2 class="mt-5 text-dark ms-5 mb-5">Derniers articles...</h2>

        <?php foreach ($osakaArticles as $articles) {
            if (isset($_SESSION['users_role']) && $_SESSION['users_role'] == '1') { ?>

                <form action="modifyArticle.php" method="POST">
                    <div class="container d-flex flex-row-reverse col-12 mb-3">
                        <button type="submit" class="btn btn-success btn-rounded" name="modifyArticle" value="<?= $articles['article_id'] ?>"><i class="fas fa-edit"></i> Modifier l'article</button>
                </form>

                <button type="button" class="btn btn-danger btn-rounded" data-bs-toggle="modal" data-bs-target="#deleteArticle<?php echo $articles['article_id'] ?>"><i class="fas fa-trash-alt"></i> Supprimer l'article</button>
                <!-- Modal -->
                <div class="modal fade" id="deleteArticle<?php echo $articles['article_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel"><img src="../assets/img/deux-katanas.svg" class="deleteIcon" alt="deleteIcon"> Supprimer l'article</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Voulez-vous vraiment supprimer cet article?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                <form action="osaka.php" method="POST">
                                    <button type="submit" name="deleteArticle" value="<?php echo $articles['article_id'] ?>" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>


    <div class="card container mb-5">
        <div class="h3"><?= $articles['article_title'] ?></div>
        <span class="ms-2 fst-italic"><?= $articles['article_date'] ?></span>
        <div class="card-body">
            <p class="card-text">
                <?= $articles['article_contenu'] ?>
            </p>
        </div>
    </div>

<?php } ?>

</div>

<div>
    <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>

<?php include('../view/include/footer.php') ?>
</body>

</html>