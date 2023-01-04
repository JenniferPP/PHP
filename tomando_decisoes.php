<?php

$idade = 15;
$nome = "Jennifer";
$numdepessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos. \n";

if ($idade >= 18) {
    echo "Você tem $idade anos.\nPode entrar!";
}
else if ($idade >= 16 && $numdepessoas >= 2 ){
    echo "Você tem $idade e está acompanhado(a). Pode entrar!";
}
else
    {echo "Você não tem dezoito anos ainda e está desacompanhado(a)";
}

// IF e ELSE em uma só linha
$idade2 = 21;
$mensagem = $idade2 < 18 ? 'Você é menor de idade' : 'Você é maior de idade';

echo $mensagem;