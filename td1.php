<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body><hr/><br/><strong>Calculatrice</strong><br/><br><hr/></body>' . PHP_EOL
    ;
};
?>


<?php
start_page('Calculatrice');
?>
<form action="calcul.php" method="post">
    <input type="text" name="op1" /> <br/>
    <input type="text" name="op2" /> <br/>
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
    <input type="radio" name="submit" value=" = "/>/<br/>
    <input type="radio" name="clear" value="clear"/>/<br/>
 </form>


