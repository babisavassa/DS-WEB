<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>class="menu">
        <ul> 
           
         <li><a href="#" class="meumenu" title="Home">Home</a></li>
        <li><a href="#" class="meumenu" title="Clients">Clients</a></li>
        <li><a href="#" class="meumenu" title="Products">Products</a></li>
        <li><a href="#" class="meumenu" title="Sales">Sales</a></li>
</ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertion.php" method="POST" name="formulario" onsubmit="return validarDadosClientes()">
                <label for=""> Nome: </label>
                <input type="text" name="nome">
                <br>
                <label for=""> Email: </label>
                <input type="text" name="email">
                <br>
                <label>Observação do Cliente:</label>
                <textarea name="observacao" coals="30" rows="4"></textarea>
                <input type="submit">

            </form>
        </div>
    <?php
        include 'conexao.php';

        echo "<h2>Exemplo de consulta com muitas linhas<h2>";
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        foreach($todos as $linha){
            $idCliente = $linha['id'];
            $nomeCliente = $linha['nome'];
            $emailCliente = $linha['email'];


            echo "Linha:". $idCliente; 
            echo "<br>";
            echo "Nome:". $nomeCliente;
            echo "<br>";
            echo "E-mail:". $emailCliente;
            echo "<br>";
            echo "<a href='update.php?id=$idCliente'>Editar Cliente</a>";
            echo "<br>";
            echo "<a href='delete.php?id=$idCliente'>Deletar Cliente</a>";
            echo "<br><br>";
        }
     
    ?>
    </div>
</body>
<script src="script.js"> </script>
</html>