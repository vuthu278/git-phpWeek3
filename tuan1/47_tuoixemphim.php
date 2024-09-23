<?php
// $yourAge = 1;
// if( $yourAge <=15){

//     echo "Bạn KHÔNG được xem phim Thế giới lập trình" . "<br>";
// }
// else{
//     echo "Bạn được xem phim Thế giới lập trình";
// }
<?php
$yourAge = 21;
$filmName = "Thế giới lập trình";
$result = "Bạn KHÔNG được xem phim ";

if ($yourAge >= 15 ) {
    $result = "Bạn được xem phim ";
} 

echo $result  . $filmName;
?>