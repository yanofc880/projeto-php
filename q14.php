<?php
$valorh = 20;
$horastns = 360;
$salariosemanal = $valorh * $horastns;

if ($horastns <= 40) {
echo "O valor do seu salário semanal é $salariosemanal";

} elseif ($horastns > 40 and $horastns <= 60) {
    $valoradicional = 50;
    $formuladvalor = ($salariosemanal * $valoradicional) / 100;
    $salariof = $salariosemanal + $formuladvalor;
    echo "O valor do seu salário semanal é $salariof";

}  elseif ($horastns > 60) {
    $valoradicional1 = 100;
    $formuladvalor1 = ($salariosemanal * $valoradicional1) / 100;
    $salariof1 = $salariosemanal + $formuladvalor1;
    echo "O valor do seu salário semanal é $salariof1";
}





































?>