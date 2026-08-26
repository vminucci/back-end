<?php

$usuario = "Victrom";
$idade = 27;

if($idade < 13){
    echo "cadastro nao permitido!";
}
else if($idade >= 13 && $idade < 16){
    echo "só pode usar a plataforma com controle dos pais!";
}else{
    echo "plataforma liberada!!";
}
?>