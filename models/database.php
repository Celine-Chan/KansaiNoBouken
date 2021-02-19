<?php

class DataBase
{
    protected $dataBase;

    // private $user = 'kansaiProjet';
    // private $password = 'kansainobouken';

    public function __construct()
    {
        try {
            $this->dataBase = new PDO('mysql:host=localhost;dbname=kansainobouken;charset=utf8', 'kansaiProjet', 'kansainobouken');
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }
}
