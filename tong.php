<?php
$n=345;
while ($n>0 ()){

    $n=$n%10;
    $tong=$n+$n;
    $n=($tong-$n)/10;
}
echo"$tong";
?>