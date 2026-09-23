<?php

$peixe = $_POST['peixe'];
$multa;

if($peixe > 50){
    $multa = ($peixe - 50) * 4;
    echo "Sua multa será: $multa R$";
}else{
    echo "Não tera multa";
}
?>