<?php
include 'utils.inc.php';
?>

<?php start_page("Formulaire"); ?>

    <form action="data-processing.php" method="post">
        <input type = "text" name = "Id" placeholder="Identifiant"><br>
        <input type = "radio" id="male" name="sexe" value="homme" ><br>
        <label for="male">Homme</label>
        <input type = "radio" id="femme" name="sexe" value="femme" ><br>
        <label for="femme">Femme</label>
        <input type="text" name="email" placeholder="email"><br>
        <input type="password" name="mdp" placeholder="Mot de Passe">
        <input type="password" name="verifmdp" placeholder="Verification MDP">
        <input type="text" name="tel" placeholder="Telephone Portable">
        <select id="pays" name="pays">
            <option value="">Selectionner un pays</option>
            <option value="france">France</option>
            <option value="espagne">Espagne</option>
            <option value="Julien Dupont">Julien Dupont</option>
        </select>
        <input type="checkbox" id="cgu" name="cgu" placeholder="Accepter les CGU">
        <input name="action" type="submit" value="mailer">
    </form>

<?php
    $rub1 = 'Lire la BD';
    $rub1addr = 'base.php';
?>
    <a href="<?= $rub1addr; ?>"><button><?= $rub1; ?></button></a>

<?php end_page(); ?>