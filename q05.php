<?php

$hora = 5;
$horast = 270;
$bruto = $hora * $horast;
$sindicado = 3;
$fgts = 11;

if ($bruto < 901) {
    $ir = 1;

} elseif ($bruto < 1501) {
    $ir = 5;

} elseif ($bruto < 2501) {
    $ir = 10;

} elseif ($bruto > 2500) {
    $ir = 20;
}

$fgts = 11;
$contaf = ($bruto * $fgts/100) ;
$ir2 = ($bruto * $ir/100);
$bruto2 = $bruto - $ir2 - $contaf ;
$sindicato = 3;
$valors = ($bruto2 * $sindicato/100);
$salario = $bruto2 - $valors;

if ($bruto2 < 901) {
   $ir3 = 1;
    echo "o sua renda bruta foi de $bruto, voce ficou insento do imposto de renda por conta da sua renda bruta, descontamos $sindicato% sindicado, e descontamos $fgts% do fgts, então o seu salario do mes foi de $salario";

} elseif ($bruto2 < 1501) {
    $ir3 = 5;
    echo "o sua renda bruta foi de $bruto, descontamos $ir3 do imposto de renda, descontamos $sindicato sindicado, e descontamos $fgts% do fgt, então o seu salario do mes foi de $salario";

} elseif ($bruto2 < 2501) {
    $ir3 = 10;
    echo "o sua renda bruta foi de $bruto, descontamos $ir3 do imposto de renda, descontamos $sindicato sindicado, e descontamos $fgts% do fgt, então o seu salario do mes foi de $salario";

} elseif ($bruto2 > 2500) {
   $ir3 = 20;
    echo "o sua renda bruta foi de $bruto, descontamos $ir3 do imposto de renda, descontamos $sindicato sindicado, e descontamos $fgts% do fgt, então o seu salario do mes foi de $salario";

}
?>