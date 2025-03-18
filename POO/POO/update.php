<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC); 
    ?>
    
    <div class="container">
        <div class="formulario">
            <form action="update.php" method="POST">
                <label for=""> Nome: </label>
                <input type="text" name="nome">
                <br>
                <label for=""> Email: </label>
                <input type="text" name="email">
                <br>
                <input type="submit">

            </form>
        </div>

<?php
    $novoNome = "Babi Savassa";
    $email = "barbara.savassa16@gmail.com";

    $stmt = $db->prepare('UPDATE clientes SET nome = :nome WHERE email = :email');
    $stmt->execute(array(
    ':nome' => $novoNome,
    ':email' => $email
    ));
    if( $stmt->rowCount() > 0 ) {
    echo "Ocorreram ".$stmt->rowCount()." alterações na tabela.";
    } else {
    echo 'Nada foi alterado.';
    }
