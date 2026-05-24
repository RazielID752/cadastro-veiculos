<?php
include "conexao.php";

header("Content-Type: application/json");

$sql = "SELECT * FROM veiculos ORDER BY id DESC";
$resultado = mysqli_query($conexao, $sql);

$veiculos = [];

while ($linha = mysqli_fetch_assoc($resultado)) {
    $veiculos[] = $linha;
}

echo json_encode($veiculos);

mysqli_close($conexao);
?>