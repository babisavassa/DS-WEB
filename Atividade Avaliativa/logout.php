<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie('nome', '', -3600, '/');
    setcookie('email', '', -3600, '/');
    header('Location: usuario.php');
?>