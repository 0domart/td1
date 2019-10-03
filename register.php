<?php
include 'utils.inc.php';
$pseudo = $_POST['login'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$sexe = $_POST['sexe'];
$tel = $_POST['tel'];


// BD
$dbLink = mysqli_connect('mysql-odomart.alwaysdata.net', 'odomart', 'julien69960')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'odomart_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));



$query = "SELECT id FROM user ";

if(!($dbQuery = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
} else if (isset($_POST['action']) && !empty(trim($pseudo)) && !empty(trim($pwd))) {
    while ($fetch = mysqli_fetch_assoc($dbQuery)) {
        if ($fetch['id'] == $pseudo) {
            echo '<p> deja utilisé</p>';
        }

    }
    global $dbLink;
    //$password = password_hash($this->password, PASSWORD_BCRYPT, ['10']);
    $query = "INSERT INTO user (id,mdp, email, sexe, tel) VALUES ('".$pseudo."','".$pwd ."','".$email."','".$sexe."','".$tel."')";
    $result = mysqli_query($dbLink, $query);
    if (!$result) {
        echo 'Impossible d\'exécuter la requête : ' . mysqli_error($dbLink);
        return false;
    } else {
        return true;
    }
}

else {
    header('Location: login.php?step=ERREUR');
}



if ($_SESSION['login'] == 'ok') {

    if ($pseudo == 'admin')
        header('Location: Admin.php');
    else  {
        start_page('Bienvenue');
        echo '<h1> Bienvenue ' . $_SESSION['id'] . '</h1>' . PHP_EOL;
        end_page();
    }
} else {
    header('Location: login.php?step=ERREUR2');
}


