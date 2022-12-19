<?php

$idade = 17;
$nome = "Jennifer";

echo "Você só pode entrar se tiver mais do que 18 anos. \n";

if ($idade >= 18 and $nome == "Jennifer") {
    echo "Você tem $idade anos.\nPode entrar!";
} else {
    echo "Você não tem dezoito anos ainda";
}