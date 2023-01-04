<?php

$peso = 70;
$altura = 1.52;
$imc = round($peso/($altura**2),1);

if ($imc <18.5){
    echo "Seu IMC é: $imc. Classificação: Magreza" . PHP_EOL;
}
else if ($imc >=18.5 && $imc <=24.9){
    echo "Seu IMC é: $imc. Classificação: Normal" . PHP_EOL;
}
else if ($imc >=25 && $imc <=29.9){
    echo "Seu IMC é: $imc. Classificação: Sobrepeso" . PHP_EOL;
}
else if ($imc >=30 && $imc <=34.9){
    echo "Seu IMC é: $imc. Classificação: Obesidade Grau 1" . PHP_EOL;
}
else if ($imc >=35 && $imc <=39.9){
    echo "Seu IMC é: $imc. Classificação: Obesidade Grau 2" . PHP_EOL;
}
else {
    echo "Seu IMC é: $imc. Classificação: Obesidade Grau 3" . PHP_EOL;
}