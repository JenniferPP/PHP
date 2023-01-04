<?php

$contascorrentes = [
    12345678 => [
        'titular' => 'Yury',
        'saldo' => 10000000000000
    ],
    987654321=> [
        'titular' => 'Marileide',
        'saldo' => 1000
    ],
    13467982=> [
        'titular' => 'Ademir',
        'saldo' => 100
    ]
];

foreach($contascorrentes as $tel =>$conta){
    echo $tel . " " . $conta ['titular'] .PHP_EOL;
};