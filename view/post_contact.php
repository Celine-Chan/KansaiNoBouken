<?php

$errors = [];

// $subjectContact = [
//     1 => 'Article',
//     2 => 'Galerie',
//     3 => 'Gastronomie',
//     4 => 'Vocabulaire',
//     5 => 'Autres'
// ];

$name = 'Formulaire de contact ' . $_POST['lastName'] . ' ' . $_POST['firstName'];
$message = $_POST['textContact'];
$headers = 'FROM : ' . $_POST['mail'];
//$subjectContact[$_POST['subjectContact']]

mail('kansainobouken@gmail.com', $name, $message, $headers);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Contact</title>
    <?php include('include/header.php') ?>
</head>

<body>

    <div class="container text-center mt-5">
        <p class="note note-success">
            <strong>Note success:</strong> Votre message a bien été envoyé !
        </p>

    </div>

    <div class="container text-center">
        <!-- <img src="../assets/img/expedie.svg" alt="message envoyé" class="logosend"> -->
    </div>

    <div class="container text-center">
        <p class="mt-3">Vous allez être redirigé automatiquement sur la page contact.</p>
        <p>Sinon <a href="contact.php" class="redirectindex">cliquez ici</a></p>
    </div>

    <?php include('include/footer.php') ?>
    <script type="text/javascript">
        setTimeout('Redirect()', 2000);

        function Redirect() {
            location.href = 'contact.php';
        }
    </script>
</body>

</html>