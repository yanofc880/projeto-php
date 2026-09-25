<?php
$atributointeligencia = 4;
$atributoforça = 4;
$atributoagilidade = 4;

if ($atributointeligencia > $atributoforça and $atributointeligencia > $atributoagilidade) {
    echo "O atributo mais alto é inteligência entao você é um mago";

    } elseif ($atributoforça > $atributointeligencia and $atributoforça > $atributoagilidade) {
    echo "O atributo mais alto é força entao você é um guerreiro";

    } elseif ($atributoagilidade > $atributointeligencia and $atributoagilidade > $atributoforça) {
    echo "O atributo mais alto é agilidade entao você é um arqueiro";

    } elseif ($atributointeligencia == $atributoforça and $atributointeligencia > $atributoagilidade) {
    echo "Os atributos de inteligência e força são iguais e mais altos que a agilidade, enatao voce é um hibrido de mago e guerreiro";

    } elseif ($atributointeligencia == $atributoagilidade and $atributointeligencia > $atributoforça) {
    echo "Os atributos de inteligência e agilidade são iguais e mais altos que a força entao voce é um hibrido de mago e arqueiro";

    } elseif ($atributoforça == $atributoagilidade and $atributoforça > $atributointeligencia) {
    echo "Os atributos de força e agilidade são iguais e mais altos que a inteligência entao voce é um hibrido de guerreiro e arqueiro";

    } elseif ($atributointeligencia == $atributoforça and $atributointeligencia == $atributoagilidade) {
    echo "Todos os atributos são iguais entao voce é um hibrido de mago, guerreiro e arqueiro";
    }
















?>