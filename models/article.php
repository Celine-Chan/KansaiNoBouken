<?php
class Article extends DataBase
{
    /**
     * méthode permettant de récupérer les articles
     */
    public function getArticle($city_id)
    {
        $query = 'SELECT `article_title`, `article_contenu`, DATE_FORMAT(`article_date`, \'%d-%m-%Y\') AS `article_date`, `city_id` FROM `article` WHERE `city_id` = ' . $city_id;
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
        $addArticleQuery->bindValue(':city_id', $ArticleDetails['city_id'], PDO::PARAM_INT);
        
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
}
