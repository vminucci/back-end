<?php

function calculardesconto($preco, $desconto){
    $valordesconto = $preco * $desconto / 100;
    return $preco - $valordesconto;
}

echo "preço final: R$ ", calculardesconto(100, 10);
?>