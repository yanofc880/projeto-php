<?php

$a = 30;
$b = 20;
$c = 50;

if ($a < $b && $b < $c ) {
    echo "$c" . " "  . "$b" . " " . "$a"  ;

 } elseif ($a > $b && $c < $b ) {
  echo "$a" . " " . "$b" . " " . "$c";

} elseif ($b > $c && $c > $a) {
    echo "$b" . " " . "$c" . " " . "$a";

} elseif ($a > $b && $a < $c ) {
    echo "$c" . " " . "$a" . " " . "$b";

} else {
    echo "$a" . " " . "$c" . " " . "$b";
}
?>
