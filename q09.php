<?php

$pergunta1 = readline ("você ligou para vitima na noite do ocorrido? (sim/nao)");

$pergunta2 = readline ("você estava no local do crime? (sim/nao)");

$pergunta3 = readline ("você mora perto da vitima? (sim/nao)");

$pergunta4 = readline ("você devia algo para vitima? (sim/nao)");

$pergunta5 = readline ("você ja trabalhou com a vitima? (sim/nao)");

if ($pergunta1 == "sim" and $pergunta2 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta1 == "sim" and $pergunta3 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta1 == "sim" and $pergunta4 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta1 == "sim" and $pergunta5 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta2 == "sim" and $pergunta3 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta2 == "sim" and $pergunta4 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta2 == "sim" and $pergunta5 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta3 == "sim" and $pergunta4 == "sim")
    echo "voce é suspeito(a)";

if ($pergunta3 == "sim" and $pergunta5 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta4 == "sim" and $pergunta5 == "sim")
    echo "voce é suspeito(a)";

elseif ($pergunta1 == "sim" and $pergunta2 == "sim" and $pergunta3 == "sim")
    echo "voce é cumplicie, voce esta preso";


elseif ($pergunta1 == "sim" and $pergunta4 == "sim" and $pergunta5 == "sim")
    echo "voce é cumplicie, voce esta preso";

elseif ($pergunta2 == "sim" and $pergunta4 == "sim" and $pergunta5 == "sim")
    echo "voce é cumplicie, voce esta preso";


elseif ($pergunta3 == "sim" and $pergunta4 == "sim" and $pergunta5 == "sim")
    echo "voce é cumplicie, voce esta preso";


elseif ($pergunta1 == "sim" and $pergunta2 == "sim" and $pergunta3 == "sim" and $pergunta4 = "sim")
    echo "voce é cumplicie, voce esta preso";


elseif ($pergunta1 == "sim" and $pergunta2 == "sim" and $pergunta3 == "sim" and $pergunta5 = "sim")
    echo "voce é cumplicie, voce esta preso";
?>