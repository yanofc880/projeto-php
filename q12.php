<?php 
$peso = 70;
$altura = 1.75;
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Seu IMC é $imc, você está abaixo do peso";

    } elseif ($imc >= 18.5 and $imc < 25) {
    echo "Seu IMC é $imc, você está com peso normal";

    } elseif ($imc >= 25 and $imc < 30) {
    echo "Seu IMC é $imc, você está acima do peso";

    } elseif ($imc >= 30 and $imc <= 40){
    echo "Seu IMC é $imc, você está com obesidade";

    } elseif ($imc > 40){
    echo "Seu IMC é $imc, você está com obesidade grave";
}
?>