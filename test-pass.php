<?php
include 'utils.inc.php';
$pseudo = $_POST['login'];
$pwd = $_POST['pwd'];

// BD
$dbLink = mysqli_connect('mysql-odomart.alwaysdata.net', 'odomart', 'julien69960')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'odomart_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));






$query = "SELECT * FROM user where pseudo = '$pseudo ' LIMIT 1 ";

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
        if (pawword_verify($pwd, $fetch['mdp'])) {
            session_start();
            $_SESSION['login'] = 'ok';
            $_SESSION['id'] = $pseudo;
            $_SESSION['mdp'] = $pwd;
        }
    }
}

else {
    header('Location: login.php?step=ERREUR1');
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


<?php
