<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Clientes </title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css"> <!-- /= Pasta ou diretorio .= pasta atual ..= Volta uma pasta para tras -->
</head>
<body>

    <!--CSS Estilizando a pagina-->

    <div class="menu">
        <ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu meumenu-active" title="Clients">Clientes </a></li>
        <li><a href="#" class="meumenu" title="produtoss">Produtos </a></li>
        <li><a href="#" class="meumenu" title="vendas">Vendas </a></li>
        </ul>
    </div>

    <div class= "container"> <!---->
        <div class= "formulario"> <!--Div para o formulario--> 

            <form action= "insertion.php" method="POST" name="formulario" onsubmit="return validarDadosCliente()"> <!--formulario enviando para insertion.php por POST=metodo mais seguro pois fica oculto-->
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
                <p class="erro-input" id="erro-nome"></p>

                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email">
                <p class="erro-input" id="erro-email"></p> 

                <label for="observacao">Observação do cliente: </label>
                <textarea name="observacao" cols="30" rows="4" id=observacao></textarea> <!--Descrição-->
                <p class="erro-input" id="erro-observacao"></p>

                <input type="Submit"> 
            </form>
        </div> 

        <table id="clientes"> <!--Organizando a exibição dos cadastros como tabela-->
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Observação</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
                <?php

        include 'conexao.php';


        echo "<h2>Exibindo: </h2>";
        //Exemplo de consulta com muitas linhas
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO:: FETCH_ASSOC); // Todos os registros retornados
        foreach($todos as $linha){ //percorendo cada linha da tabela clientes
            $idCliente = $linha ['id'];
            $nomeCliente = $linha ['nome'];
            $emailCliente = $linha ['email'];
            $observacaoCliente = $linha ['observacao'];

            echo " 
                <tr> 
                    <td>$nomeCliente</td>
                    <td>$emailCliente</td>
                    <td>$observacaoCliente</td>
                    <td><a href='update.php?id=$idCliente'><i class='fa-solid fa-pencil'></i></a></td> 
                    <td><a href='delete.php?id=$idCliente'><i class='fa-solid fa-trash'></i></a></td>
                </tr>
            "; //tr = cabeçalho, e  td = dados e incon na tabela 

            //echo "Linha: ".$idCliente . "<br>"= printando as linhas na tela;

        /* echo "Nome: ".$nomeCliente . "<br>";
        echo "E-mail: ".$emailCliente . "<br>";
        echo "Observacao: ".$observacaoCliente . "<br>";
        echo "<a href='update.php?id=$idCliente'>Editar Cliente</a>";
         echo "<br>";
        echo "<a href='delete.php?id=$idCliente'>Deletar Cliente</a>";
        echo "<br><br><br>";*/
        
        }
    ?>
                
         </table>   
         <h3><a href="#">Link de teste</a></h3>    
</div>

</body>
<script src ="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/899ed25de9.js" crossorigin="anonymous"></script>
</html>