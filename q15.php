<?php 
$consumo = 150;

if ($consumo <= 100) {
    $kWh = 0.50;
    $valor = $kWh * $consumo;
    echo "o valor de cada kwh gasto é de $kWh, o seu consumo de energia foi de $consumo kwh então o valor da conta de energia foi de $valor";

} elseif ($consumo > 100 and $consumo <= 200) {
    $kWh1 = 0.70;
    $valor1 = $kWh1 * $consumo;
    echo "o valor de cada kwh gasto é de $kWh1, o seu consumo de energia foi de $consumo kwh então o valor da conta de energia foi de $valor1";

} elseif ($consumo > 200 and $consumo <= 300) {
    $kWh2 = 0.90;
    $valor2 = $kWh2 * $consumo;
    echo "o valor de cada kwh gasto é de $kWh2, o seu consumo de energia foi de $consumo kwh então o valor da conta de energia foi de $valor2";

} elseif ($consumo > 300) {
    $kWh4 = 1.10;
    $valor4 = $kWh4 * $consumo;
    echo "o valor de cada kwh gasto é de $kWh4, o seu consumo de energia foi de $consumo kwh então o valor da conta de energia foi de $valor4";
}

































?>