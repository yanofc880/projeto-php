<?php
$preçoproduto = 100;
$metododepag = "cartao";
$parcelas = 3;

if ($metododepag == "avista" and $parcelas == 0) {
    $descontoa = 10;
    $formuladesa = ($preçoproduto * $descontoa) / 100;
    $preçofa = $preçoproduto - $formuladesa;
    echo "O preço do seu produto é $preçofa";

} elseif ($metododepag == "cartao") {
    $descontoc = 5;
    $formuladesc = ($preçoproduto * $descontoc) / 100;
    $preçofc = $preçoproduto - $formuladesc;
    echo "O preço do seu produto é $preçofc";

} elseif ($metododepag == "cartao" and $parcelas <= 3) {
    echo "O preço do seu produto é $preçoproduto";

}elseif ($metododepag == "cartao" and $parcelas <= 6) {
    $descontocp2 = 10;
    $formuladescp2 = ($preçoproduto * $descontocp2) / 100;
    $preçofcp2 = $preçoproduto + $formuladescp2;
    echo "O preço do seu produto é $preçofcp2";
}






























?>