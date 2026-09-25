<?php
$a = 90;
$b = 50;
$c = 40;

if ($a > $b && $b > $c ) {
    echo "$a" . " "  . "$c"  ;

 } elseif ($b > $a && $c > $a ) {
  echo "$a" . " " . "$b" ;

} else { 
    echo "$b" . " " . "$c" ;
}
?>