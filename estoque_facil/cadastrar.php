<?php

include_once("config/conexao.php");

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$qtd = $_POST['quantidade'];

$nomeimagem = null;

// Verifica se uma imagem foi enviada
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {

    // Extensões permitidas
    $extensaopermitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'tiff', 'svg'];

    // Obtém a extensão
    $extensao = strtolower(pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION));

    // Verifica a extensão
    if (!in_array($extensao, $extensaopermitidas)) {
        die("Extensão de arquivo não permitida!");
    }

    // Verifica o tamanho (máximo 2MB)
    if ($_FILES['imagem']['size'] > 2 * 1024 * 1024) {
        die("Arquivo muito grande! O tamanho máximo permitido é de 2MB.");
    }

    // Gera um nome único
    $nomeimagem = uniqid("produto_") . "." . $extensao;

    // Define a pasta de destino
    $pasta = "uploads/";

    // Verifica se a pasta existe
    if (!is_dir($pasta)) {
        mkdir($pasta, 0777, true);
    }

    // Move a imagem
    $destino = $pasta . $nomeimagem;

    if (!move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
        die("Erro ao enviar a imagem!");
    }

}

// Insere os dados no banco
$sql = "INSERT INTO tb_produtos
(nome_produto, quantidade, preco, categoria, imagem)
VALUES (?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);

if ($stmt->execute([
    $nome,
    $qtd,
    $preco,
    $categoria,
    $nomeimagem
])) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto!";
}

$stmt->close();

?>