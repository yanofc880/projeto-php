<?php

$saque = 457;

if ($saque >= 10 and $saque <= 600) {
     echo "pronto o valor que voce pediu de $saque reais foi entregue\n";
    
     if ($saque >= 600) {
        echo "6 notas de 100\n";
        $saque = $saque - 600;
    } elseif ($saque >= 500) {
        echo "5 notas de 100\n";
        $saque = $saque - 500;
    } elseif ($saque >= 400) {
        echo "4 notas de 100\n";
        $saque = $saque - 400;
    } elseif ($saque >= 300) {
        echo "3 notas de 100\n";
        $saque = $saque - 300;
    } elseif ($saque >= 200) {
        echo "2 notas de 100\n";
        $saque = $saque - 200;
    } elseif ($saque >= 100) {
        echo "1 nota de 100\n";
        $saque = $saque - 100;
    }

    if ($saque >= 50) {
        echo "1 nota de 50\n";
        $saque = $saque - 50;
    }

    if ($saque >= 40) {
        echo "4 notas de 10\n";
        $saque = $saque - 40;
    } elseif ($saque >= 30) {
        echo "3 notas de 10\n";
        $saque = $saque - 30;
    } elseif ($saque >= 20) {
        echo "2 notas de 10\n";
        $saque = $saque - 20;
    } elseif ($saque >= 10) {
        echo "1 nota de 10\n";
        $saque = $saque - 10;
    }

    if ($saque >= 5) {
        echo "1 nota de 5\n";
        $saque = $saque - 5;
    }

    if ($saque >= 1) {
        echo "$saque nota(s) de 1\n";
    }

} else {
    echo "o seu Saque não foi permitido por que o valor minimo é de 10 reais";
}
?>