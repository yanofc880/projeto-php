<?php

$ladod = 8 ;
$ladoe = 9 ;
$base = 10 ;
$ope1 = $ladod + $ladoe ;
$ope2 = $ladod + $base ;
$ope3 = $ladoe + $base ;

if ($ope1 > $base and $ope2 > $ladoe and $ope3 > $ladod) {
    Echo "a sua figura e um triangulo completo ";
    
} else {
    Echo " . " . "a sua figura e um triangulo imcompleto";
}

if ($ladod = $ladoe = $base) {
    Echo "o seu triangulo e um triangulo equilatero";
    
} elseif ($ladod == $ladoe and $ladod < $base or $ladod > $base) {
    Echo " . " . "entao o seu triangulo e um triangulo isoceles"; 

} else {
    echo " . " . "o seu triangulo é um triangulo escaleno";
}

?>