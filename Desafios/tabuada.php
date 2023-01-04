<?php


// Fazendo a tabuada do 10 com o FOR
for ($i=1;$i<=10;$i++){
    echo $i * 10 . PHP_EOL;
}
echo "----------------" . PHP_EOL;

// Fazendo a tabuada do 5 com o WHILE
$contador = 1;
$multiplicador = 5;
$resultado;

while ($contador <=10){
    $resultado = $contador * $multiplicador;
    echo $resultado . PHP_EOL;
    $contador++;
}

