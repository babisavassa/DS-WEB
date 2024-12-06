<?php
include_once('connection.php'); // Verifique se o arquivo connection.php existe e está correto

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];

// Proteção contra injeção SQL
$nome = mysqli_real_escape_string($conexao, $nome);
$valor = mysqli_real_escape_string($conexao, $valor);
$estoque = mysqli_real_escape_string($conexao, $estoque);

// Query SQL para inserir dados
$sql = "INSERT INTO produto (nome, valor, estoque) VALUES ('$nome', '$valor', '$estoque')";

if (mysqli_query($conexao, $sql)) {
    header('Location: index.php'); // Redireciona para index.php
    exit();
} else {
    echo "Erro identificado: " . mysqli_error($conexao); // Mostra o erro do banco
}
?>