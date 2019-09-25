<?php
start_page('Data-Processing');
?>

<?php

$action = $_POST['action'];
if ($action == 'mailer') {
    $id = $_POST['id'];
    $sex = $_POST['sexe'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $verfimdp = $_POST['verifmdp'];
    $tel = $_POST['tel'];
    $pays = $_POST['pays'];
    $cgu = $_POST['cgu'];

    echo '<br><p>zadzadazd</p>';
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $mdp;
    echo $message;

}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

?>
