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

    $message = 'Identifiant: ' . $id . PHP_EOL;
    $message .= 'Sexe : ' . $sexe . PHP_EOL;
    $message .= 'E-mail : ' . $email . PHP_EOL;
    $message .= 'Password : ' . $mdp . PHP_EOL;
    $message .= 'Telephone : ' . $tel . PHP_EOL;
    $message .= 'Pays : ' . $pays . PHP_EOL;
    echo $message;
}
else if ($action = 'rec') {

    $id = $_POST['id'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $verfimdp = $_POST['verifmdp'];
    $tel = $_POST['tel'];
    $pays = $_POST['pays'];
    $cgu = $_POST['cgu'];

    $file='data.txt';
    if(!($file=fopen($file,'a+')))
    {
        echo'Erreurd\'ouverture';exit();
    }
    fputs($file,'id:'. $id);
    fclose($file);
}
else echo 'Probleme';

/*

if (mail('ght2bb@gmail.com', 'cc', $message))
    echo 'Mail envoyé !';
else echo 'Mail non envoyé :(';

?>


<?php
$today = date('Y-m-d');
$query = 'INSERT INTO user (login, sexe, email, password, phone, pays, date)';
$query .= ' VALUES (\'' . $id . '\',  \'' . $sexe . '\', \'' . $email . '\', \'' . $mdp . '\', ' . $tel . ', \'' . $pays . '\', $today);'
?>

<?php
if(!($dbResult = mysqli_query($dbLink, $query)))
{    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $verfimdp = $_POST['verifmdp'];
    $tel = $_POST['tel'];
    $pays = $_POST['pays'];
    $cgu = $_POST['cgu'];

echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
echo 'Requête : ' . $query . '<br/>';
exit();
}
else {

    echo 'Votre inscription ('. $id . ') a été enregistré ';
}
?>


<a href="http://odomart.alwaysdata.net/tdphp/Formulaire.php"><button>Retour</button></a>

*/