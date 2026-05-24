<?php
include "conexao.php";

header("Content-Type: application/json");

$placa = $_POST["placa"] ?? "";
$marca = $_POST["marca"] ?? "";
$modelo = $_POST["modelo"] ?? "";
$ano_fabricacao = $_POST["ano_fabricacao"] ?? "";
$ano_modelo = $_POST["ano_modelo"] ?? "";
$cor = $_POST["cor"] ?? "";
$combustivel = $_POST["combustivel"] ?? "";
$quilometragem = $_POST["quilometragem"] ?? "";
$chassi = $_POST["chassi"] ?? "";
$renavam = $_POST["renavam"] ?? "";
$data_cadastro = $_POST["data_cadastro"] ?? "";
$observacoes = $_POST["observacoes"] ?? "";

if (
    empty($placa) ||
    empty($marca) ||
    empty($modelo) ||
    empty($ano_fabricacao) ||
    empty($ano_modelo) ||
    empty($cor) ||
    empty($combustivel) ||
    empty($quilometragem) ||
    empty($chassi) ||
    empty($renavam) ||
    empty($data_cadastro) ||
    empty($observacoes)
) {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Todos os campos são obrigatórios."
    ]);
    exit;
}

$sql = "INSERT INTO veiculos 
    (placa, marca, modelo, ano_fabricacao, ano_modelo, cor, combustivel, quilometragem, chassi, renavam, data_cadastro, observacoes)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssiississss",
    $placa,
    $marca,
    $modelo,
    $ano_fabricacao,
    $ano_modelo,
    $cor,
    $combustivel,
    $quilometragem,
    $chassi,
    $renavam,
    $data_cadastro,
    $observacoes
);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode([
        "status" => "sucesso",
        "mensagem" => "Veículo cadastrado com sucesso!"
    ]);
} else {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Erro ao cadastrar veículo."
    ]);
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>