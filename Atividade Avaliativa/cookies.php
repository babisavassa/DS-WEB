<?php
session_start();
$_SESSION['nome'] = ['nome'];
$_SESSION['descricao'] = ['descricao'];
setcookie("nome", $_SESSION['nome'], time() + 3600, '/');
setcookie("descricao", $_SESSION['descricao'], time() + 3600, '/');
setcookie("preco" , $_SESSION['preco'] , time() + 3600, '/');
header('Location:usuario.php');

header('Location: dashboard.php');
?>
