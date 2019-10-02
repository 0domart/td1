<?php
include 'utils.inc.php';
$login = $_POST['login'];
$pwd = $_POST['pwd'];
// BD
$dbLink = mysqli_connect('mysql-odomart.alwaysdata.net', 'odomart', 'julien69960')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'odomart_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));


$query = 'SELECT id, email, date FROM user';

if(!($dbQuery = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
} else if (isset($_POST['action']) && !empty(trim($login)) && !empty(trim($pwd))) {
    while ($fetch = mysqli_fetch_assoc($dbQuery)) {
        if ($fetch['password'] == $pwd) {
            session_start();
            $_SESSION['login'] = 'ok';
            $_SESSION['id'] = $login;
            $_SESSION['pwd'] = $pwd;
            if (!($update_query = mysqli_query($dbLink,'UPDATE USER SET NBCONNECTIONS = NBCONNECTIONS + 1 WHERE ID = '.$login)));
        }
    }
} else {
    header('Location: login.php?step=ERREUR');
}
if ($_SESSION['login'] == 'ok') {
    if ($login == 'admin')
        header('Location: admin.php');
    else  {
        start_page('Bienvenue');
        echo '<h1> Bienvenue ' . $_SESSION['id'] . '</h1>' . PHP_EOL;
        end_page();
    }
} else {
    header('Location: login.php?step=ERREUR');
}