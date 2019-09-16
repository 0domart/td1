<?php
echo date('l F d, Y');
?>

<?php
$jour = date('l F d, Y');
?>
<br>
<?php
echo $jour;
?>
<br>
<?php
$jour = date('d/m/Y', strtotime('2020-04-01'));
?>
<br>
<?php
echo $jour;
?>
