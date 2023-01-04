<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

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

if (500 > $contascorrentes['13467982']['saldo']){
    exibeMensagem(mensagem: "Você não pode sacar");
} else {
    $contascorrentes['13467982']['saldo'] -= 500;
}


foreach($contascorrentes as $tel =>$conta){
    exibeMensagem(mensagem:$tel . " " . $conta ['titular'] . ' ' . $conta['saldo']);
};

