<?php 
echo "ola bem vindo ao hiper mercado querotudoqueeseu, e tamos com varias promoçoes de carne
Filé Duplo: Até 5Kg (R$ 4,90/Kg) | Acima (R$ 5,80/Kg)
Alcatra: Até 5Kg (R$ 5,90/Kg) | Acima (R$ 6,80/Kg)
Picanha: Até 5Kg (R$ 6,90/Kg) | Acima (R$ 7,80/Kg)
voce pode pagar no dinheiro, no pix e no cartão (no cartão tem 5% de desconto aproveite)\n";

$carne = "fileduplo";
$kg = 5;
$formap = "pix";

if ($carne = "fileduplo" and $kg >=1 and $kg <=5 and $formap = "cartao"){
    $vkgfc = 4.90;
    $valorsfc = $vkgfc * $kg;
    $desconto = 5;
    $valorffc = ($valorsfc * $desconto)/2;
echo "o valor do kg ta saindo por $vkgfc, o valor da compra foi de $valorffc";
    }

elseif ($carne = "fileduplo" and $kg > 5){
    $vkgf = 4.90;
    $valorff = $vkgf * $kg;
echo "o valor do kg ta saindo por $vkgf, o valor da compra foi de $valorff";
    }

elseif ($carne = "alcatra" and $kg >=1 and $kg <=5 and $formap = "cartao"){
    $vkgac = 5.90;
    $valorsac = $vkgac * $kg;
    $desconto = 5;
    $valorfac = ($valorsac * $desconto)/2;
echo "o valor do kg ta saindo por $vkgac, o valor da compra foi de $valorfac";
    }

elseif ($carne = "alcatra" and $kg > 5){
    $vkga = 6.80;
    $valorfa = $vkga * $kg;
echo "o valor do kg ta saindo por $vkga, o valor da compra foi de $valorfa";
    }

elseif ($carne = "picanha" and $kg >=1 and $kg <=5 and $formap = "cartao"){
    $vkgpc = 6.90;
    $valorspc = $vkgpc * $kg;
    $desconto = 5;
    $valorfpc = ($valorspc * $desconto)/2;
echo "o valor do kg ta saindo por $vkgpc, o valor da compra foi de $valorfpc";
    }

elseif ($carne = "picanha" and $kg > 5){
    $vkgp = 7.80;
    $valorfp = $vkgp * $kg;
echo "o valor do kg ta saindo por $vkgp, o valor da compra foi de $valorfp";
    }












?>