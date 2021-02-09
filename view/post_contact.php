<?php

var_dump($_POST);

// $errors = [];

// if(!array_key_exists('lastName',$_POST) || $_POST['lastName'] == ''){
//     $errors['lastName'] = 
// }

$message = $_POST['textContact'];
$headers = 'FROM: kansainobouken@gmail.com';

mail('kansainobouken@gmail.com', 'Formulaire de contact', $message, $headers);

?>