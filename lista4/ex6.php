<?php

$idade = 60;
$deficiencia = true;
$gestante = true;

if($idade >= 60 || $deficiencia == true || $gestante == true){
    echo "Atendimento prioritário";
}
else{
    echo "Atendimento normal";
}
?>