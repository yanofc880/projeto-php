<?php
$percurso = 100;
$velocidade = 10;
$cansado = false;
$chovendo = false;

if ($velocidade >= 10 and $velocidade <= 20 and $cansado = false and $chovendo = false){
    $velocidade = 20; 
    echo "pode correr o percurso, mais para correr com segurança continue a correr na velocidade de 10km a 20km, bom percurso";

} elseif ($cansado = true and $chovendo = false){
    $velocidade = 15; 
    echo "pode correr o percurso, mais voce esta cansado entao para correr com segurança voce so pode correr a 15km, bom percurso";

}  elseif ($cansado = false and $chovendo = true){
    $velocidade = 12; 
    echo "pode correr o percurso, mais ta chocendo entao para correr com segurança voce so pode correr a 12km, bom percurso";

} elseif ($cansado = true and $chovendo = true){
    $velocidade = 12; 
    echo "voce nao pode correr voce esta cansado e ta chocvendo, volte para casa";
}
























?>



