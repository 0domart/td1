<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body><hr/><br/><strong>Calculatrice</strong><br/><br><hr/></body>' . PHP_EOL
    ;
};
?>

<?php
start_page('CalculatriceResultat');
?>

<?php
$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$op = $_GET['op'];

echo "$op1. $op2";
if('*'== $op)
{
    $res = $op1 * $op2;
}
elseif('+'== $op)
{
    $res = $op1 + $op2;
}
else
{
    echo'<br/><strong>opérateur'.$op.'nongéré</strong>';
}
if (isset($res)) echo $op1. $op . $op2 . '=' . $res;
?>