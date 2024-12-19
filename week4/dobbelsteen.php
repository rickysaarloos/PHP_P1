<?php
$dobbelsteen = rand(1, 6);
if ($dobbelsteen == 6 ) { 
$resultaat = "je hebt 6 gegooid!, dat betekent dat je een speciale prijs hebt gewonnen";
} else if ($dobbelsteen >= 4) { 
    $resultaat = "Je hebt $dobbelsteen gegooid. je hebt gewonnen";
} else { $resultaat = "Je hebt $dobbelsteen gegooid je hebt verloren";
}
echo "<p>Je hebt een $dobbelsteen gegooid.</p>";
echo "<p>$resultaat</p>";
?>