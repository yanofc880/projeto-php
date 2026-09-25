<?php

$diarenata = "terça";
$diaisrael = "quinta";

if ($diarenata == "segunda") {
    echo "Renata voce nao pode reserva esse horário , pois voce tem reuniao de pedagogia";

} elseif ($diarenata == "terça") {
    echo "certo renata, a sua aula de Estruturas de Foguetes foi reservada na terça";

} elseif ($diarenata == "terça" and $diaisrael == "terça") {
    echo "renata voce nao pode reserva esse horário , pois Israel ja reservou";

} elseif ($diarenata == "quarta") {
    echo "certo renata, a sua aula de Estruturas de Foguetes foi reservada na quarta";

} elseif ($diarenata == "quarta" and $diaisrael == "quarta") {
    echo "renata voce nao pode reserva esse horário , pois Israel ja reservou";

} elseif ($diarenata == "quinta") {
    echo "certo renata, a sua aula de Estruturas de Foguetes foi reservada na quinta";

} elseif ($diarenata == "quinta" and $diaisrael == "quinta") {
    echo "renata voce nao pode reserva esse horário , pois Israel ja reservou";

} elseif ($diarenata == "sexta") {
    echo "certo renata, a sua aula de Estruturas de Foguetes foi reservada na sexta";

}elseif ($diaisrael == "segunda") {
    echo "certo israel, a sua aula de Estruturas de Foguetes foi reservada na segunda";

} elseif ($diaisrael == "terça") {
    echo "certo israel, a sua aula de Estruturas de Foguetes foi reservada na terça";

} elseif ($diarenata == "terça" and $diaisrael == "terça") {
    echo "israel voce nao pode reserva esse horário , pois a renata ja reservou";

} elseif ($diaisrael == "quarta") {
    echo "certo israel, a sua aula de Estruturas de Foguetes foi reservada na quarta";

} elseif ($diarenata == "quarta" and $diaisrael == "quarta") {
    echo "renata voce nao pode reserva esse horário , pois Israel ja reservou";

} elseif ($diaisrael == "quinta") {
    echo "certo israel, a sua aula de Estruturas de Foguetes foi reservada na quinta";

} elseif ($diarenata == "quinta" and $diaisrael == "quinta") {
    echo "renata voce nao pode reserva esse horário , pois Israel ja reservou";

} elseif ($diarenata == "sexta") {
    echo "certo renata, a sua aula de Estruturas de Foguetes foi reservada na sexta";

} elseif ($diaisrael == "sexta") {
    echo "israel voce nao pode reserva esse horário , pois voce tem nesse dia voce faz a manutençao do laboratorio";
}
?>