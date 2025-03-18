<?php
$host = 'xampp';
$nome = 'root';
$email = '';
$banco = 'pdo';

$conexao = mysqli_connect($host, $nome, $email, $banco);

if (!$connection) {
    die('Erro ao conectar:' . mysqli_connect_error());
}
echo "Conectado com sucesso! <br>";
?>