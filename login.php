<?php
include 'utils.inc.php';
?>

<?php start_page("Login"); ?>

<form action="test-pass.php" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <input name="action" type="submit" >
</form>



<?php end_page(); ?>