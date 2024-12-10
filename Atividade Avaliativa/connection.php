<?php
$host = 'localhost';
$usuario ='root';
$senha = 'usbw';
$bd = 'floricultura';
$connection= mysqli_connect($host, $usuario, $senha, $bd);

if (!$connection) {
die('<span style="color:red;">Erro na conexão: <br></span>' . mysqli_connect_error());
}
echo"<br>";
echo '<strong><span style="color: darkgreen;">Conexão bem-sucedida!<br></span></strong>';

?> 