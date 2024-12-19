<?php
date_default_timezone_set("Europe/Amsterdam");
$uur = date("6");
if ($uur >= 6 && $uur < 12){
$dagdeel = "ochtend";
} 
elseif ($uur >= 12 && $uur < 18){
    $dagdeel = "middag";
}
 elseif ($uur >= 18 && $uur < 24){
    $dagdeel = "avond";
} 
else { 
    $dagdeel = "nacht";
}
echo "Het is <strong>$dagdeel</strong>.</p>";

?>