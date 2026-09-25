<?php 

echo "+---+---+---+";
echo "| 1 | 2 | 3 |";
echo "+---+---+---+";
echo "| 3 | 1 | 2 |";
echo "+---+---+---+";
echo "| 2 | 3 | 1 |";
echo "+---+---+---+";

$numero = 1;
$coluna = 3;
$numeroescolhido = 2;
$colunaescolhida = 3;

if ($numero == $numeroescolhido && $coluna == $colunaescolhida) {
    echo "Você acertou!";

} else {
    echo "Você errou!";
}


?>