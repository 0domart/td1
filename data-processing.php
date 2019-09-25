<?php
include 'utils.inc.php';
?>f

<?php
start_page('Data-Processing');
?>

<?php

$action = $_POST['action'];
if ($action == 'mailer') {
    $id = $_POST['id'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $verfimdp = $_POST['verifmdp'];
    $tel = $_POST['tel'];
    $pays = $_POST['pays'];
    $cgu = $_POST['cgu'];

    $message = 'Identifiant: ' . $id . PHP_EOL . "\t";
    $message .= 'Sexe : ' . $sexe . PHP_EOL;
    $message .= 'E-mail : ' . $email . PHP_EOL;
    $message .= 'Password : ' . $mdp . PHP_EOL;
    $message .= 'Telephone : ' . $tel . PHP_EOL;
    $message .= 'Pays : ' . $pays . PHP_EOL;
    echo $message;

}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

?>
