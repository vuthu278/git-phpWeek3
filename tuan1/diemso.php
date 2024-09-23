<?php
$scoreOne   = 6;
$scoreTwo   = 9;
$scoreThree = 5;
$resulmax=max($scoreOne, $scoreTwo, $scoreThree);
$resulmAvg= ($scoreOne+$scoreTwo+$scoreThree)/3;


echo "max" . ": " . $resulmax . '<br>';

echo "Avg:" . " ". round($resulmAvg,2) . '<br>';
echo "Avg:" ." ". number_format($resulmAvg,1);
?>