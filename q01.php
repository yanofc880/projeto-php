<?php

$a = 6;
$b = 3;
$c = 30;

if ($a < $b && $b < $c ) {
    echo "$a" . " "  . "$b" . " " . "$c"  ;

 } elseif ($a > $b && $a < $c ) {
  echo "$b" . " " . "$a" . " " . "$c";

} elseif ($a > $c && $a > $b) {
    echo "$c" . " " . "$b" . " " . "$a";

} else {
    echo "$a" . " " . "$c" . " " . "$b";
}
?>
