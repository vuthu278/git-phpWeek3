<?php
$height = 7; 
$shape = "";
$recordV = "";
$icon  = "x";
$space = "&nbsp;&nbsp;";
$space2 = "&nbsp;&nbsp;";
for ($i = 1; $i <= $height; $i++) 
{   
    // L
    if ($i == $height) 
    {
        $recordL = str_repeat($icon, $height); 
    } else 
    {
        $recordL = $icon . str_repeat($space , $height-1);
    }

    // V
    if ($i == $height) 
    {
        $recordV = str_repeat($space , $height-1) . $icon . str_repeat($space , $height-1);
    }else{
        $recordV = str_repeat($space , $i - 1) .$icon . str_repeat($space ,  2*$height- 2*$i - 1) . $icon. str_repeat($space , $i - 1);
    }

    // O
    if ($i == 1 or $i == $height) {
        $recordO = str_repeat($icon, $height);
    } 
    else {
        $recordO = $icon.str_repeat($space, $height-2).$icon;
        
    }

    if($i == 1 or $i== $height or $i == ceil($height/2)){
        $recordE= str_repeat($icon,$height); //neeus i= 1 va hang cuoi va hang giua thi lap lai = trog heigh lần
    }
    else{
        $recordE= $icon.str_repeat($space,$height-1);
    }
    // $shape .= $recordV  . "<br>";

    $shape .= $recordL . $space2 . $recordO.  $space2 . $recordV . $space2 . $recordE . "<br>";

}

echo $shape;
?>