<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection_bd</title>
</head>
<body>
    <h3>Produtos</h3>
    <form action= 'produto_insertion.php' method="POST">
        <label>Nome:</label>
        <input type="text" name="nome1">
        <br>
        <label>Valor:</label>
        <input type="text" name="valor">
        <br>
        <label>Estoque:</label>
        <input type="text" name="estoque">
        <br>
        <button>Enviar</button>
    </form>

    <h3>Clientes</h3>
    <form action= 'clientes_insertion.php' method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Email:</label>
        <input type="text" name="email">
        <br>
        <button>Enviar</button>
    </form>

    <br><br><br>

    <?php
    include_once('connection.php');

    $sql = "SELECT * FROM clientes order by nome ASC";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0){
        echo "<h2>Clientes:<h2>";
        while ($linha = mysqli_fetch_assoc($resultado)){
            echo "Nome: " .$linha['nome']."<br>" . "Email:" . $linha['email'] . "<br>";
        }
    } else {
        echo "Registro do cliente não  encontrado. <br>";
    }
    ?>

<?php
    include_once('connection.php');

    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0){
        echo "<h2>Produtos:<h2>";
        while ($linha = mysqli_fetch_assoc($resultado)){
            echo "Nome: " .$linha['nome1']."<br>" . "Valor:" . $linha['valor'] . "<br>";
        }
    } else {
        echo "Registro do produto não  encontrado. <br>";
    }
    ?>
</body>
</html>