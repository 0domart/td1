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
$op = $_POST['op'];
?>

<?php echo $op1 + $op2 ; ?>
