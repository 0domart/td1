<?php
include 'utils.inc.php';
?>

<?php start_page("Recup mdp"); ?>


<h4 class="title-element">Récupération de mot de passe</h4>

<?php { ?>
    <form method="post" action="password.php">
        <input type="email" placeholder="Votre adresse mail" name="recup_mail"/><br/>
        <input type="submit" value="Valider" name="recup_submit"/>
    </form>
<?php } ?>
<?php if(isset($error)) { echo '<span style="color:red">'.$error.'</span>'; } else { echo ""; } ?>

