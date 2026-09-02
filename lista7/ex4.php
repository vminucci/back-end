<?php

function verficaridade($idade){
    if($idade < 16){
        return "não pode votar";
    }elseif($idade < 18){
        return "voto opcional";
    }else{
        return "voto obrigatorio";
    }
}
echo verficaridade(17);
?>