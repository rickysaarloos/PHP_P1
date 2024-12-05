

<?php 
echo "De datum is " . date("Y-m-d H:i:s");  
?>

<?php
date_default_timezone_set('Europe/Amsterdam');  

$today = date("j F Y");
echo "Vandaag is het: $today"; 

echo "<br>";

$time = date("H:i");
echo "Het is nu $time uur";

echo "<br>";

$month = date("F");
$daysInMonth = date("t");
echo "Deze maand, $month, heeft $daysInMonth dagen";  

echo "<br>";

$week = date("W");
echo "Deze week is het week: $week"; 
?>




