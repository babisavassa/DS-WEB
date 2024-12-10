<?php
    session_start();
   
    //Verifica se veio do Formulário
    if(isset($_POST['login'])){

        //Verifica se o login esta correto
        include_once(connection.php);
        $login = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "SELECT * FROM funcionario WHERE email = '$login''";
        $resultado = mysqli_query($conexao, $sql);

        // Verificar se há registros
        if (myqli_num_rows($resultado) > 0) {
            
            //Converte em Array Associativo
            $linha = mysqli_fetch_assoc($resultado);
            //Grava os dados da sessão
            $_SESSION['login'] = $linha['email'];
            $_SESSION['senha'] = $linha['senha'];
        }else{
            $_SESSION['erro'] = "Login ou senha invalida";
        }
    }

    if(isset($_SESSION['nome']) and isset($_SESSION['email'])){
        echo '<br>';
        echo $_SESSION['nome'];
        echo '<br>';
        echo $_SESSION['email'];
        echo '<br><br>';
        echo '<form action='cookies.php' method='POST'>
                '<input type= 'submit'>
            </form>
        echo '<a href="logout.php"><button>Logout</button></a>';
    }else{
        header('Location: usuario.php'); 
    }


    

?>