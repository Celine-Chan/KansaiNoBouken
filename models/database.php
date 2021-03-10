<?php

class DataBase
{
    protected $dataBase;

    /**
     * Connexion à la base de données
     */
    public function __construct()
    {
        try {
            $this->dataBase = new PDO('mysql:host=localhost;dbname=kansainobouken;charset=utf8', 'kansaiProjet', 'kansainobouken');
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }
}
