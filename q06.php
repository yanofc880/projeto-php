<?php

$notab = 5;
$notap = 9;
$mediaf = ($notab + $notap) / 2;

if ($mediaf >= 9 and $mediaf < 11) {
    Echo "parabens voce foi aprovado com a a media de $mediaf";
    
} elseif ($mediaf >= 7.5  and $mediaf < 10) {
    Echo "parabens voce foi aprovado com a a media de $mediaf";
    
} elseif ($mediaf >= 6 and $mediaf < 7.6) {
    Echo "parabens voce foi aprovado com a a media de $mediaf";
    
} elseif ($mediaf >= 4 and $mediaf < 7) {
    Echo "voce foi reprovado por conta da sua media que foi $mediaf";

} elseif ($mediaf >= 0 and $mediaf < 5) {
    Echo "voce foi reprovado por conta da sua media que foi $mediaf";
}

?>