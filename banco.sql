CREATE DATABASE sistema_veiculos;

USE sistema_veiculos;

CREATE TABLE veiculos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  placa VARCHAR(20) NOT NULL,
  marca VARCHAR(100) NOT NULL,
  modelo VARCHAR(100) NOT NULL,
  ano_fabricacao INT NOT NULL,
  ano_modelo INT NOT NULL,
  cor VARCHAR(50) NOT NULL,
  combustivel VARCHAR(50) NOT NULL,
  quilometragem INT NOT NULL,
  chassi VARCHAR(100) NOT NULL,
  renavam VARCHAR(100) NOT NULL,
  data_cadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  observacoes TEXT NOT NULL
);