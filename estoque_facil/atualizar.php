<?php
include "config/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];

$sql = "UPDATE produtos SET nome = '$nome',
qtd = '$qtd'
preco = '$preco',
categoria = '$categoria',
WHERE id = $id";