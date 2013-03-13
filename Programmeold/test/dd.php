<?php

$count = count($site); //ermittelt die zahl der ausgewählten elemente

$count--;

$i = 0; // zählvariable $i

while ($i<=$count) {

echo "$site[$i]<br>";

$i++; //$i wird bei jedem durchlauf um 1 erhöht

}
?>

