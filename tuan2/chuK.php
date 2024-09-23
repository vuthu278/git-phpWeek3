<?php
$shapeK = "";
$height = 6;
$recordK="";

for ($i = $height; $i <= $height and $i >0; $i-=2) {
   
    $recordK='='. str_repeat(' &nbsp ', $i) .'=';
    $shapeK .= $recordK. '<br>';
    
}

for ($i = $i=0; $i <= $height; $i+=2) {
        $recordK='='. str_repeat(' &nbsp ', $i) .'=';
        $shapeK .= $recordK. '<br>';
}


for($i=1;$i<=$height;$i++){
    if($i == 1 or $i == ceil($height/2)){
        $recordF= str_repeat("=",$height);
    }
    else{
        $recordF= "=".str_repeat(" ",$height-1);
    }
    $shapeF.=$recordF."<br/>"; 
}

$shapeKFC .= $shapeK . $shapeF;

echo $shapeKFC;
?>
