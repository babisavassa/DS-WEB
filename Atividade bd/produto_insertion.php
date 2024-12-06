<?php
include_once('connection.php');

$nome1 = $_POST['nome1'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO produto (nome1, valor, estoque) VALUES ('$nome1', '$valor', '$estoque')";
if (mysqli_query($conexao, $sql)){
    echo "Novo registro realizado com sucesso!";
    header('Location: index.php');
}
else {
    echo "Erro identificado:" . mysqli_error($conexao);
}
?>