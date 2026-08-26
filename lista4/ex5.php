<?php

echo " bem vindo a victor bet<br>";
echo "acerte o numero de 0 a 2o e ganhe o triplo <br>";

$aposta = 10;
$numero_escolhido = 5;

if($numero_escolhido == $numero_escolhido+1){
    echo "voce ganhou", $aposta*3;
}
else{
    echo "quase la... seu numero: $numero_escolhido <br>";
    echo "numero sorteado: ", $numero_escolhido + 1;
}
?>