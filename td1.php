<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body><hr/><br/><strong>Calculatrice</strong><br/><hr/></body>' . PHP_EOL
    ;
};
?>


<?php
start_page('Calculatrice');
?>
<form>
    <input type="text" name="op1" /> <br/>
    <input type="text" name="op2" /> <br/>
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
 </form>


