<?php

$scoreOne   = 6;
$scoreTwo   = 9;
$scoreThree = 5;

$resultAvg = ($scoreOne + $scoreTwo + $scoreThree)/3;
$resultMax = max($scoreOne, $scoreTwo, $scoreThree);

echo "Avg: " . number_format($resultAvg, 1) . "<br>";
echo "Max: ". $resultMax;
?>