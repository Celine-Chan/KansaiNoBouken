<?php
class Article extends DataBase
{
    /**
     * méthode permettant de récupérer les articles
     */
    public function getArticle($city_id)
    {
        $query = 'SELECT `article_id`, `article_title`, `article_contenu`, DATE_FORMAT(`article_date`, \'%d-%m-%Y\') AS `article_date`, `city_id` FROM `article` WHERE `city_id` = "' . $city_id . '"ORDER BY article_date DESC';
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll();
        return $result;
    }

    /**
     * Méthode permettant d'ajouter les articles
     */
    public function addArticle(array $ArticleDetails)
    {
        $query = 'INSERT INTO article (`article_title`, `article_contenu`, `article_date`, `city_id`) 
        VALUES (:article_title, :article_contenu, :article_date, :city_id)';

        $addArticleQuery = $this->dataBase->prepare($query);

        $addArticleQuery->bindValue(':article_title', $ArticleDetails['article_title'], PDO::PARAM_STR);
        $addArticleQuery->bindValue(':article_contenu', $ArticleDetails['article_contenu'], PDO::PARAM_STR);
        $addArticleQuery->bindValue(':article_date', $ArticleDetails['article_date'], PDO::PARAM_STR);
        $addArticleQuery->bindValue(':city_id', $ArticleDetails['city_id'], PDO::PARAM_STR);

        //tester et executer la requête pour afficher message erreur
        if ($addArticleQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Méthode permettant d'afficher les villes dans le form select
     */
    public function getSelectCity()
    {
        $query = 'SELECT `city_id`, `city_name` FROM `city`';
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll();
        return $result;
    }

    /**
     * 
     * @param string $id article
     * @return array ou false si la requête ne passe pas
     */
    public function getDetailsArticle(string $idArticle)
    {
        // requete me permettant de recup infos article
        $query = 'SELECT 
        `article_id`, 
        `article_title`, 
        `article_contenu`,  
        `article_date`, 
        `city`.`city_id`,
        `city_name` 
        FROM `article`
        INNER JOIN city
        ON city.city_id = article.city_id 
        WHERE `article_id` = :article_id
        ORDER BY  `article_date` DESC';

        // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL
        $getDetailsArticleQuery = $this->dataBase->prepare($query);

        // Je bind ma value idPatient à mon paramètre $idArticle
        $getDetailsArticleQuery->bindValue(':article_id', $idArticle, PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($getDetailsArticleQuery->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return $getDetailsArticleQuery->fetch();
        } else {
            return false;
        }
    }


    /**
     * Méthode permettant de modifier les articles
     */
    public function UpdateArticle(array $ArticleDetails)
    {

        $query = 'UPDATE `article` SET 
        `article_title` = :article_title,
        `article_contenu` = :article_contenu,
        `article_date` = :article_date,
        `city_id` = :city_id
        WHERE article_id = :article_id';

        // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL
        $updateArticleQuery = $this->dataBase->prepare($query);

        // On bind les values pour renseigner les marqueurs nominatifs
        $updateArticleQuery->bindValue(':article_title', $ArticleDetails['article_title'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':article_contenu', $ArticleDetails['article_contenu'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':article_date', $ArticleDetails['article_date'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':city_id', $ArticleDetails['city_id'], PDO::PARAM_STR);
        $updateArticleQuery->bindValue(':article_id', $ArticleDetails['article_id'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($updateArticleQuery->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return true;
        } else {
            return false;
        }
    }

    /**
     * Méthode permettant de supprimer les articles
     */
    public function DeleteArticle($articleId)
    {

        $query = 'DELETE FROM `article` 
        WHERE article_id = :articleId';

        // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL
        $deleteArticleQuery = $this->dataBase->prepare($query);

        // On bind les values pour renseigner les marqueurs nominatifs
        $deleteArticleQuery->bindValue(':articleId', $articleId , PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($deleteArticleQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
