<?php
$plantaçao = true;
$quantidadedesacos = 100;
$maquinaprincipal = true;
$maquinareserva = false;

if ($plantaçao = true and $quantidadedesacos >= 100 and $maquinaprincipal = true or $maquinareserva = true){
    echo "esta liberado a colheita de milho";

} elseif ($plantaçao = false and $quantidadedesacos >= 100 and $maquinaprincipal = true or $maquinareserva = true){
    echo "ainda nao da para fazer a colheita do milho por que ele ainda nao esta totalmente crescido";

} elseif ($plantaçao = true and $quantidadedesacos < 100 and $maquinaprincipal = true or $maquinareserva = true){
    echo "ainda nao da para fazer a colheita do milho por que nao tem o suficiente para ser recolhido";

} elseif ($plantaçao = true and $quantidadedesacos >= 100 and $maquinaprincipal = false or $maquinareserva = true){
    echo "esta liberado a colheita de milho, mais com a maquina reserva, a principal ta em manutençao";

} elseif ($plantaçao = true and $quantidadedesacos >= 100 and $maquinaprincipal = false or $maquinareserva = false){
    echo "nao da para fazer a colheita do milho por que nao tem maquina para recolher";

} elseif ($plantaçao = false and $quantidadedesacos < 100 and $maquinaprincipal = false or $maquinareserva = false){
    echo "nao da para fazer a colheita do milho por que nao tem maquina para recolher, o milho nao ta pronto, e nao tem milho suficiente";

}





















?>