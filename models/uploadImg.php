<?php

class UploadImg extends DataBase
{
    /**
     * Méthode permettant d'ajouter les photos
     */
    public function addImg(array $uploadDetails)
    {
        $query = 'INSERT INTO `gallery` (`gallery_name`, `gallery_textalt`)
        VALUES (:gallery_name, :gallery_textalt)';

        $addImgQuery = $this->dataBase->prepare($query);

        $addImgQuery->bindValue(':gallery_name', $uploadDetails["gallery_name"], PDO::PARAM_STR);
        $addImgQuery->bindValue(':gallery_textalt', $uploadDetails['gallery_textalt'], PDO::PARAM_STR);

        //tester et executer la requête pour afficher message erreur
        if ($addImgQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Méthode permettant de supprimer les photos
     */
    // public function DeleteGallery($galleryId)
    // {

    //     $query = 'DELETE FROM `gallery` 
    //     WHERE gallery_id = :gallery_id';

    //     // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL
    //     $deletegalleryQuery = $this->dataBase->prepare($query);

    //     // On bind les values pour renseigner les marqueurs nominatifs
    //     $deletegalleryQuery->bindValue(':gallery_id', $galleryId , PDO::PARAM_STR);

    //     // test et execution de la requête pour afficher message erreur
    //     if ($deletegalleryQuery->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
