<?php
$host = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'loja';

// Conexão com o BD
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

//Confirma realmente se está conectado ou não
if (!$conexao) {
    die('Erro ao conectar:' . mysqli_connect_error());
}
echo "Conectado com sucesso! <br>";
?>