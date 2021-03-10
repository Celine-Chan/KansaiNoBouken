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

    //récupération de l'user dans la base de données pour connexion
    public function getInfoUser(string $usersPseudo)
    {

        $query = 'SELECT `users_id`, `users_firstname`, `users_lastname`, `users_pseudo`, `users_birthdate`, 
        `users_gender`, `users_japantrip`, `users_mail`, `users_password`, `users_role` 
        FROM `users` 
        WHERE `users_pseudo` = :users_pseudo';

        $getInfoQuery = $this->dataBase->prepare($query);

        $getInfoQuery->bindValue(':users_pseudo', $usersPseudo, PDO::PARAM_STR);
        $getInfoQuery->execute();
        $infosUsers = $getInfoQuery->fetch();

        if ($infosUsers) {
            if (!empty($infosUsers)) {
                return $infosUsers;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function verifyPassword($usersPseudo, $usersPassword)
    {

        $query = 'SELECT `users_firstname`, `users_lastname`, `users_pseudo`, `users_birthdate`, 
        `users_gender`, `users_japantrip`, `users_mail`, `users_password`, `users_role` 
        FROM `users` 
        WHERE `users_pseudo` = :users_pseudo';

        $getInfoQuery = $this->dataBase->prepare($query);

        $getInfoQuery->bindValue(':users_pseudo', $usersPseudo, PDO::PARAM_STR);
        $getInfoQuery->execute();
        $infosUsers = $getInfoQuery->fetch();

        if ($infosUsers) {
            $passwordInDb = $infosUsers['users_password'];
            return password_verify($usersPassword, $passwordInDb);
        } else {
            return false;
        }

        return $infosUsers;
    }

    //aficher info user sur userAccount
    public function getUsersDetail(string $idUser)
    {
        $query = 'SELECT `users_id`, `users_firstname`, `users_lastname`, `users_pseudo`, `users_birthdate`, 
        `users_gender`, `users_japantrip`, `users_mail` 
        FROM `users` 
        WHERE `users_id` = :users_id';

        // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL
        $getDetailsUserQuery = $this->dataBase->prepare($query);

        // Je bind ma value idPatient à mon paramètre $idArticle
        $getDetailsUserQuery->bindValue(':users_id', $idUser, PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($getDetailsUserQuery->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return $getDetailsUserQuery->fetch();
        } else {
            return false;
        }
    }
}
