<?php

include_once('connection.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($nome === 'admin' && $senha === '123') {
    header('Location: login.php');
} else {

    echo "Usuário ou senha inválido.";
    echo '<form action="logout.php" method="POST">
        <button type="submit" name="action" value="destroy">Excluir Sessão</button>
      </form>';
}
?>