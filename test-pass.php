<?php
include 'utils.inc.php';
?>
<?php start_page("Test-pass"); ?>
<?php

$login = $_POST['Login'];
$mdp = $_POST['mdp'];


$dbLink = mysqli_connect('mysql-odomart.alwaysdata.net', 'odomart', 'julien69960')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink, 'odomart_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>
<?php
$req = $dbLink->query("SELECT * FROM users WHERE identifiant = '" . $login . "' AND password = '" . $mdp. "'");
if ($req->rowCount() == 0){
    $_SESSION['errors'] = 'Identifiant ou mot de passe invalide !';
    } else {
    $_SESSION['success'] = "Vous êtes connecté ! ";
    }
    ?>


<?php end_page(); ?>