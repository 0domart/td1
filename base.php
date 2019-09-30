<?php
$dbLink = mysqli_connect('mysql-odomart.alwaysdata.net', 'odomart_tp2', 'julien69960')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , odomart_td2)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);

$query = 'SELECT id, email, date FROM user';

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['id'] . '<br/>';
    echo $dbRow['mail'] . '<br/>';
    echo '<br/><br/>';
}
?>
<a href="Formulaire.php"><button>Revenir</button></a>
