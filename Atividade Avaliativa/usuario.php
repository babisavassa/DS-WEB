<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa</title>
    
<style>
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
        }
        .horizontal div{
            padding: 20px;
            border: 1px solid lightgrey;
            justify-content: center;
        }
        /* Estilo geral */
        body{
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(45deg, #a87ecc, #803bbc, #d6531b);
        font-family: Arial, sans-serif;
        }

    </style>
    </head>
    <body> 
        <div class= "horizontal">
        <div>
        <h3>Login</h3>
        <form action= '_insertion.php' method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <br>
        <label>Email:</label>
        <input type="text" name="text">
        <br>
        <br>
        <button>Enviar</button>
        <a href="usuario.php">
        <button type="button">Voltar para o Login</button>
    </a>
    </div>
    </form>
    
    <div>
    <h3>Produtos</h3>
    <form action= 'produto.php' method="POST">
        <label>Nome:</label>
        <input type="text" name="nome1">
        <br>
        <br>
        <label>Descrição:</label>
        <input type="text" name="valor">
        <br>
        <br>
        <label>Preço:</label>
        <input type="text" name="estoque">
        <br>
        <br>
        <button>Enviar</button>
        <br><br>
    <a href="cookies.php">
        <button type="button">Adicionar cookies</button>
    </a>
    
    </div>
    </form>

           