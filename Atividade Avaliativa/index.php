<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 20px;
        }

        .produtos {
            background-color: #bbb;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .clientes{
            text-align: center;
            margin-bottom: 20px;
            background-color: #bbb;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #888;
            color:black;
        }

        input[type="text"],
        input[type="number"] {
            width: 280px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 14px;
            color:black;
        }

        input[type="submit"] {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            color: #ffff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            gap:20px;
        }

        input[type="submit"]:hover {
            background-color: #0056b8;
        }
        h2{
            text-align:center;
            color: blue;
        }
        button{
            gap:20px;
            width: 300px;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
    <div class="container">
         
        <div class="produtos">
            <h2>Cadastro de Produtos</h2>
            <form action="produto.php" method="POST">
            <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="estoque">Descrição:</label>
    <input type="text" id="descricao" name="descricao" required>

    <label for="valor">Valor:</label>
    <input type="number" id="valor" name="valor" required>


    <input type="submit" value="Enviar" >

    <br><br>


    <a href="index.php">
        <button type="button">Voltar para o Login</button>
    </a>
        <br><br>
    <a href="cookie.php">
        <button type="button">Adicionar cookies</button>
    </a>


                
            </form>
            <?php
            include_once('connection.php');
            echo "<br>";
            $sql = "SELECT * FROM produtos ORDER BY nome ASC";
            $resultado = mysqli_query($connection, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "ID: " . $linha['ID'] . " - Nome: " . $linha['Nome'] . "<br>";
                }
            } else {
                echo "Nenhum registro encontrado.";
            }
            ?>
        </div>

        <div class="clientes">
            <h2>Cadastro de Clientes</h2>
            <form action="usuario.php" method="POST">
                <label for="nome-cliente">Nome:</label>
                <input type="text" id="nome-cliente" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="number" id="senha" name="senha" required>
                
                <input type="submit" value="Enviar">
                <br><br>
                <a href="index.php">

        <button type="button">Voltar para o Login</button>
    </a>
    <br><br>
    <a href="cookies.php">
        <button type="button">Adicionar cookies</button>
    </a>
            </form>
            <?php
            include_once('connection.php');
            echo "<br>";
            $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
            $resultado = mysqli_query($connection, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "ID: " . $linha['ID'] . " - Nome: " . $linha['Nome'] . "<br>";
                }
            } else {
                echo "Registro não encontrado.";
            }
            ?>
        </div>
    </div>
</body>
</html>