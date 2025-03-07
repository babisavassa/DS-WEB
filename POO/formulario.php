<?php
include_once('connection.php');

$nome= $_POST['nome'];
$email= $_POST['email'];

$sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";
if (mysqli_query($connection,$sql)) {
    echo "Novo registro realizado com sucesso!";
    header('Location: html.php');
}
else {
    echo "Erro identificado:" . mysqli_error($connection);
}
?>
