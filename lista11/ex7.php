<?php

$email = $_POST['email'];
$senha = $_POST['senha'];


if($email == "victor.minucci7@gmail.com"
    && $senha == "20091007vm"){
    echo "Login bem sucedido!!!";
}else{
    echo "Login ou senha invalido!!!";
}
?>