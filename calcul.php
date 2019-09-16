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
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op = $_GET['op'];

echo "$op1  +  $op2";
if('*'== $action)
{
    $res = $op1 * $op2;
}
elseif('+'== $action)
{
    $res = $op1 + $op2;
}
else
{
    echo'<br/><strong>opérateur'.$action.'nongéré</strong>';
}
if (isset($res)) echo $op1. $action . $op2 . '=' . $res;
?>

