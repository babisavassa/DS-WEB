<?php
     if($_SERVER['REQUEST_METHOD'] != 'POST'){
        header("Location: index.php");
        echo "<script>alert('Esta faltando o método POST')
        window.location.href = 'index.php';
        </script>";
    //header("Location: index.php"); Redirecionamento com PHP
    }

   $nome = $_POST['nome'];
   $email = $_POST['email'];

    include "conexao.php";

    echo "<h2>Inserindo dados</h2>";
    $statement = $db->prepare("INSERT INTO clientes (nome, email) values (?, ?)");

    $statement->execute(array($nome, $email));

    header("Location: index.php"); //Redirecionamento com PHP


?>