<?php
include 'utils.inc.php';
?>

<?php start_page("Login"); ?>

<form action="register.php" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <input type="text" name="sexe" placeholder="sxe"><br>
    <input type="password" name="email" placeholder="mlail"><br>
    <input type="text" name="tel" placeholder="tel"><br>
    <input name="action" type="submit" >
</form>

<?php end_page(); ?>