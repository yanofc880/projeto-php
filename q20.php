<?php
$horasdjornada = 60;
$periododtrabalho = 4;
$horastrabalhadas = 65;

if ($horastrabalhadas > 60){
    $calculodehorasextras =  $horastrabalhadas - $periododtrabalho;
    $valohorasex = 1.30;
    $calculodedescanso = $calculodehorasextras * $valohorasex;
    $calculodehoras = $horasdjornada - $calculodedescanso;
echo "parabens nessa sua jornada de 4 dias voce fez $calculodehorasextras horas extras, cada hora extra voce recebe $valohorasex de horas de descanço, voce recebeu nos proximos 4 dias, $calculodedescanso de horas de denscanso, entao voce nos proximos 4 dias vai trabalhar so $calculodehoras";

} elseif ($horastrabalhadas = 60) {
    echo "nesses 4 dias voce nao teve horas extras entao voce nao vai ter horario para descanso";
}
?>