<?php
class Article extends DataBase
{

    public function getArticle()
    {
        $query = 'SELECT `article_title`, `article_contenu`, `article_date`, `city_id` FROM `article`';
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll();
        return $result;
    }

    public function addArticle(array $ArticleDetails)
    {
        $query = 'INSERT INTO article (`article_title`, `article_contenu`, `article_date`, `city_id`) 
        VALUES (:article_title, :article_contenu, :article_date, :city_id)';

        $addArticleQuery = $this->dataBase->prepare($query);

        $addArticleQuery->bindValue(':article_title', $ArticleDetails['article_title'], PDO::PARAM_STR);
        $addArticleQuery->bindValue(':article_contenu', $ArticleDetails['article_contenu'], PDO::PARAM_STR);
        $addArticleQuery->bindValue(':article_date', $ArticleDetails['article_date'], PDO::PARAM_STR);
        $addArticleQuery->bindValue(':city_id', $ArticleDetails['city_id'], PDO::PARAM_INT);

        //tester et executer la requête pour afficher message erreur
        if ($addArticleQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
// class Osaka extends DataBase
// {

//     public function getOsakaArt()
//     {
//         $query = 'SELECT `article_title`, `article_contenu`, `article_date`, `city_id` FROM `article`';
//         $queryObj = $this->dataBase->query($query);
//         $result = $queryObj->fetchAll();
//         return $result;
//     }

//     public function addOsakaArticle(array $osakaArtDetails)
//     {
//         $query = 'INSERT INTO article (`article_title`, `article_contenu`, `article_date`, `city_id`) 
//         VALUES (:article_title, :article_contenu, :article_date, :city_id)';

//         $addOsakaArtQuery = $this->dataBase->prepare($query);

//         $addOsakaArtQuery->bindValue(':article_title', $osakaArtDetails['article_title'], PDO::PARAM_STR);
//         $addOsakaArtQuery->bindValue(':article_contenu', $osakaArtDetails['article_contenu'], PDO::PARAM_STR);
//         $addOsakaArtQuery->bindValue(':article_date', $osakaArtDetails['article_date'], PDO::PARAM_STR);
//         $addOsakaArtQuery->bindValue(':city_id', $osakaArtDetails['city_id'], PDO::PARAM_INT);

//         //tester et executer la requête pour afficher message erreur
//         if ($addOsakaArtQuery->execute()) {
//             return true;
//         } else {
//             return false;
//         }
//     }
// }


