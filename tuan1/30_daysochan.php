<?php
// $start = 1;
// $end   = 10;
// if($end-$start >2){
//     for($start = $start+1;$start<$end; $start+=2 ){
//         echo "$start ";
//         }
// }
// else{
//     echo"Không có";
// }
$start = 3;
$end   = 10;
$startNew = $start + 1; // 5
if($startNew %2 != 0; $startNew  +=1){
    for($i = $startNew;$i < $end; $i+=2 ){
        $result += $i . " ";
    }
}
$result = "";

if($result == "") $result = "Không có";

?>