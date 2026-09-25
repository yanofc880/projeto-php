<?php

$salario = 1500;

if ($salario <= 280) {
    $porcentagem = 20;  

    } elseif ($salario > 280 and $salario < 700) {
    $porcentagem = 15;  

    } elseif ($salario > 700 and $salario < 1500) {
    $porcentagem = 10;  

    } elseif ($salario >= 1500) {
    $porcentagem = 5;  
}

$valorAumento = $salario * ($porcentagem / 100);

$novoSalario = $salario + $valorAumento;

echo "Parabéns, o seu salário vai ser reajustado! Você recebia " . $salario . " e agora vai receber " . $novoSalario;
?>