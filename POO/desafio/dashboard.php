<?php
    session_start();
    $loginCerto = 'babi';
    $senhaCerto = '123';

    //Verifica se veio do Formulário
    if(isset($_POST['login'])){
        //Verifica se o login está correto
        if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){

        }
    }

    if (isset($_POST['login'])){
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
    }

    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
    echo '<br>';
    echo $_POST['login'];
    echo '<br>';
    echo $_POST['senha'];
    }else{
        header('Location: index.php');
    }

// logout.php
session_start();
session_unset(); // Remove todas as variáveis de sessão
session_destroy(); // Destrói a sessão atual

// Limpa cookies criados
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach ($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time() - 3600, '/'); // Expira o cookie
    }
}

// Redireciona para a página de login ou outra página
header("Location: index.php");
exit

// salvar_cookie.php
($_SERVER['REQUEST_METHOD'] === 'POST'); {
    
   
    // Define cookies com os dados do usuário
       
    setcookie('username', $_POST['username'], time() + (86400 * 30), "/"); // Validade de 30 dias
        
      
    setcookie('email', $_POST['email'], time() + (86400 * 30), "/");
    
        // Redireciona para uma página ou exibe mensagem
        
        
    header("Location: dashboard.php");
    exit;
    }
   


// Verifica sessão ou cookies {

    
header("Location: dashboard.php") // Redireciona para a página principal
    
  

    

    
?>
