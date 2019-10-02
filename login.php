<?php
include 'utils.inc.php';
?>

<?php start_page("Login"); ?>

<form action="test-pass.php" method="post">
    <input type="text" name="Login" placeholder="Login"><br>
    <input type="password" name="mdp" placeholder="Password"><br>
    <input name="action" type="submit" >
</form>



<?php end_page(); ?>