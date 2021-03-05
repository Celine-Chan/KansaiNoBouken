<?php

class Users extends DataBase
{
    /**
     * Méthode permettant de rajouter un patient dans notre base de données
     * 
     * @param array $patientDetails contient toute les infos du patient
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function addUsers(array $usersDetails)
    {
        //je mets en place des marqueurs nominatifs pour préparer ma requête avec des valeurs récupérées via form
        $query = 'INSERT INTO `users` (`users_firstname`, `users_lastname`, `users_pseudo`, `users_birthdate`, 
        `users_gender`, `users_japantrip`, `users_mail`, `users_password`, `users_role`) 
        VALUES (:users_firstname, :users_lastname, :users_pseudo, :users_birthdate, :users_gender, :users_japantrip,
        :users_mail, :users_password, :users_role)';

        //nous préparons notre requête à l'aide de la méthode prepare
        $addUsersQuery = $this->dataBase->prepare($query);

        $password = password_hash($usersDetails['password'], PASSWORD_BCRYPT);

        // je bind mes valeurs à l'aide de la méthode bindValue() (=lier les valeurs)
        $addUsersQuery->bindValue(':users_firstname', $usersDetails['firstName'], PDO::PARAM_STR);
        $addUsersQuery->bindValue(':users_lastname', $usersDetails['lastName'], PDO::PARAM_STR);
        $addUsersQuery->bindValue(':users_pseudo', $usersDetails['pseudo'], PDO::PARAM_STR);
        $addUsersQuery->bindValue(':users_birthdate', $usersDetails['birthDate'], PDO::PARAM_STR);
        $addUsersQuery->bindValue(':users_gender', $usersDetails['gender'], PDO::PARAM_STR);
        $addUsersQuery->bindValue(':users_japantrip', $usersDetails['japanTrip'], PDO::PARAM_INT);
        $addUsersQuery->bindValue(':users_mail', $usersDetails['mail'], PDO::PARAM_STR);
        $addUsersQuery->bindValue(':users_password', $password, PDO::PARAM_STR);
        $addUsersQuery->bindValue(':users_role', $usersDetails['role'], PDO::PARAM_INT);

        //tester et executer la requête pour afficher message erreur
        if ($addUsersQuery->execute()) {
            return true;
        } else {
            return false;
        }
    } 

    //récupération de l'user dans la base de données
    // public function connexionUser(){

    //     $query = 'SELECT users_id, users_password FROM users WHERE users_pseudo = :users_pseudo';

    //     $queryObj = $this->dataBase->query($query);
    //     $result = $queryObj->fetchAll();
    //     return $result;

    //     //comparaison du password envoyé
    //     $isPasswordCorrect = password_verify($_POST[''])
    // }
}
