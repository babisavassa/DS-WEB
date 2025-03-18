<?php
    
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
 
        //redirecionando com script
        echo "<script>alert('Esta faltando o metodo POST')
        window.location.href = 'cliente.php'; 
        </script>";

        //header("Location: index.php"); //mando de volta para o index = redirecionamento com php
    }

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $observacao = $_POST['observacao'];

        include "conexao.php"; //ligação com banco de dados

        echo "<h2>Inserindo dados</h2>";
        $statement = $db->prepare("INSERT INTO clientes (nome, email, observacao) VALUES (:nome, :email, :observacao)"); //placehoder nomeavel
        $statement->bindParam(':nome', $nome); //bindParam = deixando seguro para não acessarem
        $statement->bindParam(':email', $emial);
        $statement->bindParam(':observacao', $observacao);
    
        $statement->execute(array(
        ':nome' => $nome,  //desiguinando para chamar a variavel nome
        ':email' => $email, //email = email
        ':observacao' =>  $observacao //obesrvacao= observacao 
        ));
          
        
        header("Location: cliente.php"); //Redirecionamento com PHP //manda para cliente.php
        

?>
<?php
