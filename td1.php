<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body><hr/><br/><strong>Calculatrice</strong><br/><br><hr/></body>' . PHP_EOL
    ;
};
?>


<?php
start_page("calculatrice");
$operateurs = '*+-/';
echo '
    <form action = "calcul.php" method = "get">
    <input type = "text" name = "op1" ><br>
    <input type = "text" name = "op2" ><br>
    <input type = "submit" name = "op3" ><br>';
for($cpt=0;$cpt<=3;++$cpt)
{
    echo '<input ';
    if($cpt==0)
    {
        echo'checked = "checked"';
    }
    echo'type="checked" name="op" value="'.$operateurs[$cpt].'"/>'.$operateurs[$cpt].'<br/>
        '."\n";}
echo '</form>';
?>