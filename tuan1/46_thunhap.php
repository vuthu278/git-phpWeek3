<?php
$totalLine = 50;
$timeDoing = 4;
$salaryTime=$timeDoing*20;
$salary=0;
if($totalLine<10){
    $cost=1;
    $salary=$salaryTime-$cost;
}

if($totalLine<20){
    $cost=2;
    $salary=$salaryTime-$cost;
}  
else {

    $cost=5;
    $salary=$salaryTime-$cost;
}

echo "Salary: " . " " . $salary;
?>