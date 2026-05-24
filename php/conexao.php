<?php
$host = 'localhost';
$usuario = 'root';
$senha = "";
$banco = "sistema_veiculos";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>