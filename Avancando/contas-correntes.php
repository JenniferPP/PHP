<?php

$contal = [
    'titular' => 'Yury',
    'saldo' => 10000000000000
];

$contal2 = [
    'titular' => 'Marileide',
    'saldo' => 1000
];

$contal3 = [
    'titular' => 'Ademir',
    'saldo' => 100
];

$contascorrentes = [$contal, $contal2, $contal3];

for ($i=0; $i <count($contascorrentes); $i++){
    echo $contascorrentes[$i]['titular'] . PHP_EOL;
};

echo count($contascorrentes);