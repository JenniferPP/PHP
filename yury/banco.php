<?php

function sacar($conta, $valorSacar) {
    
    if ($valorSacar > $conta['saldo']){
        exibeMensagem(mensagem: "Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;

}

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


$contascorrentes['13467982'] = sacar($contascorrentes['13467982'], valorSacar: 500);

foreach($contascorrentes as $tel =>$conta){
    exibeMensagem(mensagem:$tel . " " . $conta ['titular'] . ' ' . $conta['saldo']);
};

