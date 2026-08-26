<?php

$n1 = 10;
$n2 = 5;
$operacao = "+";

if($operacao == "+"){
    echo "soma é: ", $n1 + $n2;
}

elseif($operacao == "-"){
    echo "subtração é: ", $n1 - $n2;
}
elseif($operacao == "*"){
    echo "subtração é: ", $n1 * $n2;
}
elseif($operacao == "/"){
    echo "subtração é: ", $n1 / $n2;
}
else{
    echo "operação invalida";
}
?>