<?php

include_once('connection.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "INSERT INTO usuarios (Nome, Email, Senha) VALUES('$nome', '$email', $senha)";

if (mysqli_query($conexao, $sql)) {
echo "Novo registro inserido com sucesso!";
header('location: login.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>