<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'SistemaPHP';

$conexao = mysqli_connect($host,$user,$password,$database) 
or die('Erro ao conectar ao banco de dados');

?>