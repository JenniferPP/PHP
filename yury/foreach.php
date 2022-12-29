<?php

$contas1 = [
    'titular' => 'Jennifer',
    'saldo' => 1000000
];


$contas2 = [
    'titular' => 'Yury',
    'saldo' => 2,5
];

//echo $contas1['titular'];
$contasCorrentes = [
    12345678910 => $contas1,
    12345678911 => $contas2
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf ." " . $conta['titular'] . PHP_EOL;
}