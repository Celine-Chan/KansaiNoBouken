<?php

require_once '../models/database.php';
require_once '../models/users.php';
// var_dump($_SESSION);
$usersInfo = new Users;
$usersDetail = $usersInfo->getUsersDetail($_SESSION['users_id']);
// var_dump($usersDetail);

