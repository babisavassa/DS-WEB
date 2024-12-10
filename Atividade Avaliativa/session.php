<?php

session_start();

$_SESSION['nome'] =['nome'];
$_SESSION['email'] =['email'] ;
setcookie("email" , $_SESSION['email'] , time() + 3600 , '/');

echo 'Variável criada com sucesso';

?>